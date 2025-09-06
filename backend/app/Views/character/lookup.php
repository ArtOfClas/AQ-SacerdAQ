<!-- Character Lookup Page -->
<div class="min-h-screen bg-gradient-to-b from-gray-900 to-black py-16">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Character Lookup</h1>
            <p class="text-gray-300">Search for any SacredAQ Reborn character</p>
        </div>

        <!-- Search Section -->
        <div class="bg-gray-800 rounded-lg p-8 mb-8">
            <form action="/character" method="GET" class="flex space-x-4">
                <div class="flex-1">
                    <input
                        type="text"
                        name="name"
                        value="<?= esc($_GET['name'] ?? '') ?>"
                        placeholder="Enter character name..."
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500"
                        required
                    />
                </div>
                <button
                    type="submit"
                    class="bg-yellow-600 hover:bg-yellow-700 text-white px-8 py-3 rounded-lg font-semibold flex items-center space-x-2 transition-colors"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                    <span>Search</span>
                </button>
            </form>
        </div>

        <!-- Search Results -->
        <?php if (isset($character) && $character): ?>
        <div class="bg-gradient-to-r from-blue-900 to-purple-900 rounded-lg p-8 shadow-xl">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Character Info -->
                <div>
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white"><?= esc($character['Name']) ?></h2>
                            <p class="text-yellow-400">Level <?= esc($character['Level']) ?> <?= esc($character['ClassName'] ?? 'Adventurer') ?></p>
                            <?php if (!empty($character['TitleName'])): ?>
                            <p class="text-purple-300"><?= esc($character['TitleName']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-black/20 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-white mb-3">Character Details</h3>
                            <div class="grid grid-cols-2 gap-3 text-sm">
                                <div>
                                    <span class="text-gray-300">Faction:</span>
                                    <span class="ml-2 font-semibold text-blue-400"><?= esc($character['Faction'] ?? 'Neutral') ?></span>
                                </div>
                                <div>
                                    <span class="text-gray-300">Guild:</span>
                                    <span class="ml-2 text-purple-300 font-semibold"><?= esc($character['GuildName'] ?? 'None') ?></span>
                                </div>
                                <div>
                                    <span class="text-gray-300">Join Date:</span>
                                    <span class="ml-2 text-white"><?= date('M j, Y', strtotime($character['DateCreated'])) ?></span>
                                </div>
                                <div>
                                    <span class="text-gray-300">Last Login:</span>
                                    <span class="ml-2 text-green-400"><?= date('M j, Y', strtotime($character['LastLogin'])) ?></span>
                                </div>
                                <div>
                                    <span class="text-gray-300">Gender:</span>
                                    <span class="ml-2 text-white"><?= $character['Gender'] === 'M' ? 'Male' : 'Female' ?></span>
                                </div>
                                <div>
                                    <span class="text-gray-300">Country:</span>
                                    <span class="ml-2 text-white"><?= esc($character['Country']) ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <div class="bg-black/20 rounded-lg p-4 flex-1 text-center">
                                <svg class="w-6 h-6 text-yellow-500 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <div class="text-xl font-bold text-white"><?= esc($character['AchievementCount'] ?? 0) ?></div>
                                <div class="text-sm text-gray-300">Achievements</div>
                            </div>
                            <div class="bg-black/20 rounded-lg p-4 flex-1 text-center">
                                <svg class="w-6 h-6 text-red-500 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15a1 1 0 100-2 1 1 0 000 2zm3-1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                </svg>
                                <div class="text-xl font-bold text-white"><?= esc($character['PvPRatio'] ?? 0) ?></div>
                                <div class="text-sm text-gray-300">PvP Score</div>
                            </div>
                        </div>

                        <!-- Character Stats -->
                        <div class="bg-black/20 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-white mb-3">Gold & Resources</h3>
                            <div class="grid grid-cols-2 gap-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Gold:</span>
                                    <span class="text-yellow-400 font-semibold"><?= number_format($character['Gold']) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Coins:</span>
                                    <span class="text-blue-400 font-semibold"><?= number_format($character['Coins']) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Diamonds:</span>
                                    <span class="text-purple-400 font-semibold"><?= number_format($character['Diamonds']) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Crystal:</span>
                                    <span class="text-green-400 font-semibold"><?= number_format($character['Crystal']) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Equipment & Combat Stats -->
                <div>
                    <?php if (!empty($character['Equipment'])): ?>
                    <div class="bg-black/20 rounded-lg p-4 mb-4">
                        <h3 class="text-lg font-semibold text-white mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Equipment
                        </h3>
                        <div class="space-y-2 text-sm">
                            <?php foreach ($character['Equipment'] as $item): ?>
                            <div class="flex justify-between">
                                <span class="text-gray-300 capitalize"><?= esc($item['Equipment']) ?>:</span>
                                <span class="text-yellow-400"><?= esc($item['Name']) ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="bg-black/20 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-white mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Combat Stats
                        </h3>
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-300">Kills:</span>
                                <span class="text-green-400 font-semibold"><?= number_format($character['KillCount']) ?></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-300">Deaths:</span>
                                <span class="text-red-400 font-semibold"><?= number_format($character['DeathCount']) ?></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-300">Experience:</span>
                                <span class="text-blue-400 font-semibold"><?= number_format($character['Exp']) ?></span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-300">Rebirths:</span>
                                <span class="text-purple-400 font-semibold"><?= $character['Rebirth'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php elseif (isset($characterFound) && $characterFound === false): ?>
        <!-- No Results -->
        <div class="text-center py-16">
            <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
            <h3 class="text-xl font-semibold text-gray-400 mb-2">Character Not Found</h3>
            <p class="text-gray-500">No character found with the name "<?= esc($_GET['name'] ?? '') ?>"</p>
        </div>
        <?php endif; ?>

        <!-- Popular Characters -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-white mb-8 text-center">Popular Characters</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-800 rounded-lg p-6 text-center hover:bg-gray-700 transition-colors">
                    <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">DragonSlayer</h3>
                    <p class="text-gray-400 text-sm">Level 95 Paladin</p>
                    <a href="/character/DragonSlayer" class="inline-block mt-3 text-yellow-400 hover:text-yellow-300 text-sm">View Profile →</a>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 text-center hover:bg-gray-700 transition-colors">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">ShadowMage</h3>
                    <p class="text-gray-400 text-sm">Level 88 Necromancer</p>
                    <a href="/character/ShadowMage" class="inline-block mt-3 text-yellow-400 hover:text-yellow-300 text-sm">View Profile →</a>
                </div>

                <div class="bg-gray-800 rounded-lg p-6 text-center hover:bg-gray-700 transition-colors">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">HolyKnight</h3>
                    <p class="text-gray-400 text-sm">Level 92 Crusader</p>
                    <a href="/character/HolyKnight" class="inline-block mt-3 text-yellow-400 hover:text-yellow-300 text-sm">View Profile →</a>
                </div>
            </div>
        </div>
    </div>
</div>