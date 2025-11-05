<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $current_user = null;

    public function __construct()
    {
        parent::__construct();
        // load user model to access current user
        $this->load->model('User_model');

        $user_id = $this->session->userdata('user_id');
        if ($user_id) {
            $this->current_user = $this->User_model->get($user_id);
            // make available to views
            $this->load->vars('current_user', $this->current_user);
        }
    }

    protected function require_login()
    {
        if (!$this->session->userdata('user_id')) {
            $this->session->set_flashdata('error', 'Please login to continue.');
            redirect('login');
            exit;
        }
    }

    protected function require_role($roles = [])
    {
        $this->require_login();
        if (!is_array($roles)) $roles = [$roles];
        if (!in_array($this->current_user->role, $roles)) {
            show_error('You do not have permission to access this page.', 403);
        }
    }
}
