<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth');

        // Check if user is logged in and has admin role
        if (!$this->auth->is_logged_in() || !$this->auth->has_role('admin')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        redirect('admin/dashboard');
    }

    public function dashboard()
    {
        $this->load->model('scholarship_model');
        $this->load->model('application_model');
        $this->load->model('user_model');
        $this->load->model('post_model');

        // Get dashboard statistics
        $data['total_scholarships'] = $this->scholarship_model->count_all();
        $data['active_scholarships'] = $this->scholarship_model->count_active();
        $data['total_applications'] = $this->application_model->count_all();
        $data['pending_applications'] = $this->application_model->count_by_status('pending');
        $data['total_users'] = $this->user_model->count_all();
        $data['total_posts'] = $this->post_model->count_all();

        // Get recent activities
        $data['recent_applications'] = $this->application_model->get_recent(5);
        $data['recent_users'] = $this->user_model->get_recent(5);

        // Chart data for applications
        $data['monthly_applications'] = $this->application_model->get_monthly_stats();
        $data['application_by_status'] = $this->application_model->get_stats_by_status();

        // Page data
        $data['title'] = 'Dashboard Admin - Beasiswa YP UPY';
        $data['content'] = 'admin/dashboard';

        $this->load->view('layouts/admin/base', $data);
    }
}
