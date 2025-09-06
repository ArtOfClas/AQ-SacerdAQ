import React from 'react';
import { Calendar, ExternalLink } from 'lucide-react';

const GameNews = () => {
  const newsItems = [
    {
      id: 1,
      date: "September 05, 2025",
      title: "Double Holiday Event Weekend",
      subtitle: "The Thunder of Freedom Rocks Terra da Festa",
      content: "Brado Retumbante is no ordinary hero. To the people of Povo Heroico, he is a legend among legends. He fights for freedom and embodies the primal screams of all who long for justice. This weekend, log in and test your skill against the resounding thunder of Terra da Festa's golden warrior. Emerge victorious and reap the rare rewards!",
      image: "https://www.aq.com/cms/images/DN-BrasilBoss2025.jpg",
      featured: true
    },
    {
      id: 2,
      date: "September 04, 2025",
      title: "AQWorlds: Infinity News",
      subtitle: "Bubble, bubble, boil and... design notes.",
      content: "We are back with horrifyingly spooky daily progress updates for AdventureQuest Worlds: Infinity. Do you like ghost stories? Imagine we are sitting around a campfire in the pitch black of night.",
      image: "https://www.aq.com/cms/images/DN-AQWI-dailyupdate-10.jpg",
      featured: false
    },
    {
      id: 3,
      date: "September 03, 2025",
      title: "Event Release Calendar",
      subtitle: "New game updates every week",
      content: "Check out our weekly game update calendar so you don't miss any of our new weekly release! Log in every day for new gifts and rewards.",
      image: "https://www.aq.com/cms/images/DN-Calendar-October2020.jpg",
      featured: false
    }
  ];

  return (
    <div className="bg-gradient-to-b from-amber-50 to-yellow-100 py-16">
      <div className="max-w-7xl mx-auto px-4">
        {/* Main Featured Article */}
        {newsItems.filter(item => item.featured).map((article) => (
          <div key={article.id} className="bg-white rounded-lg shadow-xl overflow-hidden mb-12">
            <div className="md:flex">
              <div className="md:w-1/2">
                <img 
                  src={article.image} 
                  alt={article.title}
                  className="w-full h-64 md:h-full object-cover"
                />
              </div>
              <div className="md:w-1/2 p-8">
                <div className="flex items-center text-amber-600 text-sm mb-4">
                  <Calendar className="w-4 h-4 mr-2" />
                  <span>{article.date}</span>
                </div>
                <h2 className="text-3xl font-bold text-gray-900 mb-2">{article.title}</h2>
                <h3 className="text-xl font-semibold text-amber-700 mb-4">{article.subtitle}</h3>
                <p className="text-gray-700 leading-relaxed mb-6">{article.content}</p>
                <button className="inline-flex items-center space-x-2 bg-amber-600 hover:bg-amber-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                  <span>Learn More</span>
                  <ExternalLink className="w-4 h-4" />
                </button>
              </div>
            </div>
          </div>
        ))}

        {/* Additional News Grid */}
        <div className="grid md:grid-cols-2 gap-8">
          {newsItems.filter(item => !item.featured).map((article) => (
            <div key={article.id} className="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
              <img 
                src={article.image} 
                alt={article.title}
                className="w-full h-48 object-cover"
              />
              <div className="p-6">
                <div className="flex items-center text-amber-600 text-sm mb-3">
                  <Calendar className="w-4 h-4 mr-2" />
                  <span>{article.date}</span>
                </div>
                <h3 className="text-xl font-bold text-gray-900 mb-2">{article.title}</h3>
                <h4 className="text-lg font-semibold text-amber-700 mb-3">{article.subtitle}</h4>
                <p className="text-gray-700 text-sm leading-relaxed mb-4">{article.content}</p>
                <button className="text-amber-600 hover:text-amber-700 font-semibold text-sm">
                  Read More →
                </button>
              </div>
            </div>
          ))}
        </div>

        {/* Special Features */}
        <div className="mt-16 grid md:grid-cols-2 gap-8">
          <div className="bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg p-8 text-white">
            <h3 className="text-2xl font-bold mb-4">The Wheel of Doom is BACK</h3>
            <h4 className="text-lg font-semibold text-purple-200 mb-4">Spin Swaggy's wheel to get prizes!</h4>
            <p className="text-purple-100 mb-6">
              Five years ago, we launched the Wheels of Doom and Destiny from the Carnival of Fortune. 
              They were one of AQWorlds' most popular features and starting today... the Wheel of Doom is BACK!
            </p>
            <div className="bg-purple-800 rounded-lg p-4 mb-6">
              <h5 className="font-bold mb-2">EVERY time you spin, you will receive:</h5>
              <ul className="text-sm space-y-1">
                <li>• 10,000 gold</li>
                <li>• Treasure Potion</li>
                <li>• 1 hour EXP Boost</li>
                <li>• A chance for a bonus prize</li>
              </ul>
            </div>
            <button className="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded-lg font-bold transition-colors">
              Play Now
            </button>
          </div>

          <div className="bg-gradient-to-r from-green-600 to-green-700 rounded-lg p-8 text-white">
            <h3 className="text-2xl font-bold mb-4">RPG Strategy: Unlikely Alliances</h3>
            <h4 className="text-lg font-semibold text-green-200 mb-4">Good & Evil vs Chaos!</h4>
            <p className="text-green-100 mb-6">
              Decide whether you will be Good or Evil! Choose quickly, because Chaos monsters have already 
              invaded Lore! Join thousands of players in the battle to defeat Drakath and his 13 Lords of Chaos.
            </p>
            <div className="bg-green-800 rounded-lg p-4 mb-6">
              <p className="text-sm">To defeat Chaos, Good and Evil need to work together!</p>
            </div>
            <button className="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-bold transition-colors">
              Join the Battle
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};

export default GameNews;