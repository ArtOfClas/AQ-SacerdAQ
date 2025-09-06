<!-- Footer -->
    <footer class="bg-gradient-to-b from-gray-900 to-black text-white mt-16">
        <!-- Social Media Section -->
        <div class="bg-gray-800 py-8">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <div class="flex justify-center space-x-6 mb-4">
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors" title="Facebook">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-red-400 hover:text-red-300 transition-colors" title="YouTube">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors" title="Twitter">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
                <div class="text-gray-400">
                    <p>Join thousands of players in SacredAQ Reborn</p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid lg:grid-cols-4 gap-8">
                <!-- Character Lookup -->
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                        </svg>
                        Character Lookup
                    </h3>
                    <form action="/character" method="GET" class="space-y-3">
                        <input 
                            type="text" 
                            name="name"
                            placeholder="Enter character name"
                            class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-yellow-500 text-white"
                            required
                        />
                        <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-700 text-black px-4 py-2 rounded font-semibold transition-colors">
                            Search Character
                        </button>
                    </form>
                </div>

                <!-- Quick Links -->
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <div class="space-y-3">
                        <a href="/rankings" class="block text-blue-400 hover:text-blue-300 transition-colors">Player Rankings</a>
                        <a href="/wiki" class="block text-blue-400 hover:text-blue-300 transition-colors">Game Wiki</a>
                        <a href="/news" class="block text-blue-400 hover:text-blue-300 transition-colors">Latest News</a>
                        <a href="/character" class="block text-blue-400 hover:text-blue-300 transition-colors">Character Search</a>
                    </div>
                </div>

                <!-- Game Features -->
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Game Features</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Free to Play</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>No Downloads Required</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Weekly Updates</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Cross-Platform</span>
                        </div>
                    </div>
                </div>

                <!-- Server Info -->
                <div class="bg-gray-800 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Server Info</h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <span class="text-gray-400">Server:</span>
                            <span class="text-green-400 font-semibold ml-2">SacredAQ Reborn</span>
                        </div>
                        <div>
                            <span class="text-gray-400">Status:</span>
                            <span class="text-green-400 font-semibold ml-2">Online</span>
                        </div>
                        <div>
                            <span class="text-gray-400">Players:</span>
                            <span class="text-blue-400 font-semibold ml-2"><?= $playerCount ?? '0' ?></span>
                        </div>
                        <div>
                            <span class="text-gray-400">Version:</span>
                            <span class="text-yellow-400 font-semibold ml-2">v2.0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bg-black py-4">
            <div class="max-w-7xl mx-auto px-4 text-center text-gray-400 text-sm">
                <p>&copy; 2025 SacredAQ Reborn. All rights reserved. | Based on AdventureQuest Worlds by Artix Entertainment</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for dropdowns and interactions -->
    <script>
        // Auto-hide messages after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const messages = document.querySelectorAll('.alert-message');
            messages.forEach(function(message) {
                setTimeout(function() {
                    message.style.display = 'none';
                }, 5000);
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>