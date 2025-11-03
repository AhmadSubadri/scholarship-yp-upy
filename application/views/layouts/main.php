<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'CI3 + Tailwind Starter' ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/tailwind.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- HEADER -->
    <?php $this->load->view('components/header'); ?>

    <!-- NAVBAR -->
    <?php $this->load->view('components/navbar'); ?>

    <!-- MAIN CONTENT -->
    <main class="flex-1 container mx-auto px-4 py-8">
        <?= $content ?? '' ?>
    </main>

    <!-- FOOTER -->
    <?php $this->load->view('components/footer'); ?>

</body>

</html>