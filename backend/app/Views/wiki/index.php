<!-- Wiki Page -->
<div class="min-h-screen bg-gradient-to-b from-gray-900 to-black py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-4 gap-8">
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-gray-800 rounded-lg p-6 sticky top-6">
                    <h3 class="text-xl font-bold text-white mb-4">Wiki Navigation</h3>
                    <nav class="space-y-2">
                        <?php foreach ($wikiSidebar as $slug => $title): ?>
                        <a href="/wiki/<?= $slug ?>" class="block px-3 py-2 rounded text-gray-300 hover:bg-gray-700 hover:text-white transition-colors <?= $slug === $_GET['page'] ?? 'index' ? 'bg-blue-600 text-white' : '' ?>">
                            <?= esc($title) ?>
                        </a>
                        <?php endforeach; ?>
                    </nav>

                    <!-- Quick Links -->
                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-white mb-3">Quick Links</h4>
                        <div class="space-y-2 text-sm">
                            <a href="/rankings" class="block text-blue-400 hover:text-blue-300">Player Rankings</a>
                            <a href="/character" class="block text-blue-400 hover:text-blue-300">Character Lookup</a>
                            <a href="/news" class="block text-blue-400 hover:text-blue-300">Latest News</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-3">
                <div class="bg-gray-800 rounded-lg p-8">
                    <!-- Page Header -->
                    <div class="mb-8">
                        <h1 class="text-4xl font-bold text-white mb-4"><?= esc($wikiPage['title']) ?></h1>
                        <div class="h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded"></div>
                    </div>

                    <!-- Wiki Content -->
                    <div class="prose prose-invert max-w-none">
                        <?php if ($_GET['page'] ?? 'index' === 'index'): ?>
                        <!-- Home Page Content -->
                        <div class="text-gray-300 leading-relaxed space-y-6">
                            <p class="text-lg"><?= esc($wikiPage['content']) ?></p>
                            
                            <div class="grid md:grid-cols-2 gap-6 my-8">
                                <div class="bg-blue-900/30 rounded-lg p-6">
                                    <h3 class="text-xl font-bold text-blue-300 mb-3">🗡️ Combat System</h3>
                                    <p class="text-gray-300">Learn about our advanced combat mechanics, skill rotations, and how to dominate in both PvE and PvP encounters.</p>
                                    <a href="/wiki/combat" class="inline-block mt-3 text-blue-400 hover:text-blue-300">Learn More →</a>
                                </div>
                                
                                <div class="bg-purple-900/30 rounded-lg p-6">
                                    <h3 class="text-xl font-bold text-purple-300 mb-3">🏰 Guild System</h3>
                                    <p class="text-gray-300">Discover how to create and manage guilds, participate in guild wars, and build the ultimate alliance.</p>
                                    <a href="/wiki/guilds" class="inline-block mt-3 text-purple-400 hover:text-purple-300">Learn More →</a>
                                </div>
                            </div>

                            <h2 class="text-2xl font-bold text-white mt-8 mb-4">Getting Started</h2>
                            <ul class="space-y-2 text-gray-300">
                                <li>• <a href="/wiki/classes" class="text-blue-400 hover:text-blue-300">Choose your character class</a></li>
                                <li>• <a href="/wiki/quests" class="text-blue-400 hover:text-blue-300">Complete your first quests</a></li>
                                <li>• <a href="/wiki/items" class="text-blue-400 hover:text-blue-300">Understand equipment and items</a></li>
                                <li>• <a href="/wiki/pvp" class="text-blue-400 hover:text-blue-300">Master player vs player combat</a></li>
                            </ul>
                        </div>

                        <?php elseif ($_GET['page'] ?? '' === 'classes'): ?>
                        <!-- Classes Page -->
                        <div class="text-gray-300 leading-relaxed space-y-6">
                            <p class="text-lg">Choose your path and master your destiny! SacredAQ Reborn features multiple character classes, each with unique abilities and playstyles.</p>
                            
                            <h2 class="text-2xl font-bold text-white">Melee Classes</h2>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-red-900/30 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-red-300">⚔️ Warrior</h3>
                                    <p class="text-sm text-gray-300">High health, strong physical attacks, excellent for beginners.</p>
                                </div>
                                <div class="bg-yellow-900/30 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-yellow-300">🛡️ Paladin</h3>
                                    <p class="text-sm text-gray-300">Balanced offense and defense with healing abilities.</p>
                                </div>
                            </div>

                            <h2 class="text-2xl font-bold text-white">Magic Classes</h2>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-blue-900/30 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-blue-300">🔮 Mage</h3>
                                    <p class="text-sm text-gray-300">High magic damage, area of effect spells, glass cannon.</p>
                                </div>
                                <div class="bg-purple-900/30 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-purple-300">💀 Necromancer</h3>
                                    <p class="text-sm text-gray-300">Dark magic, life steal abilities, pet summoning.</p>
                                </div>
                            </div>
                        </div>

                        <?php elseif ($_GET['page'] ?? '' === 'items'): ?>
                        <!-- Items Page -->
                        <div class="text-gray-300 leading-relaxed space-y-6">
                            <p class="text-lg">Discover the vast array of weapons, armor, and magical items available in SacredAQ Reborn.</p>
                            
                            <h2 class="text-2xl font-bold text-white">Equipment Types</h2>
                            <div class="space-y-4">
                                <div class="bg-gray-700 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-orange-300">🗡️ Weapons</h3>
                                    <p>Swords, Staves, Bows, Daggers, and more. Each weapon type offers different attack patterns and abilities.</p>
                                </div>
                                <div class="bg-gray-700 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-blue-300">🛡️ Armor</h3>
                                    <p>Protect yourself with various armor sets. Higher rarity armor provides better defense and special bonuses.</p>
                                </div>
                                <div class="bg-gray-700 rounded-lg p-4">
                                    <h3 class="text-lg font-bold text-green-300">💍 Accessories</h3>
                                    <p>Rings, Amulets, and Capes that provide stat bonuses and special effects.</p>
                                </div>
                            </div>

                            <h2 class="text-2xl font-bold text-white">Rarity System</h2>
                            <div class="grid md:grid-cols-5 gap-2 text-center text-sm">
                                <div class="bg-gray-600 rounded p-2">
                                    <div class="text-gray-300">Common</div>
                                    <div class="text-xs">Basic items</div>
                                </div>
                                <div class="bg-green-600 rounded p-2">
                                    <div class="text-white">Uncommon</div>
                                    <div class="text-xs">Better stats</div>
                                </div>
                                <div class="bg-blue-600 rounded p-2">
                                    <div class="text-white">Rare</div>
                                    <div class="text-xs">Good bonuses</div>
                                </div>
                                <div class="bg-purple-600 rounded p-2">
                                    <div class="text-white">Epic</div>
                                    <div class="text-xs">Great power</div>
                                </div>
                                <div class="bg-yellow-600 rounded p-2">
                                    <div class="text-black">Legendary</div>
                                    <div class="text-xs">Ultimate gear</div>
                                </div>
                            </div>
                        </div>

                        <?php else: ?>
                        <!-- Default content for other pages -->
                        <div class="text-gray-300 leading-relaxed">
                            <p class="text-lg"><?= esc($wikiPage['content']) ?></p>
                            
                            <div class="mt-8 p-6 bg-blue-900/20 rounded-lg border border-blue-500/30">
                                <h3 class="text-lg font-bold text-blue-300 mb-2">💡 Pro Tip</h3>
                                <p>This wiki section is constantly being updated with new information. Check back regularly for the latest guides and strategies!</p>
                            </div>

                            <div class="mt-6">
                                <h3 class="text-xl font-bold text-white mb-4">Related Pages</h3>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <a href="/wiki/classes" class="block bg-gray-700 rounded-lg p-4 hover:bg-gray-600 transition-colors">
                                        <h4 class="font-semibold text-white">Character Classes</h4>
                                        <p class="text-sm text-gray-300">Learn about all available classes</p>
                                    </a>
                                    <a href="/wiki/items" class="block bg-gray-700 rounded-lg p-4 hover:bg-gray-600 transition-colors">
                                        <h4 class="font-semibold text-white">Items & Equipment</h4>
                                        <p class="text-sm text-gray-300">Complete item database</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Page Actions -->
                    <div class="mt-12 pt-8 border-t border-gray-700">
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">
                                Last updated: <?= date('F j, Y') ?>
                            </div>
                            <div class="space-x-4">
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm">Edit Page</a>
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm">Report Issue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>