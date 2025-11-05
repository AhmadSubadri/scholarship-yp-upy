<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function login()
    {
        if ($this->auth->is_logged_in()) {
            redirect('home');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Login - Beasiswa YP UPY';
            $data['content'] = 'auth/login';
            $this->load->view('layouts/auth/base', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $remember = (bool) $this->input->post('remember');

            $result = $this->auth->login($email, $password, $remember);

            if ($result['success']) {
                $user = $result['data'];
                $redirect = $this->config->item('auth')['redirect_routes'][$user->role] ?? 'home';
                redirect($redirect);
            } else {
                $this->session->set_flashdata('error', $result['message']);
                redirect('auth/login');
            }
        }
    }

    public function register()
    {
        if ($this->auth->is_logged_in()) {
            redirect('home');
        }

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Register - Beasiswa YP UPY';
            $data['content'] = 'auth/register';
            $this->load->view('layouts/auth/base', $data);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];

            $result = $this->auth->register($data);

            if ($result['success']) {
                $this->session->set_flashdata('success', $result['message']);
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', $result['message']);
                redirect('auth/register');
            }
        }
    }

    public function forgot_password()
    {
        if ($this->auth->is_logged_in()) {
            redirect('home');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Lupa Password - Beasiswa YP UPY';
            $data['content'] = 'auth/forgot_password';
            $this->load->view('layouts/auth/base', $data);
        } else {
            $email = $this->input->post('email');
            $result = $this->auth->forgot_password($email);

            if ($result['success']) {
                $this->session->set_flashdata('success', $result['message']);
            } else {
                $this->session->set_flashdata('error', $result['message']);
            }

            redirect('auth/forgot-password');
        }
    }

    public function reset_password($token = null)
    {
        if (!$token) {
            show_404();
        }

        if ($this->auth->is_logged_in()) {
            redirect('home');
        }

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Reset Password - Beasiswa YP UPY';
            $data['content'] = 'auth/reset_password';
            $data['token'] = $token;
            $this->load->view('layouts/auth/base', $data);
        } else {
            $password = $this->input->post('password');
            $result = $this->auth->reset_password($token, $password);

            if ($result['success']) {
                $this->session->set_flashdata('success', $result['message']);
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', $result['message']);
                redirect('auth/reset-password/' . $token);
            }
        }
    }

    public function verify($token = null)
    {
        if (!$token) {
            show_404();
        }

        $result = $this->auth->verify_email($token);

        if ($result['success']) {
            $this->session->set_flashdata('success', $result['message']);
        } else {
            $this->session->set_flashdata('error', $result['message']);
        }

        redirect('auth/login');
    }

    public function logout()
    {
        $this->auth->logout();
        redirect('auth/login');
    }
}
