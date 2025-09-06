# AdventureQuest Worlds Clone - Backend Integration Contracts

## Overview
This document outlines the API contracts, data models, and integration points needed to transform the frontend-only AdventureQuest Worlds clone into a fully functional full-stack application.

## Current Mock Data Usage
The frontend currently uses mock data from `/app/frontend/src/data/mock.js` for:
- User authentication (login/register)
- Character lookup functionality
- News articles and game updates
- User profiles and game statistics
- Items, classes, guilds, achievements

## API Endpoints to Implement

### 1. Authentication APIs
```
POST /api/auth/register
- Body: { username, email, password, age, gender, country }
- Response: { success, user, token }

POST /api/auth/login
- Body: { email, password }
- Response: { success, user, token }

POST /api/auth/logout
- Headers: Authorization: Bearer {token}
- Response: { success }

GET /api/auth/me
- Headers: Authorization: Bearer {token}
- Response: { user }
```

### 2. Character/User APIs
```
GET /api/characters/search/:name
- Response: { character } or { error: "Character not found" }

GET /api/characters/:id
- Response: { character, equipment, stats, achievements }

PUT /api/characters/:id
- Body: { updated character data }
- Response: { success, character }
```

### 3. News & Content APIs
```
GET /api/news
- Query: ?featured=true&limit=10
- Response: { articles[] }

GET /api/news/:id
- Response: { article }

POST /api/news (Admin only)
- Body: { title, subtitle, content, image, featured }
- Response: { success, article }
```

### 4. Game Data APIs
```
GET /api/classes
- Response: { classes[] }

GET /api/items
- Query: ?type=weapon&rarity=90
- Response: { items[] }

GET /api/guilds
- Response: { guilds[] }

GET /api/achievements
- Response: { achievements[] }
```

## Database Models (MongoDB)

### Users Collection
```javascript
{
  _id: ObjectId,
  name: String (unique),
  email: String (unique),
  hash: String (bcrypt),
  hairID: Number,
  access: Number,
  title: Number,
  level: Number,
  gold: Number,
  coins: Number,
  diamonds: Number,
  crystal: Number,
  exp: Number,
  country: String,
  age: Number,
  gender: String,
  dateCreated: Date,
  lastLogin: Date,
  classID: Number,
  killCount: Number,
  deathCount: Number,
  pvpRatio: Number,
  rebirth: Number,
  guild: String,
  faction: String,
  equipment: {
    weapon: String,
    armor: String,
    helm: String,
    cape: String
  },
  stats: {
    strength: Number,
    intellect: Number,
    endurance: Number,
    dexterity: Number,
    wisdom: Number,
    luck: Number
  }
}
```

### Articles Collection
```javascript
{
  _id: ObjectId,
  title: String,
  subtitle: String,
  content: String,
  image: String,
  featured: Boolean,
  authorId: ObjectId,
  date: Date,
  tags: [String]
}
```

### Classes Collection
```javascript
{
  _id: ObjectId,
  name: String,
  category: String,
  description: String,
  manaRegenerationMethods: String,
  statsDescription: String
}
```

### Items Collection
```javascript
{
  _id: ObjectId,
  name: String,
  description: String,
  type: String,
  element: String,
  file: String,
  level: Number,
  dps: Number,
  rarity: Number,
  cost: Number,
  coins: Number,
  diamonds: Number,
  staff: Number
}
```

### Guilds Collection
```javascript
{
  _id: ObjectId,
  name: String,
  messageOfTheDay: String,
  maxMembers: Number,
  level: Number,
  experience: Number,
  wins: Number,
  loss: Number,
  totalKills: Number,
  members: [ObjectId] // User IDs
}
```

## Frontend Integration Points

### Replace Mock Functions
1. **Authentication**: Replace `mockLogin()` and `mockRegister()` in login/register pages
2. **Character Search**: Replace `getUserByName()` in CharacterLookup component
3. **News Data**: Replace static news data in GameNews component
4. **User Session**: Implement proper session management with JWT tokens

### State Management
- Implement React Context for user authentication state
- Add loading states for all API calls
- Add error handling for failed requests
- Add success notifications for user actions

### Protected Routes
- Implement route protection for authenticated users
- Add admin-only routes for content management
- Redirect unauthenticated users appropriately

## Security Considerations
- Password hashing with bcrypt
- JWT token authentication
- Input validation and sanitization
- Rate limiting for API endpoints
- CORS configuration
- Environment variables for secrets

## Additional Features to Implement
1. **User Profile Management**: Allow users to update their profiles
2. **Character Equipment**: System to equip/unequip items
3. **Guild System**: Join/leave guilds, guild chat
4. **Achievement System**: Unlock achievements based on user actions
5. **Admin Panel**: Content management for news, items, etc.
6. **Real-time Features**: Chat system, live events

## Testing Requirements
- Unit tests for all API endpoints
- Integration tests for authentication flow
- Frontend testing for user interactions
- Database query optimization
- Load testing for concurrent users

## Deployment Considerations
- Database connection pooling
- Image upload handling for user avatars/content
- CDN setup for static assets
- Backup strategy for user data
- Monitoring and logging setup