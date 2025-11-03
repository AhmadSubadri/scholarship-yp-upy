<footer class="bg-gray-900 text-gray-300 py-12 mt-auto">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Brand -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-lg"></div>
                    <span class="font-bold text-white">CI3 Tailwind</span>
                </div>
                <p class="text-sm">Starter kit modern untuk CodeIgniter 3 dengan Tailwind CSS v4 Standalone.</p>
            </div>

            <!-- Links -->
            <div>
                <h3 class="font-semibold text-white mb-3">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Documentation</a></li>
                    <li><a href="#" class="hover:text-white transition">GitHub Repo</a></li>
                    <li><a href="#" class="hover:text-white transition">Changelog</a></li>
                </ul>
            </div>

            <!-- Community -->
            <div>
                <h3 class="font-semibold text-white mb-3">Community</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Forum CI3</a></li>
                    <li><a href="#" class="hover:text-white transition">Discord</a></li>
                    <li><a href="#" class="hover:text-white transition">Twitter</a></li>
                </ul>
            </div>

            <!-- Status -->
            <div>
                <h3 class="font-semibold text-white mb-3">Status</h3>
                <div class="flex items-center gap-2 text-sm">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span>All systems operational</span>
                </div>
                <p class="text-xs mt-2 opacity-75">Last updated: <?= date('d M Y H:i') ?></p>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-xs">
            <p>© <?= date('Y') ?> CI3 + Tailwind Starter Kit. Dibuat dengan <span class="text-red-500">♥</span> untuk developer Indonesia.</p>
        </div>
    </div>
</footer>