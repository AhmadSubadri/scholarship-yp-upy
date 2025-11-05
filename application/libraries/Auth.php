<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth
{
    protected $CI;
    protected $config;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->database();
        $this->CI->load->helper('string');
        $this->CI->load->helper('security');

        // Load auth config
        $this->CI->config->load('auth', TRUE);
        $this->config = $this->CI->config->item('auth');
    }

    /**
     * Register new user
     */
    public function register($data)
    {
        $this->CI->load->model('user_model');

        // Validate email uniqueness
        if ($this->CI->user_model->get_by_email($data['email'])) {
            return ['success' => false, 'message' => 'Email sudah terdaftar'];
        }

        // Generate verification token
        $data['verification_token'] = random_string('alnum', 32);
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $data['status'] = 'unverified';
        $data['role'] = 'user';
        $data['created_at'] = date('Y-m-d H:i:s');

        // Save user
        $user_id = $this->CI->user_model->insert($data);

        if ($user_id) {
            // Send verification email
            $this->_send_verification_email($data['email'], $data['verification_token']);
            return ['success' => true, 'message' => 'Registrasi berhasil. Silakan cek email Anda untuk verifikasi.'];
        }

        return ['success' => false, 'message' => 'Gagal melakukan registrasi'];
    }

    /**
     * Login user
     */
    public function login($email, $password)
    {
        $this->CI->load->model('user_model');

        $user = $this->CI->user_model->get_by_email($email);

        if (!$user) {
            return ['success' => false, 'message' => 'Email atau password salah'];
        }

        if (!password_verify($password, $user->password)) {
            return ['success' => false, 'message' => 'Email atau password salah'];
        }

        if ($user->status === 'unverified') {
            return ['success' => false, 'message' => 'Silakan verifikasi email Anda terlebih dahulu'];
        }

        if ($user->status === 'blocked') {
            return ['success' => false, 'message' => 'Akun Anda telah diblokir'];
        }

        // Set session
        $session_data = [
            'user_id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'role' => $user->role,
            'logged_in' => TRUE
        ];

        $this->CI->session->set_userdata($session_data);

        // Update last login
        $this->CI->user_model->update($user->id, ['last_login' => date('Y-m-d H:i:s')]);

        return ['success' => true, 'message' => 'Login berhasil', 'data' => $user];
    }

    /**
     * Start password reset process
     */
    public function forgot_password($email)
    {
        $this->CI->load->model('user_model');

        $user = $this->CI->user_model->get_by_email($email);

        if (!$user) {
            return ['success' => false, 'message' => 'Email tidak ditemukan'];
        }

        // Generate reset token
        $reset_token = random_string('alnum', 32);
        $reset_expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Save reset token
        $this->CI->user_model->update($user->id, [
            'reset_token' => $reset_token,
            'reset_expires' => $reset_expires
        ]);

        // Send reset email
        $this->_send_reset_email($email, $reset_token);

        return ['success' => true, 'message' => 'Instruksi reset password telah dikirim ke email Anda'];
    }

    /**
     * Reset password with token
     */
    public function reset_password($token, $new_password)
    {
        $this->CI->load->model('user_model');

        $user = $this->CI->user_model->get_by_reset_token($token);

        if (!$user) {
            return ['success' => false, 'message' => 'Token reset password tidak valid'];
        }

        if (strtotime($user->reset_expires) < time()) {
            return ['success' => false, 'message' => 'Token reset password telah kadaluarsa'];
        }

        // Update password
        $this->CI->user_model->update($user->id, [
            'password' => password_hash($new_password, PASSWORD_BCRYPT),
            'reset_token' => NULL,
            'reset_expires' => NULL
        ]);

        return ['success' => true, 'message' => 'Password berhasil direset'];
    }

    /**
     * Verify email with token
     */
    public function verify_email($token)
    {
        $this->CI->load->model('user_model');

        $user = $this->CI->user_model->get_by_verification_token($token);

        if (!$user) {
            return ['success' => false, 'message' => 'Token verifikasi tidak valid'];
        }

        // Activate user
        $this->CI->user_model->update($user->id, [
            'status' => 'active',
            'verification_token' => NULL,
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);

        return ['success' => true, 'message' => 'Email berhasil diverifikasi'];
    }

    /**
     * Check if user is logged in
     */
    public function is_logged_in()
    {
        return (bool) $this->CI->session->userdata('logged_in');
    }

    /**
     * Check if user has role
     */
    public function has_role($role)
    {
        return $this->CI->session->userdata('role') === $role;
    }

    /**
     * Logout user
     */
    public function logout()
    {
        $this->CI->session->sess_destroy();
    }

    /**
     * Send verification email
     */
    private function _send_verification_email($email, $token)
    {
        $this->CI->load->library('email');

        $verify_url = base_url("auth/verify/{$token}");

        $this->CI->email->from('noreply@beasiswa-ypupy.ac.id', 'Beasiswa YP UPY');
        $this->CI->email->to($email);
        $this->CI->email->subject('Verifikasi Email - Beasiswa YP UPY');

        $message = "
            <h2>Verifikasi Email Anda</h2>
            <p>Terima kasih telah mendaftar di sistem Beasiswa YP UPY.</p>
            <p>Silakan klik link berikut untuk memverifikasi email Anda:</p>
            <p><a href='{$verify_url}'>{$verify_url}</a></p>
            <p>Link ini akan kadaluarsa dalam 24 jam.</p>
            <p>Jika Anda tidak merasa mendaftar, abaikan email ini.</p>
        ";

        $this->CI->email->message($message);
        $this->CI->email->send();
    }

    /**
     * Send password reset email
     */
    private function _send_reset_email($email, $token)
    {
        $this->CI->load->library('email');

        $reset_url = base_url("auth/reset/{$token}");

        $this->CI->email->from('noreply@beasiswa-ypupy.ac.id', 'Beasiswa YP UPY');
        $this->CI->email->to($email);
        $this->CI->email->subject('Reset Password - Beasiswa YP UPY');

        $message = "
            <h2>Reset Password</h2>
            <p>Anda telah meminta untuk mereset password Anda.</p>
            <p>Silakan klik link berikut untuk mereset password:</p>
            <p><a href='{$reset_url}'>{$reset_url}</a></p>
            <p>Link ini akan kadaluarsa dalam 1 jam.</p>
            <p>Jika Anda tidak meminta reset password, abaikan email ini.</p>
        ";

        $this->CI->email->message($message);
        $this->CI->email->send();
    }
}
