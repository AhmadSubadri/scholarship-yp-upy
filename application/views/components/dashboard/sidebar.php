<div
    x-show="sidebarOpen"
    class="relative z-50 lg:hidden">
    <!-- Mobile Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 flex flex-col bg-white border-r">
        <!-- Logo -->
        <div class="flex h-16 items-center px-6 border-b">
            <a href="<?= base_url() ?>" class="flex items-center">
                <img class="h-8 w-auto" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 space-y-1 px-2 py-4">
            <?php include('navigation.php'); ?>
        </nav>
    </div>
</div>

<!-- Desktop Sidebar -->
<div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
    <div class="flex flex-col flex-grow border-r border-gray-200 bg-white">
        <div class="flex h-16 items-center px-6 border-b">
            <a href="<?= base_url() ?>" class="flex items-center">
                <img class="h-8 w-auto" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
            </a>
        </div>
        <nav class="flex flex-1 flex-col space-y-1 p-4">
            <?php include('navigation.php'); ?>
        </nav>
    </div>
</div>