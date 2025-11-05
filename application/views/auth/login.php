<div class="max-w-md mx-auto p-6 bg-white rounded shadow mt-12">
    <h1 class="text-2xl font-bold mb-4">Login</h1>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="mb-4 text-red-700"><?php echo $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <?php echo form_open('login'); ?>
    <div class="mb-4">
        <label class="block text-sm">Email</label>
        <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label class="block text-sm">Password</label>
        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Login</button>
        <a href="<?php echo site_url('register'); ?>" class="text-sm text-blue-600">Create account</a>
    </div>
    <?php echo form_close(); ?>
</div>