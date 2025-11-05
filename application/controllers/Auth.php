<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function register()
    {
        if ($this->session->userdata('user_id')) {
            redirect('/');
        }

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() === TRUE) {
            $this->load->model('User_model');
            $email = $this->input->post('email', TRUE);
            if ($this->User_model->get_by_email($email)) {
                $this->session->set_flashdata('error', 'Email is already registered.');
                redirect('register');
            }

            $data = [
                'name' => $this->input->post('name', TRUE),
                'email' => $email,
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'applicant',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ];
            $user_id = $this->User_model->create($data);
            if ($user_id) {
                $this->session->set_userdata(['user_id' => $user_id]);
                $this->session->set_flashdata('success', 'Registration successful. Welcome!');
                redirect('/');
            }
            $this->session->set_flashdata('error', 'Unable to create account.');
        }

        $data['title'] = 'Register';
        $data['content'] = $this->load->view('auth/register', NULL, TRUE);
        $this->load->view('layouts/main', $data);
    }

    public function login()
    {
        if ($this->session->userdata('user_id')) {
            redirect('/');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === TRUE) {
            $this->load->model('User_model');
            $email = $this->input->post('email', TRUE);
            $password = $this->input->post('password');
            $user = $this->User_model->verify_credentials($email, $password);
            if ($user) {
                $this->session->set_userdata(['user_id' => $user->id]);
                $this->session->set_flashdata('success', 'Login successful.');
                redirect('/');
            }
            $this->session->set_flashdata('error', 'Invalid email or password.');
            redirect('login');
        }

        $data['title'] = 'Login';
        $data['content'] = $this->load->view('auth/login', NULL, TRUE);
        $this->load->view('layouts/main', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('success', 'You have been logged out.');
        redirect('login');
    }
}
