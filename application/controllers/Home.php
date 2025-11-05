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
        try {
            // Get active banners for slider
            $banners = $this->db->where('status', 'active')
                ->order_by('order_index', 'ASC')
                ->get('banners')
                ->result();
            $data['banners'] = !empty($banners) ? $banners : [];

            // Get featured scholarships
            $scholarships = $this->scholarship_model->get_featured_scholarships();
            $data['scholarships'] = !empty($scholarships) ? $scholarships : [];

            // Get latest news
            $latest_news = $this->post_model->get_latest_posts(3);
            $data['latest_news'] = !empty($latest_news) ? $latest_news : [];

            // Get site settings
            $settings = $this->get_site_settings();

            // Page data
            $data['title'] = isset($settings['site_name']) ? $settings['site_name'] . ' - ' . $settings['site_tagline'] : 'Beasiswa YP UPY - Universitas PGRI Yogyakarta';
            $data['content'] = 'pages/home';
            $data['meta_description'] = isset($settings['meta_description']) ? $settings['meta_description'] : 'Program beasiswa untuk mendukung pendidikan berkualitas di Universitas PGRI Yogyakarta';

            // Load view
            $this->load->view('layouts/frontend/base', $data);
        } catch (Exception $e) {
            log_message('error', 'Error in Home/index: ' . $e->getMessage());
            show_error('Terjadi kesalahan dalam memuat halaman. Silakan coba beberapa saat lagi.', 500, 'Error');
        }
    }

    private function get_site_settings()
    {
        try {
            $settings = $this->db->get('settings')->result_array();
            $formatted_settings = [];

            if (!empty($settings)) {
                foreach ($settings as $setting) {
                    if (isset($setting['key']) && isset($setting['value'])) {
                        $formatted_settings[$setting['key']] = $setting['type'] === 'json'
                            ? json_decode($setting['value'], true)
                            : $setting['value'];
                    }
                }
            }

            return $formatted_settings;
        } catch (Exception $e) {
            log_message('error', 'Error in get_site_settings: ' . $e->getMessage());
            return [];
        }
    }
}
