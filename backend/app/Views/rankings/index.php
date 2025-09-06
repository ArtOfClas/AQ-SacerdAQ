<!-- Rankings Page -->
<div class="min-h-screen bg-gradient-to-b from-gray-900 to-black py-16">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">Player Rankings</h1>
            <p class="text-gray-300">See who dominates the realm of SacredAQ Reborn</p>
        </div>

        <!-- Ranking Type Tabs -->
        <div class="bg-gray-800 rounded-lg p-6 mb-8">
            <div class="flex flex-wrap justify-center space-x-4 mb-6">
                <a href="/rankings/level" class="px-6 py-3 rounded-lg font-semibold transition-colors <?= $rankingType === 'level' ? 'bg-yellow-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' ?>">
                    Level Rankings
                </a>
                <a href="/rankings/pvp" class="px-6 py-3 rounded-lg font-semibold transition-colors <?= $rankingType === 'pvp' ? 'bg-red-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' ?>">
                    PvP Rankings
                </a>
                <a href="/rankings/guild" class="px-6 py-3 rounded-lg font-semibold transition-colors <?= $rankingType === 'guild' ? 'bg-purple-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' ?>">
                    Guild Rankings
                </a>
                <a href="/rankings/class" class="px-6 py-3 rounded-lg font-semibold transition-colors <?= $rankingType === 'class' ? 'bg-blue-600 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' ?>">
                    Class Rankings
                </a>
            </div>
        </div>

        <!-- Rankings Table -->
        <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl">
            <div class="px-6 py-4 bg-gray-700 border-b border-gray-600">
                <h2 class="text-xl font-bold text-white">
                    <?php 
                    switch($rankingType) {
                        case 'level': echo 'Top Players by Level'; break;
                        case 'pvp': echo 'Top PvP Champions'; break;
                        case 'guild': echo 'Top Guild Members'; break;
                        case 'class': echo 'Top Players by Class'; break;
                        default: echo 'Rankings';
                    }
                    ?>
                </h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Rank</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Player</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Level</th>
                            <?php if ($rankingType === 'pvp'): ?>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">PvP Score</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Kills</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Deaths</th>
                            <?php elseif ($rankingType === 'guild'): ?>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Guild</th>
                            <?php elseif ($rankingType === 'class'): ?>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Class</th>
                            <?php endif; ?>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Last Active</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <?php if (!empty($rankings)): ?>
                            <?php foreach ($rankings as $index => $player): ?>
                            <tr class="hover:bg-gray-700 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <?php if ($index === 0): ?>
                                            <span class="text-2xl">🥇</span>
                                        <?php elseif ($index === 1): ?>
                                            <span class="text-2xl">🥈</span>
                                        <?php elseif ($index === 2): ?>
                                            <span class="text-2xl">🥉</span>
                                        <?php else: ?>
                                            <span class="text-lg font-bold text-gray-400"><?= $index + 1 ?></span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mr-3">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-white">
                                                <a href="/character/<?= esc($player['Name']) ?>" class="hover:text-yellow-300">
                                                    <?= esc($player['Name']) ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-lg font-bold text-yellow-400"><?= esc($player['Level']) ?></span>
                                </td>
                                <?php if ($rankingType === 'pvp'): ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-lg font-bold text-red-400"><?= esc($player['PvPRatio'] ?? 0) ?></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-green-400"><?= number_format($player['KillCount'] ?? 0) ?></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-red-400"><?= number_format($player['DeathCount'] ?? 0) ?></span>
                                </td>
                                <?php elseif ($rankingType === 'guild'): ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-purple-400"><?= esc($player['GuildName'] ?? 'None') ?></span>
                                </td>
                                <?php elseif ($rankingType === 'class'): ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-blue-400"><?= esc($player['ClassName'] ?? 'Unknown') ?></span>
                                </td>
                                <?php endif; ?>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                    <?= isset($player['LastLogin']) ? date('M j, Y', strtotime($player['LastLogin'])) : 'Never' ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="px-6 py-8 text-center text-gray-400">
                                    No rankings available at this time.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Stats Summary -->
        <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="bg-gradient-to-r from-yellow-600 to-orange-600 rounded-lg p-6 text-center">
                <div class="text-3xl font-bold text-white mb-2"><?= count($rankings) ?></div>
                <div class="text-yellow-100">Total Players Ranked</div>
            </div>
            <div class="bg-gradient-to-r from-green-600 to-blue-600 rounded-lg p-6 text-center">
                <div class="text-3xl font-bold text-white mb-2">
                    <?= !empty($rankings) ? max(array_column($rankings, 'Level')) : '0' ?>
                </div>
                <div class="text-green-100">Highest Level</div>
            </div>
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg p-6 text-center">
                <div class="text-3xl font-bold text-white mb-2">∞</div>
                <div class="text-purple-100">Competition Level</div>
            </div>
        </div>
    </div>
</div>