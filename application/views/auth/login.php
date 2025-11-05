<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Login Card -->
    <div class="bg-white rounded-2xl shadow-md p-6 md:p-8 mb-12 border border-gray-200">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="https://upload.wikimedia.org/wikipedia/id/b/bb/Logo_UPY.png" alt="Logo Universitas PGRI Yogyakarta" class="h-20 w-auto">
        </div>

        <!-- Header Badge -->
        <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium mb-6 mx-auto">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>LOGIN SISTEM YAYASAN YP UPY</span>
        </div>

        <!-- Main Title -->
        <h1 class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-green-600 mb-4 text-center">
            Masuk ke Akun Anda
        </h1>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto text-center">
            Akses sistem informasi dan layanan Yayasan YP UPY secara aman.
        </p>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg shadow-sm">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php echo form_open('login'); ?>
        <div class="space-y-6 mb-8 max-w-md mx-auto">
            <!-- Email Field -->
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <div class="relative">
                    <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300" placeholder="email@contoh.com" required>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Password Field -->
            <div class="space-y-1">
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300" placeholder="Masukkan password Anda" required>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="px-8 py-3 bg-green-600 text-white font-medium rounded-lg shadow-md hover:bg-green-700 transition-all duration-300 inline-flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                Masuk
            </button>
            <p class="mt-4 text-sm text-gray-600">
                Belum punya akun?
                <a href="<?php echo site_url('register'); ?>" class="text-green-600 hover:text-green-800 font-medium">Daftar sekarang</a>
            </p>
        </div>
        <?php echo form_close(); ?>

        <!-- Additional Info -->
        <div class="mt-6 text-center text-sm text-gray-600">
            <p>Dengan masuk, Anda menyetujui <a href="#" class="text-green-600 hover:text-green-800 font-medium">Syarat & Ketentuan</a> dan <a href="#" class="text-green-600 hover:text-green-800 font-medium">Kebijakan Privasi</a> Yayasan YP UPY.</p>
        </div>
    </div>

    <!-- Feature Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Login Aman</h3>
            <p class="text-sm text-gray-600">Sistem autentikasi dua lapis untuk keamanan data Anda</p>
        </div>

        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Akses Cepat</h3>
            <p class="text-sm text-gray-600">Login sekali untuk akses semua layanan YP UPY</p>
        </div>

        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
            </div>
            <h3 class="font-semibold text-lg mb-2">Bantuan 24/7</h3>
            <p class="text-sm text-gray-600">Tim support siap membantu Anda kapan saja</p>
        </div>
    </div>
</div>
</div>