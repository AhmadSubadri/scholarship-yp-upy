<!-- Featured Scholarships Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Program Beasiswa Tersedia</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Temukan berbagai program beasiswa yang sesuai dengan minat dan kemampuan Anda untuk melanjutkan pendidikan.
            </p>
        </div>

        <?php if (empty($scholarships)): ?>
            <div class="text-center py-8">
                <div class="inline-block p-4 rounded-full bg-blue-100 text-blue-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-2">Belum Ada Program Beasiswa</h3>
                <p class="text-gray-600 mb-6">Program beasiswa akan segera hadir. Silakan cek kembali dalam beberapa waktu.</p>
                <a href="<?= base_url('contact') ?>"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                    Hubungi Kami
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($scholarships as $scholarship): ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                        <img src="<?= base_url('uploads/scholarships/' . $scholarship->banner_image) ?>"
                            alt="<?= $scholarship->title ?>"
                            class="w-full h-48 object-cover">

                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                <?= $scholarship->title ?>
                            </h3>

                            <p class="text-gray-600 mb-4 line-clamp-3">
                                <?= $scholarship->description ?>
                            </p>

                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Batas: <?= date('d M Y', strtotime($scholarship->close_date)) ?>
                                </div>
                            </div>

                            <a href="<?= base_url('scholarship/' . $scholarship->slug) ?>"
                                class="block w-full text-center bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="text-center mt-12">
            <a href="<?= base_url('scholarship') ?>"
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white border-blue-600 hover:bg-blue-50">
                Lihat Semua Program
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>