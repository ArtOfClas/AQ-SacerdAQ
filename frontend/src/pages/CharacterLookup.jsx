import React, { useState } from 'react';
import Header from '../components/Header';
import Footer from '../components/Footer';
import { Search, User, Shield, Sword, Star, Trophy } from 'lucide-react';

const CharacterLookup = () => {
  const [searchTerm, setSearchTerm] = useState('');
  const [searchResult, setSearchResult] = useState(null);
  const [isLoading, setIsLoading] = useState(false);

  // Mock character data
  const mockCharacters = [
    {
      name: "DragonSlayer",
      level: 85,
      class: "Paladin",
      faction: "Good",
      guild: "Knights of Order",
      achievements: 247,
      pvpRank: 12,
      joinDate: "2015-03-15",
      lastLogin: "2025-09-05",
      equipment: {
        weapon: "Blade of Destiny",
        armor: "Dragon Scale Mail",
        helm: "Crown of Heroes",
        cape: "Wings of Victory"
      },
      stats: {
        strength: 95,
        intellect: 78,
        endurance: 88,
        dexterity: 82,
        wisdom: 76,
        luck: 85
      }
    },
    {
      name: "ShadowMage",
      level: 72,
      class: "Necromancer",
      faction: "Evil",
      guild: "Dark Brotherhood",
      achievements: 189,
      pvpRank: 8,
      joinDate: "2016-07-22",
      lastLogin: "2025-09-04",
      equipment: {
        weapon: "Staff of Shadows",
        armor: "Void Robes",
        helm: "Skull Crown",
        cape: "Cloak of Darkness"
      },
      stats: {
        strength: 65,
        intellect: 98,
        endurance: 72,
        dexterity: 70,
        wisdom: 95,
        luck: 78
      }
    }
  ];

  const handleSearch = () => {
    if (!searchTerm.trim()) return;
    
    setIsLoading(true);
    
    // Simulate API call
    setTimeout(() => {
      const found = mockCharacters.find(char => 
        char.name.toLowerCase().includes(searchTerm.toLowerCase())
      );
      setSearchResult(found || null);
      setIsLoading(false);
    }, 1000);
  };

  return (
    <div className="min-h-screen bg-gradient-to-b from-gray-900 to-black">
      <Header />
      
      <div className="pt-20 pb-16">
        <div className="max-w-4xl mx-auto px-4">
          {/* Page Header */}
          <div className="text-center mb-12">
            <h1 className="text-4xl font-bold text-white mb-4">Character Lookup</h1>
            <p className="text-gray-300">Search for any AdventureQuest Worlds character</p>
          </div>

          {/* Search Section */}
          <div className="bg-gray-800 rounded-lg p-8 mb-8">
            <div className="flex space-x-4">
              <div className="flex-1">
                <input
                  type="text"
                  value={searchTerm}
                  onChange={(e) => setSearchTerm(e.target.value)}
                  onKeyPress={(e) => e.key === 'Enter' && handleSearch()}
                  placeholder="Enter character name..."
                  className="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-yellow-500"
                />
              </div>
              <button
                onClick={handleSearch}
                disabled={isLoading}
                className="bg-yellow-600 hover:bg-yellow-700 disabled:bg-gray-600 text-white px-8 py-3 rounded-lg font-semibold flex items-center space-x-2 transition-colors"
              >
                <Search className="w-5 h-5" />
                <span>{isLoading ? 'Searching...' : 'Search'}</span>
              </button>
            </div>
          </div>

          {/* Search Results */}
          {searchResult && (
            <div className="bg-gradient-to-r from-blue-900 to-purple-900 rounded-lg p-8 shadow-xl">
              <div className="grid md:grid-cols-2 gap-8">
                {/* Character Info */}
                <div>
                  <div className="flex items-center space-x-4 mb-6">
                    <div className="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center">
                      <User className="w-8 h-8 text-white" />
                    </div>
                    <div>
                      <h2 className="text-2xl font-bold text-white">{searchResult.name}</h2>
                      <p className="text-yellow-400">Level {searchResult.level} {searchResult.class}</p>
                    </div>
                  </div>

                  <div className="space-y-4">
                    <div className="bg-black/20 rounded-lg p-4">
                      <h3 className="text-lg font-semibold text-white mb-3">Character Details</h3>
                      <div className="grid grid-cols-2 gap-3 text-sm">
                        <div>
                          <span className="text-gray-300">Faction:</span>
                          <span className={`ml-2 font-semibold ${searchResult.faction === 'Good' ? 'text-blue-400' : 'text-red-400'}`}>
                            {searchResult.faction}
                          </span>
                        </div>
                        <div>
                          <span className="text-gray-300">Guild:</span>
                          <span className="ml-2 text-purple-300 font-semibold">{searchResult.guild}</span>
                        </div>
                        <div>
                          <span className="text-gray-300">Join Date:</span>
                          <span className="ml-2 text-white">{searchResult.joinDate}</span>
                        </div>
                        <div>
                          <span className="text-gray-300">Last Login:</span>
                          <span className="ml-2 text-green-400">{searchResult.lastLogin}</span>
                        </div>
                      </div>
                    </div>

                    <div className="flex space-x-4">
                      <div className="bg-black/20 rounded-lg p-4 flex-1 text-center">
                        <Trophy className="w-6 h-6 text-yellow-500 mx-auto mb-2" />
                        <div className="text-xl font-bold text-white">{searchResult.achievements}</div>
                        <div className="text-sm text-gray-300">Achievements</div>
                      </div>
                      <div className="bg-black/20 rounded-lg p-4 flex-1 text-center">
                        <Sword className="w-6 h-6 text-red-500 mx-auto mb-2" />
                        <div className="text-xl font-bold text-white">#{searchResult.pvpRank}</div>
                        <div className="text-sm text-gray-300">PvP Rank</div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Equipment & Stats */}
                <div>
                  <div className="bg-black/20 rounded-lg p-4 mb-4">
                    <h3 className="text-lg font-semibold text-white mb-3 flex items-center">
                      <Shield className="w-5 h-5 mr-2" />
                      Equipment
                    </h3>
                    <div className="space-y-2 text-sm">
                      {Object.entries(searchResult.equipment).map(([slot, item]) => (
                        <div key={slot} className="flex justify-between">
                          <span className="text-gray-300 capitalize">{slot}:</span>
                          <span className="text-yellow-400">{item}</span>
                        </div>
                      ))}
                    </div>
                  </div>

                  <div className="bg-black/20 rounded-lg p-4">
                    <h3 className="text-lg font-semibold text-white mb-3 flex items-center">
                      <Star className="w-5 h-5 mr-2" />
                      Stats
                    </h3>
                    <div className="space-y-3">
                      {Object.entries(searchResult.stats).map(([stat, value]) => (
                        <div key={stat}>
                          <div className="flex justify-between text-sm mb-1">
                            <span className="text-gray-300 capitalize">{stat}</span>
                            <span className="text-white font-semibold">{value}</span>
                          </div>
                          <div className="w-full bg-gray-700 rounded-full h-2">
                            <div 
                              className="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-full"
                              style={{ width: `${value}%` }}
                            ></div>
                          </div>
                        </div>
                      ))}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          )}

          {/* No Results */}
          {searchResult === null && searchTerm && !isLoading && (
            <div className="text-center py-16">
              <User className="w-16 h-16 text-gray-500 mx-auto mb-4" />
              <h3 className="text-xl font-semibold text-gray-400 mb-2">Character Not Found</h3>
              <p className="text-gray-500">No character found with the name "{searchTerm}"</p>
            </div>
          )}
        </div>
      </div>

      <Footer />
    </div>
  );
};

export default CharacterLookup;