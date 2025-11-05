<?= form_open('auth/login', ['class' => 'space-y-6']) ?>
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
        <input id="password" name="password" type="password" autocomplete="current-password" required
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
    </div>
</div>

<div class="flex items-center justify-between">
    <div class="flex items-center">
        <input id="remember" name="remember" type="checkbox"
            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
        <label for="remember" class="ml-2 block text-sm text-gray-900">
            Ingat saya
        </label>
    </div>

    <div class="text-sm">
        <a href="<?= base_url('auth/forgot-password') ?>" class="font-medium text-blue-600 hover:text-blue-500">
            Lupa password?
        </a>
    </div>
</div>

<div>
    <button type="submit"
        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        Masuk
    </button>
</div>

<div class="text-center">
    <p class="text-sm text-gray-600">
        Belum punya akun?
        <a href="<?= base_url('auth/register') ?>" class="font-medium text-blue-600 hover:text-blue-500">
            Daftar sekarang
        </a>
    </p>
</div>
<?= form_close() ?>