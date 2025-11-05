<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Beasiswa YP UPY' ?></title>
    <!-- Tailwind CSS -->
    <link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <?php if (isset($css)): ?>
        <?php foreach ($css as $stylesheet): ?>
            <link href="<?= base_url($stylesheet) ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <?php $this->load->view('components/frontend/header'); ?>

    <!-- Main Content -->
    <main class="min-h-screen">
        <?php $this->load->view($content); ?>
    </main>

    <!-- Footer -->
    <?php $this->load->view('components/frontend/footer'); ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <?php if (isset($js)): ?>
        <?php foreach ($js as $script): ?>
            <script src="<?= base_url($script) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>