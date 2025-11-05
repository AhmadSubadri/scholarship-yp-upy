<?= form_open('auth/forgot-password', ['class' => 'space-y-6']) ?>
<div>
    <p class="text-sm text-gray-600 mb-4">
        Masukkan alamat email Anda dan kami akan mengirimkan link untuk mereset password Anda.
    </p>
</div>

<div>
    <label for="email" class="block text-sm font-medium text-gray-700">
        Email
    </label>
    <div class="mt-1">
        <input id="email" name="email" type="email" autocomplete="email" required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            value="<?= set_value('email') ?>">
    </div>
</div>

<div>
    <button type="submit"
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Kirim Link Reset Password
    </button>
</div>

<div class="text-center">
    <p class="text-sm text-gray-600">
        <a href="<?= base_url('auth/login') ?>" class="font-medium text-blue-600 hover:text-blue-500">
            Kembali ke halaman login
        </a>
    </p>
</div>
<?= form_close() ?>