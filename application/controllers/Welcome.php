<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'CI3 + Tailwind CSS Starter Kit';
		$data['content'] = $this->load->view('pages/welcome', NULL, TRUE);
		$this->load->view('layouts/main', $data);
	}
}
