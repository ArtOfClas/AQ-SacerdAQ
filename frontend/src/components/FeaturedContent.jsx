import React from 'react';

const FeaturedContent = () => {
  const featuredItems = [
    {
      id: 1,
      title: "Flame of the Beyond",
      subtitle: "Dark Star Burning",
      image: "https://www.aq.com/images/promo/HP-FlameBeyond-WK3.jpg",
      description: "New weekly event - Battle through the flames of destiny"
    },
    {
      id: 2,
      title: "SkullCrusher",
      subtitle: "Naval Commander",
      image: "https://www.aq.com/images/promo/HP-Sep2025UpgradeBonus.jpg",
      description: "Unlock rare naval commander gear with upgrade bonus"
    },
    {
      id: 3,
      title: "Anime Fusion",
      subtitle: "Special Event",
      image: "https://www.aq.com/images/promo/HP-AnimeFusion25-Wk1.jpg",
      description: "Limited time anime-inspired content and rewards"
    }
  ];

  return (
    <div className="bg-gradient-to-b from-gray-900 to-gray-800 py-16">
      <div className="max-w-7xl mx-auto px-4">
        {/* Featured Content Grid */}
        <div className="grid md:grid-cols-3 gap-6 mb-12">
          {featuredItems.map((item) => (
            <div 
              key={item.id}
              className="group relative overflow-hidden rounded-lg shadow-xl bg-gray-800 hover:transform hover:scale-105 transition-all duration-300"
            >
              <div className="aspect-video overflow-hidden">
                <img 
                  src={item.image} 
                  alt={item.title}
                  className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
              </div>
              <div className="absolute bottom-0 left-0 right-0 p-6">
                <h3 className="text-2xl font-bold text-white mb-2">{item.title}</h3>
                <p className="text-yellow-400 font-semibold mb-2">{item.subtitle}</p>
                <p className="text-gray-300 text-sm">{item.description}</p>
              </div>
            </div>
          ))}
        </div>

        {/* Game News Section Header */}
        <div className="text-center mb-8">
          <div className="relative inline-block">
            <div className="bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-600 px-8 py-3 rounded-lg shadow-lg">
              <h2 className="text-2xl font-bold text-black">Game News</h2>
            </div>
            <div className="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-lg blur opacity-50 -z-10"></div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default FeaturedContent;