<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_latest_posts($limit = 3) {
        return $this->db->select('posts.*, users.name as author_name')
                        ->from('posts')
                        ->join('users', 'users.id = posts.author_id', 'left')
                        ->where('posts.status', 'published')
                        ->where('posts.published_at <=', date('Y-m-d H:i:s'))
                        ->order_by('posts.published_at', 'DESC')
                        ->limit($limit)
                        ->get()
                        ->result();
    }

    public function get_post_by_slug($slug) {
        return $this->db->select('posts.*, users.name as author_name')
                        ->from('posts')
                        ->join('users', 'users.id = posts.author_id', 'left')
                        ->where('posts.slug', $slug)
                        ->where('posts.status', 'published')
                        ->where('posts.published_at <=', date('Y-m-d H:i:s'))
                        ->get()
                        ->row();
    }
}