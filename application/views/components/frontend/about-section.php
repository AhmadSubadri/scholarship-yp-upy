<!-- About Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="relative">
                <div class="aspect-w-16 aspect-h-9 lg:aspect-h-11">
                    <img src="<?= base_url('assets/images/about-image.jpg') ?>"
                        alt="Tentang Beasiswa YP UPY"
                        class="rounded-lg object-cover shadow-xl">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-6 rounded-lg shadow-lg hidden lg:block">
                    <div class="text-4xl font-bold">15+</div>
                    <div class="text-sm">Tahun Pengalaman</div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Beasiswa YP UPY: Mendukung Pendidikan Berkualitas
                </h2>

                <p class="text-lg text-gray-600 mb-8">
                    Program Beasiswa YP UPY merupakan wujud komitmen Yayasan Pendidikan Universitas PGRI Yogyakarta
                    dalam mendukung pengembangan pendidikan berkualitas dan membuka akses pendidikan tinggi bagi
                    mahasiswa berprestasi.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Akses Pendidikan</h3>
                            <p class="mt-2 text-gray-600">Membuka kesempatan pendidikan tinggi berkualitas bagi semua kalangan.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Fasilitas Lengkap</h3>
                            <p class="mt-2 text-gray-600">Dukungan fasilitas belajar modern dan lingkungan akademik kondusif.</p>
                        </div>
                    </div>
                </div>

                <a href="<?= base_url('about') ?>"
                    class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                    Pelajari Lebih Lanjut
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>