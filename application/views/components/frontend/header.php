<header x-data="{ mobileMenuOpen: false }" class="bg-white shadow-sm">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex lg:flex-1">
                <a href="<?= base_url() ?>" class="-m-1.5 p-1.5">
                    <span class="sr-only">Beasiswa YP UPY</span>
                    <img class="h-8 w-auto" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:gap-x-8">
                <a href="<?= base_url() ?>" class="text-sm font-semibold leading-6 text-gray-900">Beranda</a>
                <a href="<?= base_url('about') ?>" class="text-sm font-semibold leading-6 text-gray-900">Tentang Kami</a>
                <a href="<?= base_url('scholarship') ?>" class="text-sm font-semibold leading-6 text-gray-900">Beasiswa</a>
                <a href="<?= base_url('news') ?>" class="text-sm font-semibold leading-6 text-gray-900">Berita</a>
                <a href="<?= base_url('gallery') ?>" class="text-sm font-semibold leading-6 text-gray-900">Galeri</a>
                <a href="<?= base_url('contact') ?>" class="text-sm font-semibold leading-6 text-gray-900">Kontak</a>
            </div>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <?php if (!$this->session->userdata('logged_in')): ?>
                    <a href="<?= base_url('login') ?>" class="text-sm font-semibold leading-6 text-gray-900 mr-4">Masuk</a>
                    <a href="<?= base_url('register') ?>" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Daftar</a>
                <?php else: ?>
                    <a href="<?= base_url('dashboard') ?>" class="text-sm font-semibold leading-6 text-gray-900 mr-4">Dashboard</a>
                    <a href="<?= base_url('logout') ?>" class="text-sm font-semibold leading-6 text-red-600">Keluar</a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div
            x-show="mobileMenuOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1"
            class="lg:hidden"
            role="dialog"
            aria-modal="true">
            <div class="fixed inset-0 z-10"></div>
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <!-- Mobile menu header -->
                <div class="flex items-center justify-between">
                    <a href="<?= base_url() ?>" class="-m-1.5 p-1.5">
                        <span class="sr-only">Beasiswa YP UPY</span>
                        <img class="h-8 w-auto" src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
                    </a>
                    <button
                        @click="mobileMenuOpen = false"
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Mobile menu content -->
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="<?= base_url() ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Beranda</a>
                            <a href="<?= base_url('about') ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tentang Kami</a>
                            <a href="<?= base_url('scholarship') ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Beasiswa</a>
                            <a href="<?= base_url('news') ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Berita</a>
                            <a href="<?= base_url('gallery') ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Galeri</a>
                            <a href="<?= base_url('contact') ?>" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Kontak</a>
                        </div>
                        <div class="py-6">
                            <?php if (!$this->session->userdata('logged_in')): ?>
                                <a href="<?= base_url('login') ?>" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Masuk</a>
                                <a href="<?= base_url('register') ?>" class="-mx-3 block rounded-lg bg-blue-600 px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-blue-500">Daftar</a>
                            <?php else: ?>
                                <a href="<?= base_url('dashboard') ?>" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                                <a href="<?= base_url('logout') ?>" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-red-600 hover:bg-gray-50">Keluar</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>