<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'SacredAQ Reborn') ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <style>
        .dropdown:hover .dropdown-menu { display: block; }
        .hero-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
        }
        .fantasy-gradient {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
        }
        .text-gradient {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Top Bar -->
    <div class="bg-gray-800 text-white px-4 py-2 text-sm">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="/assets/images/logo-artix.png" alt="Artix" class="h-6" onerror="this.style.display='none'">
                <div class="flex items-center space-x-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                    <span><?= $playerCount ?? '0' ?> Players Online</span>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <a href="/download" class="bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded text-sm flex items-center space-x-1 transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    <span>Get Launcher</span>
                </a>
                <a href="/help" class="text-orange-400 hover:text-orange-300 flex items-center space-x-1 transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                    </svg>
                    <span>Help</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-gradient-to-r from-teal-700 to-teal-600 shadow-lg relative">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/">
                        <img src="/assets/images/logo-sacredaq.png" alt="SacredAQ Reborn" class="h-12" onerror="this.innerHTML='<div class=\'text-2xl font-bold text-gradient\'>SacredAQ Reborn</div>'">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-6">
                    <!-- Game Dropdown -->
                    <div class="relative dropdown">
                        <button class="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors">
                            <span>Game</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg z-50 hidden">
                            <a href="/wiki" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Game Guide</a>
                            <a href="/wiki/classes" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Classes</a>
                            <a href="/wiki/items" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Items</a>
                            <a href="/wiki/quests" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Quests</a>
                        </div>
                    </div>

                    <!-- Community Dropdown -->
                    <div class="relative dropdown">
                        <button class="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors">
                            <span>Community</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg z-50 hidden">
                            <a href="/rankings" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Rankings</a>
                            <a href="/rankings/pvp" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">PvP Rankings</a>
                            <a href="/rankings/guild" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Guild Rankings</a>
                            <a href="/character" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Character Lookup</a>
                        </div>
                    </div>

                    <!-- Account Dropdown -->
                    <div class="relative dropdown">
                        <button class="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors">
                            <span>Account</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg z-50 hidden">
                            <?php if (isset($currentUser) && $currentUser): ?>
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">My Profile</a>
                                <a href="/character/<?= $currentUser['Name'] ?>" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">My Character</a>
                                <a href="/logout" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Logout</a>
                            <?php else: ?>
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                                <a href="/register" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Create Account</a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Shop Dropdown -->
                    <div class="relative dropdown">
                        <button class="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors">
                            <span>Shop</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg z-50 hidden">
                            <a href="/shop/upgrade" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Upgrade Account</a>
                            <a href="/shop/acs" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">AdventureCoins</a>
                            <a href="/shop/packages" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Packages</a>
                        </div>
                    </div>

                    <?php if (!isset($currentUser) || !$currentUser): ?>
                        <a href="/register" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition-colors">
                            Free Sign Up
                        </a>
                    <?php endif; ?>

                    <a href="/play" class="bg-red-700 hover:bg-red-800 text-white px-6 py-2 rounded font-bold transition-colors">
                        PLAY
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="text-white hover:text-yellow-300" onclick="toggleMobileMenu()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu (initially hidden) -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/wiki" class="block px-3 py-2 text-white hover:bg-gray-700">Game Guide</a>
                <a href="/rankings" class="block px-3 py-2 text-white hover:bg-gray-700">Rankings</a>
                <a href="/character" class="block px-3 py-2 text-white hover:bg-gray-700">Character Lookup</a>
                <?php if (isset($currentUser) && $currentUser): ?>
                    <a href="/profile" class="block px-3 py-2 text-white hover:bg-gray-700">My Profile</a>
                    <a href="/logout" class="block px-3 py-2 text-white hover:bg-gray-700">Logout</a>
                <?php else: ?>
                    <a href="/login" class="block px-3 py-2 text-white hover:bg-gray-700">Login</a>
                    <a href="/register" class="block px-3 py-2 text-white hover:bg-gray-700">Create Account</a>
                <?php endif; ?>
                <a href="/play" class="block px-3 py-2 bg-red-700 text-white rounded mx-3">PLAY</a>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>