import React, { useState } from 'react';
import { ChevronDown, Users, Download, HelpCircle } from 'lucide-react';

const Header = () => {
  const [activeDropdown, setActiveDropdown] = useState(null);

  const toggleDropdown = (dropdown) => {
    setActiveDropdown(activeDropdown === dropdown ? null : dropdown);
  };

  return (
    <>
      {/* Top Bar */}
      <div className="bg-gray-900 text-white px-4 py-2 text-sm">
        <div className="max-w-7xl mx-auto flex justify-between items-center">
          <div className="flex items-center space-x-4">
            <img src="https://www.aq.com/img/network/logo-artix.png" alt="Artix" className="h-6" />
            <div className="flex items-center space-x-1">
              <Users className="w-4 h-4" />
              <span>6193 Players Online</span>
            </div>
          </div>
          <div className="flex items-center space-x-2">
            <button className="bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded text-sm flex items-center space-x-1">
              <Download className="w-4 h-4" />
              <span>Get Launcher</span>
            </button>
            <button className="text-orange-400 hover:text-orange-300 flex items-center space-x-1">
              <HelpCircle className="w-4 h-4" />
              <span>Help</span>
            </button>
          </div>
        </div>
      </div>

      {/* Main Navigation */}
      <nav className="bg-gradient-to-r from-teal-700 to-teal-600 shadow-lg relative">
        <div className="max-w-7xl mx-auto px-4">
          <div className="flex justify-between items-center h-16">
            {/* Logo */}
            <div className="flex items-center">
              <img 
                src="https://www.aq.com/img/network/logo-md-aqw.png" 
                alt="AdventureQuest Worlds" 
                className="h-12"
              />
            </div>

            {/* Navigation Links */}
            <div className="hidden md:flex items-center space-x-6">
              <div className="relative">
                <button
                  onClick={() => toggleDropdown('game')}
                  className="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors"
                >
                  <span>Game</span>
                  <ChevronDown className="w-4 h-4" />
                </button>
              </div>

              <div className="relative">
                <button
                  onClick={() => toggleDropdown('community')}
                  className="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors"
                >
                  <span>Community</span>
                  <ChevronDown className="w-4 h-4" />
                </button>
              </div>

              <div className="relative">
                <button
                  onClick={() => toggleDropdown('account')}
                  className="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors"
                >
                  <span>Account</span>
                  <ChevronDown className="w-4 h-4" />
                </button>
              </div>

              <div className="relative">
                <button
                  onClick={() => toggleDropdown('shop')}
                  className="flex items-center space-x-1 text-white hover:text-yellow-300 transition-colors"
                >
                  <span>Shop</span>
                  <ChevronDown className="w-4 h-4" />
                </button>
              </div>

              <button className="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition-colors">
                Free Sign Up
              </button>

              <button className="bg-red-700 hover:bg-red-800 text-white px-6 py-2 rounded font-bold transition-colors">
                PLAY
              </button>
            </div>
          </div>
        </div>
      </nav>
    </>
  );
};

export default Header;