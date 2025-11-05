<?= form_open('auth/register', ['class' => 'space-y-6']) ?>
<div>
    <label for="name" class="block text-sm font-medium text-gray-700">
        Nama Lengkap
    </label>
    <div class="mt-1">
        <input id="name" name="name" type="text" autocomplete="name" required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            value="<?= set_value('name') ?>">
    </div>
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
    <label for="password" class="block text-sm font-medium text-gray-700">
        Password
    </label>
    <div class="mt-1">
        <input id="password" name="password" type="password" autocomplete="new-password" required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        <p class="mt-1 text-sm text-gray-500">
            Minimal 8 karakter, harus mengandung huruf besar, angka, dan karakter khusus
        </p>
    </div>
</div>

<div>
    <label for="password_confirm" class="block text-sm font-medium text-gray-700">
        Konfirmasi Password
    </label>
    <div class="mt-1">
        <input id="password_confirm" name="password_confirm" type="password" required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div>
</div>

<div>
    <button type="submit"
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Daftar
    </button>
</div>

<div class="text-center">
    <p class="text-sm text-gray-600">
        Sudah punya akun?
        <a href="<?= base_url('auth/login') ?>" class="font-medium text-blue-600 hover:text-blue-500">
            Masuk sekarang
        </a>
    </p>
</div>
<?= form_close() ?>