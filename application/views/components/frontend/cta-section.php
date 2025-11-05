<!-- CTA Section -->
<section class="relative py-24 bg-blue-600">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="10" cy="10" r="2" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dots)" />
        </svg>
    </div>

    <div class="relative container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-6">
                Raih Impian Pendidikanmu Bersama Beasiswa YP UPY
            </h2>

            <p class="text-xl text-blue-100 mb-10">
                Jangan lewatkan kesempatan untuk mendapatkan beasiswa pendidikan. Daftar sekarang dan wujudkan mimpimu!
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?= base_url('scholarship') ?>"
                    class="inline-flex justify-center items-center px-8 py-4 border border-transparent text-lg font-medium rounded-lg text-blue-600 bg-white hover:bg-blue-50 transition duration-300">
                    Lihat Program Beasiswa
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="<?= base_url('register') ?>"
                    class="inline-flex justify-center items-center px-8 py-4 border-2 border-white text-lg font-medium rounded-lg text-white hover:bg-white hover:text-blue-600 transition duration-300">
                    Daftar Sekarang
                </a>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="text-center">
                    <div class="text-5xl font-bold text-white mb-2">500+</div>
                    <div class="text-blue-100">Penerima Beasiswa</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-white mb-2">10+</div>
                    <div class="text-blue-100">Program Beasiswa</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-white mb-2">20M+</div>
                    <div class="text-blue-100">Dana Beasiswa</div>
                </div>
            </div>
        </div>
    </div>
</section>