<div class="max-w-md mx-auto p-6 bg-white rounded shadow mt-12">
    <h1 class="text-2xl font-bold mb-4">Register</h1>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="mb-4 text-red-700"><?php echo $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <?php echo validation_errors('<div class="text-red-600 mb-2">', '</div>'); ?>

    <?php echo form_open('register'); ?>
    <div class="mb-4">
        <label class="block text-sm">Name</label>
        <input type="text" name="name" class="w-full border rounded px-3 py-2" value="<?php echo set_value('name'); ?>" required>
    </div>
    <div class="mb-4">
        <label class="block text-sm">Email</label>
        <input type="email" name="email" class="w-full border rounded px-3 py-2" value="<?php echo set_value('email'); ?>" required>
    </div>
    <div class="mb-4">
        <label class="block text-sm">Password</label>
        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label class="block text-sm">Confirm Password</label>
        <input type="password" name="password_confirm" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Create account</button>
    </div>
    <?php echo form_close(); ?>
</div>