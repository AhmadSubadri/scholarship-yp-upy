<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('scholarship_model');
        $this->load->model('post_model');
    }

    public function index()
    {
        // Get active banners for slider
        $data['banners'] = $this->db->where('status', 'active')
            ->order_by('order_index', 'ASC')
            ->get('banners')
            ->result();

        // Get featured scholarships
        $data['scholarships'] = $this->scholarship_model->get_featured_scholarships();

        // Get latest news
        $data['latest_news'] = $this->post_model->get_latest_posts(3);

        // Page data
        $data['title'] = 'Beasiswa YP UPY - Universitas PGRI Yogyakarta';
        $data['content'] = 'pages/home';

        // Load view
        $this->load->view('layouts/frontend/base', $data);
    }
}
