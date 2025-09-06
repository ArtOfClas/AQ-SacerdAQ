// Mock data for AdventureQuest Worlds clone

export const mockUsers = [
  {
    id: 1,
    name: "DragonSlayer",
    email: "dragonslayer@example.com",
    hash: "mockHash123",
    hairID: 1,
    access: 5,
    title: 1,
    level: 85,
    gold: 999999,
    coins: 50000,
    diamonds: 500,
    crystal: 1000,
    exp: 8500000,
    country: "US",
    age: 25,
    gender: "M",
    dateCreated: "2015-03-15",
    lastLogin: "2025-09-05",
    classID: 1,
    killCount: 15420,
    deathCount: 234,
    pvpRatio: 65,
    rebirth: 2,
    guild: "Knights of Order",
    faction: "Good"
  },
  {
    id: 2,
    name: "ShadowMage",
    email: "shadowmage@example.com",
    hash: "mockHash456",
    hairID: 15,
    access: 3,
    title: 5,
    level: 72,
    gold: 500000,
    coins: 25000,
    diamonds: 200,
    crystal: 500,
    exp: 5200000,
    country: "CA",
    age: 22,
    gender: "F",
    dateCreated: "2016-07-22",
    lastLogin: "2025-09-04",
    classID: 8,
    killCount: 8930,
    deathCount: 445,
    pvpRatio: 20,
    rebirth: 1,
    guild: "Dark Brotherhood",
    faction: "Evil"
  }
];

export const mockClasses = [
  { id: 1, name: "Warrior", category: "ME", description: "Masters of melee combat" },
  { id: 2, name: "Mage", category: "SP", description: "Wielders of arcane magic" },
  { id: 3, name: "Healer", category: "SP", description: "Support class focused on healing" },
  { id: 4, name: "Rogue", category: "ME", description: "Agile fighters with high critical hits" },
  { id: 5, name: "Paladin", category: "ME", description: "Holy warriors of justice" },
  { id: 6, name: "DeathKnight", category: "ME", description: "Dark warriors who embrace death" },
  { id: 7, name: "Dragonslayer", category: "ME", description: "Elite dragon hunters" },
  { id: 8, name: "Necromancer", category: "SP", description: "Masters of death magic" }
];

export const mockItems = [
  {
    id: 1,
    name: "Blade of Destiny",
    description: "A legendary sword forged by the gods",
    type: "Sword",
    element: "Light",
    level: 80,
    dps: 2500,
    rarity: 95,
    cost: 0,
    coins: 0,
    diamonds: 500,
    staff: 0
  },
  {
    id: 2,
    name: "Staff of Shadows",
    description: "A dark staff pulsing with evil energy",
    type: "Staff",
    element: "Darkness",
    level: 75,
    dps: 2200,
    rarity: 90,
    cost: 0,
    coins: 10000,
    diamonds: 0,
    staff: 0
  },
  {
    id: 3,
    name: "Dragon Scale Mail",
    description: "Armor crafted from ancient dragon scales",
    type: "Armor",
    element: "Fire",
    level: 85,
    dps: 0,
    rarity: 98,
    cost: 0,
    coins: 0,
    diamonds: 750,
    staff: 0
  }
];

export const mockNews = [
  {
    id: 1,
    date: "September 05, 2025",
    title: "Double Holiday Event Weekend",
    subtitle: "The Thunder of Freedom Rocks Terra da Festa",
    content: "Brado Retumbante is no ordinary hero. To the people of Povo Heroico, he is a legend among legends. He fights for freedom and embodies the primal screams of all who long for justice. This weekend, log in and test your skill against the resounding thunder of Terra da Festa's golden warrior. Emerge victorious and reap the rare rewards!",
    image: "https://www.aq.com/cms/images/DN-BrasilBoss2025.jpg",
    featured: true,
    authorId: 1
  },
  {
    id: 2,
    date: "September 04, 2025",
    title: "AQWorlds: Infinity News",
    subtitle: "Bubble, bubble, boil and... design notes.",
    content: "We are back with horrifyingly spooky daily progress updates for AdventureQuest Worlds: Infinity. Do you like ghost stories? Imagine we are sitting around a campfire in the pitch black of night. I lean forward.... the light of the flame under-light's my face as I begin whispering this dark and sordid tale.",
    image: "https://www.aq.com/cms/images/DN-AQWI-dailyupdate-10.jpg",
    featured: false,
    authorId: 1
  },
  {
    id: 3,
    date: "September 03, 2025",
    title: "Event Release Calendar",
    subtitle: "New game updates every week",
    content: "Check out our weekly game update calendar so you don't miss any of our new weekly release! See them all here! We know a lot of you have had unexpected schedule changes recently. To help keep your spirits high and game time fun, we're making sure that when you log into AdventureQuest Worlds, you have even more to do.",
    image: "https://www.aq.com/cms/images/DN-Calendar-October2020.jpg",
    featured: false,
    authorId: 1
  },
  {
    id: 4,
    date: "September 02, 2025",
    title: "The Wheel of Doom is BACK",
    subtitle: "Spin Swaggy's wheel to get prizes!",
    content: "Five years ago, we launched the Wheels of Doom and Destiny from the Carnival of Fortune. They were one of AQWorlds' most popular features and starting today... the Wheel of Doom is BACK! /join Doom and talk to Swaggy to buy Fortune Tickets, then spin the wheel and get prizes.",
    image: "https://www.aq.com/cms/images/DN-WheelOfDoomReturnsFinal2-545.png",
    featured: false,
    authorId: 1
  }
];

export const mockQuests = [
  {
    id: 1,
    name: "Slay the Ancient Dragon",
    description: "The ancient dragon Terrorax has awakened! Defeat this mighty beast to save the realm.",
    experience: 50000,
    gold: 25000,
    coins: 100,
    level: 75,
    factionID: 1
  },
  {
    id: 2,
    name: "Collect Shadow Crystals",
    description: "Gather 10 Shadow Crystals from the depths of the Shadow Realm.",
    experience: 15000,
    gold: 8000,
    coins: 50,
    level: 45,
    factionID: 2
  }
];

export const mockGuilds = [
  {
    id: 1,
    name: "Knights of Order",
    messageOfTheDay: "Together we stand against the forces of chaos!",
    maxMembers: 50,
    level: 25,
    experience: 2500000,
    wins: 156,
    loss: 23,
    totalKills: 45632
  },
  {
    id: 2,
    name: "Dark Brotherhood",
    messageOfTheDay: "Embrace the shadows, embrace power.",
    maxMembers: 40,
    level: 18,
    experience: 1200000,
    wins: 89,
    loss: 34,
    totalKills: 28945
  }
];

export const mockShops = [
  {
    id: 1,
    name: "Weapon Shop",
    items: [1, 2], // Item IDs
    upgrade: 0,
    staff: 0,
    limited: 0
  },
  {
    id: 2,
    name: "Armor Emporium",
    items: [3], // Item IDs
    upgrade: 0,
    staff: 0,
    limited: 0
  }
];

export const mockAchievements = [
  {
    id: 1,
    name: "Dragon Slayer",
    description: "Defeat 100 dragons",
    category: "Combat",
    show: 1
  },
  {
    id: 2,
    name: "Master Explorer",
    description: "Visit all locations in Lore",
    category: "Exploration",
    show: 1
  },
  {
    id: 3,
    name: "Legendary Hero",
    description: "Reach level 100",
    category: "Character",
    show: 1
  }
];

// Helper functions for mock data
export const getUserByName = (name) => {
  return mockUsers.find(user => 
    user.name.toLowerCase().includes(name.toLowerCase())
  );
};

export const getUserById = (id) => {
  return mockUsers.find(user => user.id === id);
};

export const getClassById = (id) => {
  return mockClasses.find(cls => cls.id === id);
};

export const getItemById = (id) => {
  return mockItems.find(item => item.id === id);
};

export const getNewsById = (id) => {
  return mockNews.find(news => news.id === id);
};

export const getFeaturedNews = () => {
  return mockNews.filter(news => news.featured);
};

export const getRegularNews = () => {
  return mockNews.filter(news => !news.featured);
};

export const getGuildById = (id) => {
  return mockGuilds.find(guild => guild.id === id);
};

// Authentication mock functions
export const mockLogin = (email, password) => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const user = mockUsers.find(u => u.email === email);
      if (user) {
        resolve({
          success: true,
          user: user,
          token: `mock_token_${user.id}_${Date.now()}`
        });
      } else {
        reject({
          success: false,
          message: "Invalid credentials"
        });
      }
    }, 1000);
  });
};

export const mockRegister = (userData) => {
  return new Promise((resolve) => {
    setTimeout(() => {
      const newUser = {
        id: mockUsers.length + 1,
        ...userData,
        level: 1,
        gold: 1000,
        coins: 1000,
        diamonds: 0,
        crystal: 0,
        exp: 0,
        dateCreated: new Date().toISOString().split('T')[0],
        lastLogin: new Date().toISOString().split('T')[0],
        classID: 1,
        killCount: 0,
        deathCount: 0,
        pvpRatio: 0,
        rebirth: 0,
        guild: null,
        faction: null
      };
      
      mockUsers.push(newUser);
      
      resolve({
        success: true,
        user: newUser,
        token: `mock_token_${newUser.id}_${Date.now()}`
      });
    }, 1000);
  });
};