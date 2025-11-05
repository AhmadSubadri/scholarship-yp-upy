<?php
$current_url = $this->uri->segment(2);
$role = $this->session->userdata('role');

$menu_items = [
    'super_admin' => [
        ['url' => 'dashboard', 'icon' => 'home', 'title' => 'Dashboard'],
        ['url' => 'users', 'icon' => 'users', 'title' => 'Pengguna'],
        ['url' => 'scholarships', 'icon' => 'academic-cap', 'title' => 'Beasiswa'],
        ['url' => 'applications', 'icon' => 'document-text', 'title' => 'Pendaftaran'],
        ['url' => 'posts', 'icon' => 'newspaper', 'title' => 'Berita'],
        ['url' => 'gallery', 'icon' => 'photo', 'title' => 'Galeri'],
        ['url' => 'careers', 'icon' => 'briefcase', 'title' => 'Karir'],
        ['url' => 'settings', 'icon' => 'cog', 'title' => 'Pengaturan']
    ],
    'admin_content' => [
        ['url' => 'dashboard', 'icon' => 'home', 'title' => 'Dashboard'],
        ['url' => 'posts', 'icon' => 'newspaper', 'title' => 'Berita'],
        ['url' => 'gallery', 'icon' => 'photo', 'title' => 'Galeri'],
        ['url' => 'careers', 'icon' => 'briefcase', 'title' => 'Karir']
    ],
    'admin_beasiswa' => [
        ['url' => 'dashboard', 'icon' => 'home', 'title' => 'Dashboard'],
        ['url' => 'scholarships', 'icon' => 'academic-cap', 'title' => 'Beasiswa'],
        ['url' => 'applications', 'icon' => 'document-text', 'title' => 'Pendaftaran']
    ],
    'reviewer' => [
        ['url' => 'dashboard', 'icon' => 'home', 'title' => 'Dashboard'],
        ['url' => 'applications', 'icon' => 'document-text', 'title' => 'Review Pendaftaran']
    ],
    'applicant' => [
        ['url' => 'dashboard', 'icon' => 'home', 'title' => 'Dashboard'],
        ['url' => 'profile', 'icon' => 'user', 'title' => 'Profil'],
        ['url' => 'my-applications', 'icon' => 'document-text', 'title' => 'Pendaftaran Saya']
    ]
];

$user_menu = $menu_items[$role] ?? $menu_items['applicant'];

foreach ($user_menu as $item):
    $is_active = $current_url === $item['url'];
?>
    <a
        href="<?= base_url('admin/' . $item['url']) ?>"
        class="<?= $is_active
                    ? 'bg-gray-100 text-gray-900'
                    : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> 
            group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg class="<?= $is_active
                        ? 'text-gray-500'
                        : 'text-gray-400 group-hover:text-gray-500' ?> 
            mr-3 h-6 w-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            aria-hidden="true">
            <?php include(APPPATH . 'views/components/icons/' . $item['icon'] . '.php'); ?>
        </svg>
        <?= $item['title'] ?>
    </a>
<?php endforeach; ?>