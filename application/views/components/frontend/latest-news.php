<!-- Latest News Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Dapatkan informasi terkini seputar program beasiswa, kegiatan kampus, dan prestasi mahasiswa.
            </p>
        </div>

        <?php if (empty($posts)): ?>
            <div class="text-center py-8">
                <div class="inline-block p-4 rounded-full bg-blue-100 text-blue-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-2">Belum Ada Berita</h3>
                <p class="text-gray-600">Informasi terbaru akan segera hadir. Silakan kunjungi kembali dalam beberapa waktu.</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($posts as $post): ?>
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="<?= base_url('news/' . $post->slug) ?>" class="block">
                            <img src="<?= base_url('uploads/posts/' . $post->featured_image) ?>"
                                alt="<?= $post->title ?>"
                                class="w-full h-48 object-cover transition duration-300 transform hover:scale-105">
                        </a>

                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <?= date('d M Y', strtotime($post->published_at)) ?>

                                <span class="mx-2">•</span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <?= $post->author_name ?>
                            </div>

                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                <a href="<?= base_url('news/' . $post->slug) ?>" class="hover:text-blue-600">
                                    <?= $post->title ?>
                                </a>
                            </h3>

                            <p class="text-gray-600 mb-4 line-clamp-2">
                                <?= $post->excerpt ?>
                            </p>

                            <a href="<?= base_url('news/' . $post->slug) ?>"
                                class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

    </div>
<?php endif; ?>

<div class="text-center mt-12">
    <a href="<?= base_url('news') ?>"
        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white border-blue-600 hover:bg-blue-50">
        Lihat Semua Berita
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </a>
</div>
</div>
</section>