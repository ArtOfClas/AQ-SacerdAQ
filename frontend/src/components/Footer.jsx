import React from 'react';
import { Facebook, Youtube, Twitter, Search } from 'lucide-react';

const Footer = () => {
  const otherGames = [
    { name: "AdventureQuest 3D", image: "https://www.aq.com/img/network/games/side-game-aq3d-ob350px.jpg", url: "#" },
    { name: "DragonFable", image: "https://www.aq.com/img/network/games/side-game-df.png", url: "#" },
    { name: "MechQuest", image: "https://www.aq.com/img/network/games/side-game-mq.png", url: "#" },
    { name: "EpicDuel", image: "https://www.aq.com/img/network/games/side-game-ed.png", url: "#" },
    { name: "OverSoul", image: "https://www.aq.com/img/network/games/side-game-os.png", url: "#" },
    { name: "AdventureQuest", image: "https://www.aq.com/img/network/games/side-game-aqc.png", url: "#" }
  ];

  const mobileGames = [
    { name: "AQ3D", image: "https://www.aq.com/img/network/apps/side-app-aq3d.png" },
    { name: "BattleGems", image: "https://www.aq.com/img/network/apps/side-app-bg.png" },
    { name: "BioBeasts", image: "https://www.aq.com/img/network/apps/side-app-biobeasts.png" },
    { name: "Dragons", image: "https://www.aq.com/img/network/apps/side-app-dragons.png" },
    { name: "Undead Assault", image: "https://www.aq.com/img/network/apps/side-app-ua.png" }
  ];

  return (
    <footer className="bg-gradient-to-b from-gray-900 to-black text-white">
      {/* Social Media Section */}
      <div className="bg-gray-800 py-8">
        <div className="max-w-7xl mx-auto px-4 text-center">
          <div className="flex justify-center space-x-6 mb-4">
            <a href="#" className="text-blue-400 hover:text-blue-300 transition-colors">
              <Facebook className="w-8 h-8" />
            </a>
            <a href="#" className="text-red-400 hover:text-red-300 transition-colors">
              <Youtube className="w-8 h-8" />
            </a>
            <a href="#" className="text-blue-400 hover:text-blue-300 transition-colors">
              <Twitter className="w-8 h-8" />
            </a>
          </div>
          <div className="text-gray-400">
            <p>1,168,583 followers on Facebook</p>
          </div>
        </div>
      </div>

      <div className="max-w-7xl mx-auto px-4 py-12">
        <div className="grid lg:grid-cols-4 gap-8">
          {/* Character Lookup */}
          <div className="bg-gray-800 rounded-lg p-6">
            <h3 className="text-xl font-bold mb-4 flex items-center">
              <Search className="w-5 h-5 mr-2" />
              Character Lookup
            </h3>
            <div className="space-y-3">
              <input 
                type="text" 
                placeholder="Enter character name"
                className="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-yellow-500"
              />
              <button className="w-full bg-yellow-600 hover:bg-yellow-700 text-black px-4 py-2 rounded font-semibold transition-colors">
                Search Character Page
              </button>
            </div>
          </div>

          {/* Get AdventureCoins */}
          <div className="bg-gray-800 rounded-lg p-6">
            <h3 className="text-xl font-bold mb-4">AdventureQuest Worlds</h3>
            <div className="space-y-3">
              <button className="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded font-semibold transition-colors">
                Get AdventureCoins!
              </button>
              <button className="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold transition-colors">
                Earn AdventureCoins
              </button>
            </div>
          </div>

          {/* Artix Web Games */}
          <div>
            <h3 className="text-xl font-bold mb-4">Artix Web Games</h3>
            <div className="grid grid-cols-2 gap-3">
              {otherGames.map((game, index) => (
                <a 
                  key={index}
                  href={game.url}
                  className="block hover:opacity-80 transition-opacity"
                >
                  <img 
                    src={game.image} 
                    alt={game.name}
                    className="w-full h-16 object-cover rounded"
                  />
                </a>
              ))}
            </div>
            <div className="mt-4 space-y-2">
              <button className="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded transition-colors">
                Game Launcher
              </button>
              <button className="w-full bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded transition-colors">
                More AE Games
              </button>
            </div>
          </div>

          {/* Mobile Games */}
          <div>
            <h3 className="text-xl font-bold mb-4">Artix Mobile Games</h3>
            <div className="space-y-3">
              {mobileGames.map((game, index) => (
                <div key={index} className="flex items-center space-x-3">
                  <img 
                    src={game.image} 
                    alt={game.name}
                    className="w-12 h-12 rounded"
                  />
                  <span className="text-gray-300">{game.name}</span>
                </div>
              ))}
            </div>
          </div>
        </div>

        {/* Facebook Feed Preview */}
        <div className="mt-12 bg-gray-800 rounded-lg p-6">
          <h3 className="text-xl font-bold mb-4">Latest from Facebook</h3>
          <div className="space-y-4">
            <div className="bg-gray-700 rounded p-4">
              <div className="flex items-center space-x-3 mb-3">
                <div className="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                  <span className="text-sm font-bold">AQ</span>
                </div>
                <div>
                  <div className="font-semibold">AdventureQuest Worlds</div>
                  <div className="text-sm text-gray-400">18 hours ago</div>
                </div>
              </div>
              <p className="text-gray-300 text-sm">
                💀 YOUR FLAG IS MADE OF BLOOD. YOUR CREW IS MADE OF BONES. YOUR ENEMIES' SKULLS WILL BE CRUSHED! 
                Unlock the color-custom SkullCrusher Naval Commander pet, armor & accessories when you upgrade 
                your account with any AC or Membership pack of $10 USD or more.
              </p>
              <div className="flex items-center space-x-4 mt-3 text-sm text-gray-400">
                <span>68 👍</span>
                <span>4 comments</span>
                <span>6 shares</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Copyright */}
      <div className="bg-black py-4">
        <div className="max-w-7xl mx-auto px-4 text-center text-gray-400 text-sm">
          <p>&copy; 2025 Artix Entertainment LLC. All rights reserved.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;