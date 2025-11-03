<nav class="bg-white shadow-md border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo / Brand -->
            <a href="<?= base_url() ?>" class="flex items-center gap-2 text-indigo-600 font-semibold">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2L2 7l8 5 8-5-8-5zM2 17l8-5 8 5-8-5-8 5z" />
                </svg>
                <span class="hidden sm:inline">StarterKit</span>
            </a>

            <!-- Menu Items -->
            <div class="hidden md:flex items-center gap-1">
                <a href="<?= base_url() ?>" class="px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition">Home</a>
                <a href="#" class="px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition">About</a>
                <a href="#" class="px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-lg transition">Docs</a>
                <a href="#" class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-lg shadow hover:shadow-md transition ml-2">
                    Download
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 mt-2 pb-4">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 rounded-lg">Home</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 rounded-lg">About</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 rounded-lg">Docs</a>
            <a href="#" class="block px-4 py-2 bg-indigo-600 text-white rounded-lg mx-4 mt-2">Download</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>