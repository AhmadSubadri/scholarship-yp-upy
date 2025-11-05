<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard - Beasiswa YP UPY' ?></title>
    <!-- Tailwind CSS -->
    <link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <?php if (isset($css)): ?>
        <?php foreach ($css as $stylesheet): ?>
            <link href="<?= base_url($stylesheet) ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body class="h-full">
    <div x-data="{ sidebarOpen: false }">
        <!-- Sidebar Overlay -->
        <div
            x-show="sidebarOpen"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-600 bg-opacity-75 lg:hidden"
            @click="sidebarOpen = false">
        </div>

        <!-- Sidebar -->
        <?php $this->load->view('components/dashboard/sidebar'); ?>

        <!-- Main Content -->
        <div class="lg:pl-64">
            <!-- Top Navigation -->
            <?php $this->load->view('components/dashboard/topnav'); ?>

            <main class="py-6">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <!-- Page Header -->
                    <div class="mb-6">
                        <h1 class="text-2xl font-semibold text-gray-900"><?= $page_title ?? 'Dashboard' ?></h1>
                    </div>

                    <!-- Content -->
                    <?php $this->load->view($content); ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <?php if (isset($js)): ?>
        <?php foreach ($js as $script): ?>
            <script src="<?= base_url($script) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>