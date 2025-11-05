<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_featured_scholarships($limit = 3) {
        return $this->db->select('id, title, slug, description, banner_image, close_date')
                        ->where('status', 'open')
                        ->where('close_date >=', date('Y-m-d'))
                        ->order_by('created_at', 'DESC')
                        ->limit($limit)
                        ->get('scholarships')
                        ->result();
    }

    public function get_active_scholarships($limit = null, $offset = 0) {
        $this->db->select('id, title, slug, description, banner_image, close_date')
                 ->where('status', 'open')
                 ->where('close_date >=', date('Y-m-d'))
                 ->order_by('created_at', 'DESC');
        
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        return $this->db->get('scholarships')->result();
    }

    public function get_scholarship_by_slug($slug) {
        return $this->db->where('slug', $slug)->get('scholarships')->row();
    }
}