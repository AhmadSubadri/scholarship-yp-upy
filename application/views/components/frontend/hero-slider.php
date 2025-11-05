<!-- Hero Section with Slider -->
<div x-data="{ currentSlide: 0 }" class="relative bg-white">
    <!-- Slider container -->
    <div class="relative h-[600px] overflow-hidden">
        <?php foreach ($banners as $index => $banner): ?>
            <div
                x-show="currentSlide === <?= $index ?>"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-x-full"
                x-transition:enter-end="opacity-100 transform translate-x-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-x-0"
                x-transition:leave-end="opacity-0 transform -translate-x-full"
                class="absolute inset-0">
                <img src="<?= base_url('uploads/banners/' . $banner->image) ?>"
                    alt="<?= $banner->title ?>"
                    class="w-full h-full object-cover">

                <!-- Content Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-40">
                    <div class="container mx-auto px-4 h-full flex items-center">
                        <div class="max-w-2xl text-white">
                            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                                <?= $banner->title ?>
                            </h1>
                            <p class="text-xl mb-8">
                                <?= $banner->description ?>
                            </p>
                            <?php if ($banner->button_text): ?>
                                <a href="<?= $banner->button_url ?>"
                                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                    <?= $banner->button_text ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Navigation Buttons -->
        <div class="absolute inset-0 flex items-center justify-between p-4">
            <button
                @click="currentSlide = currentSlide === 0 ? <?= count($banners) - 1 ?> : currentSlide - 1"
                class="p-2 rounded-full bg-black bg-opacity-50 text-white hover:bg-opacity-75 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button
                @click="currentSlide = currentSlide === <?= count($banners) - 1 ?> ? 0 : currentSlide + 1"
                class="p-2 rounded-full bg-black bg-opacity-50 text-white hover:bg-opacity-75 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Indicators -->
        <div class="absolute bottom-5 left-0 right-0">
            <div class="flex items-center justify-center gap-2">
                <?php foreach ($banners as $index => $banner): ?>
                    <button
                        @click="currentSlide = <?= $index ?>"
                        :class="{'bg-white': currentSlide === <?= $index ?>, 'bg-white/50': currentSlide !== <?= $index ?>}"
                        class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none">
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Auto-advance slides -->
<script>
    document.addEventListener('alpine:init', () => {
        let interval = setInterval(() => {
            let currentSlide = Alpine.store('currentSlide');
            Alpine.store('currentSlide', currentSlide === <?= count($banners) - 1 ?> ? 0 : currentSlide + 1);
        }, 5000);
    });
</script>