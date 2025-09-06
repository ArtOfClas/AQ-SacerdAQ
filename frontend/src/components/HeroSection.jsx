import React from 'react';
import { Play, Shield, Coins } from 'lucide-react';

const HeroSection = () => {
  return (
    <div className="relative min-h-screen bg-gradient-to-br from-slate-800 via-slate-700 to-slate-900 overflow-hidden">
      {/* Background Image */}
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-90"
        style={{
          backgroundImage: `url('https://www.aq.com/images/promo/HP-FlameBeyond-WK3.jpg')`
        }}
      >
        <div className="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/70"></div>
      </div>

      {/* Content */}
      <div className="relative z-10 flex flex-col items-center justify-center min-h-screen px-4">
        {/* Game Logo */}
        <div className="text-center mb-8">
          <h1 className="text-6xl md:text-8xl font-bold bg-gradient-to-r from-yellow-400 via-yellow-300 to-orange-400 bg-clip-text text-transparent mb-4">
            AdventureQuest
          </h1>
          <h2 className="text-4xl md:text-6xl font-bold bg-gradient-to-r from-blue-400 via-teal-300 to-cyan-400 bg-clip-text text-transparent">
            WORLDS
          </h2>
        </div>

        {/* Action Buttons */}
        <div className="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 mb-12">
          {/* Create Hero Button */}
          <button className="flex items-center space-x-3 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-8 py-4 rounded-lg font-bold text-lg shadow-lg transform hover:scale-105 transition-all duration-300">
            <Shield className="w-6 h-6" />
            <span>CREATE YOUR HERO</span>
          </button>

          {/* Play Button - Central */}
          <button className="relative group">
            <div className="absolute -inset-1 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-full blur opacity-75 group-hover:opacity-100 transition duration-300"></div>
            <div className="relative flex items-center justify-center w-24 h-24 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full shadow-xl transform group-hover:scale-110 transition-all duration-300">
              <Play className="w-10 h-10 text-white ml-1" fill="currentColor" />
            </div>
          </button>

          {/* Upgrade Button */}
          <button className="flex items-center space-x-3 bg-gradient-to-r from-amber-600 to-yellow-600 hover:from-amber-700 hover:to-yellow-700 text-white px-8 py-4 rounded-lg font-bold text-lg shadow-lg transform hover:scale-105 transition-all duration-300">
            <Coins className="w-6 h-6" />
            <div className="text-left">
              <div>UPGRADE &</div>
              <div className="text-sm">ADVENTURE COINS</div>
            </div>
          </button>
        </div>

        {/* Game Description */}
        <div className="text-center max-w-4xl">
          <h3 className="text-3xl md:text-4xl font-bold text-white mb-4">
            Free MMO/MMORPG Fantasy Roleplaying Game!
          </h3>
          <p className="text-lg text-gray-300 leading-relaxed">
            Get ready for nonstop action and adventure! AdventureQuest Worlds is the best MMORPG 
            (massively multiplayer online roleplaying game) that is browser based. There are no downloads 
            or software to install, and this 2D MMO fantasy RPG is free to play! Brandish your blade, 
            conjure your spells, and heed the call of Battle On!
          </p>
        </div>
      </div>
    </div>
  );
};

export default HeroSection;