<?php
// Hero Section with Slider
$this->load->view('components/frontend/hero-slider', ['banners' => $banners]);

// Featured Scholarships Section
$this->load->view('components/frontend/featured-scholarships', ['scholarships' => $scholarships]);

// About Section
$this->load->view('components/frontend/about-section');

// Latest News Section
$this->load->view('components/frontend/latest-news', ['posts' => $latest_news]);

// CTA Section
$this->load->view('components/frontend/cta-section');
