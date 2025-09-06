import React from 'react';
import Header from '../components/Header';
import HeroSection from '../components/HeroSection';
import FeaturedContent from '../components/FeaturedContent';
import GameNews from '../components/GameNews';
import Footer from '../components/Footer';

const HomePage = () => {
  return (
    <div className="min-h-screen">
      <Header />
      <HeroSection />
      <FeaturedContent />
      <GameNews />
      <Footer />
    </div>
  );
};

export default HomePage;