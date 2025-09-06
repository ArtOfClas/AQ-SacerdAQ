# SacredAQ Reborn - CodeIgniter 4 Implementation

A complete PHP implementation of the AdventureQuest Worlds clone using CodeIgniter 4 framework, designed to work with IIS and the SacredAQ database.

## Features

### ✅ Implemented Features
- **User Authentication System**: Login, Registration, Session Management
- **Character Lookup**: Advanced character search with detailed profiles
- **Rankings System**: Player, PvP, Guild, and Class rankings
- **Wiki System**: Comprehensive game guide and documentation
- **News System**: Game updates and announcements
- **Responsive Design**: Works on desktop and mobile devices
- **Database Integration**: Full integration with SacredAQ-433 database

### 🎮 Game Features
- **User Management**: Complete user accounts with stats, equipment, achievements
- **Character Classes**: Support for all game classes with descriptions
- **Guild System**: Guild management and member tracking
- **PvP Rankings**: Player vs Player competition tracking
- **Achievement System**: Track and display player achievements
- **Item Database**: Complete item and equipment system

## Installation Instructions

### Prerequisites
- **IIS Server** with PHP support
- **PHP 8.1+** with extensions: mysqli, mbstring, intl, json, xml
- **MariaDB/MySQL** database
- **CodeIgniter 4.4+**

### IIS Setup

1. **Install PHP on IIS**:
   - Download PHP 8.1+ for Windows
   - Extract to `C:\php\`
   - Configure IIS FastCGI settings
   - Add PHP handler in IIS Manager

2. **Configure IIS Site**:
   - Create new site in IIS Manager
   - Set physical path to `/app/backend/`
   - Configure application pool for PHP
   - Enable URL Rewrite module

3. **Web.config**: Already included with proper IIS configuration

### Database Configuration

1. **Update Database Settings**:
   ```php
   // app/Config/Database.php
   public array $default = [
       'hostname' => '45.90.12.143',
       'username' => 'your_username',
       'password' => 'your_password',
       'database' => 'sacredaq-433',
       'DBDriver' => 'MySQLi',
       'port'     => 3306,
   ];
   ```

2. **Database Connection**: Update credentials in `app/Config/Database.php`

### Application Setup

1. **Install Dependencies**:
   ```bash
   composer install
   ```

2. **Set Base URL**:
   ```php
   // app/Config/App.php
   public string $baseURL = 'http://your-domain.com/';
   ```

3. **Configure Encryption**:
   ```bash
   php spark key:generate
   ```

4. **Set Permissions**:
   - Make `writable/` folder writable by IIS
   - Set appropriate file permissions

## File Structure

```
/app/backend/
├── app/
│   ├── Controllers/
│   │   ├── Home.php          # Main site controller
│   │   └── Auth.php          # Authentication controller
│   ├── Models/
│   │   ├── UserModel.php     # User/Character management
│   │   ├── NewsModel.php     # News articles
│   │   ├── GuildModel.php    # Guild system
│   │   ├── ItemModel.php     # Items and equipment
│   │   └── ...               # Other game models
│   ├── Views/
│   │   ├── templates/        # Header/Footer templates
│   │   ├── home/            # Homepage views
│   │   ├── character/       # Character lookup
│   │   ├── auth/           # Login/Register forms
│   │   ├── rankings/       # Ranking displays
│   │   └── wiki/           # Game wiki
│   └── Config/
│       ├── Database.php    # Database configuration
│       ├── Routes.php      # URL routing
│       └── App.php         # Application settings
├── public/               # Web root directory
├── writable/            # Cache and logs
└── web.config          # IIS configuration
```

## Key Features Breakdown

### Authentication System
- Secure password hashing with PHP's `password_hash()`
- Session-based authentication
- User registration with validation
- Character profile integration

### Character Lookup
- Search characters by name
- Display detailed character information
- Show equipment, stats, achievements
- Guild membership information

### Rankings System
- **Level Rankings**: Top players by level and experience
- **PvP Rankings**: Player vs Player combat scores
- **Guild Rankings**: Top guilds by level and activity
- **Class Rankings**: Best players per character class

### Wiki System
- Comprehensive game guides
- Character class information
- Item database and guides
- Quest walkthroughs
- Game mechanics explanations

### Database Integration
- Full integration with existing SacredAQ-433 database
- Supports all existing tables and relationships
- User management with existing character data
- Guild system integration
- Achievement tracking

## Database Tables Used

- **users**: Player accounts and character data
- **classes**: Character class information
- **items**: Game items and equipment
- **guilds**: Guild management
- **users_guilds**: Guild membership
- **achievements**: Achievement system
- **users_achievements**: Player achievements
- **cms_articles**: News and announcements
- **factions**: Game factions
- **users_factions**: Player faction allegiance

## Security Features

- **CSRF Protection**: Built-in CodeIgniter 4 CSRF protection
- **SQL Injection Prevention**: Using CodeIgniter's Query Builder
- **XSS Protection**: Automatic output escaping
- **Session Security**: Secure session handling
- **Input Validation**: Server-side form validation
- **Password Security**: Strong password hashing

## Customization

### Adding New Features
1. Create new controllers in `app/Controllers/`
2. Add corresponding models in `app/Models/`
3. Create views in `app/Views/`
4. Update routes in `app/Config/Routes.php`

### Styling
- Uses Tailwind CSS for responsive design
- Custom CSS in template files
- Fantasy-themed color scheme
- Mobile-responsive layout

### Database Modifications
- Update models when database structure changes
- Maintain foreign key relationships
- Use CodeIgniter migrations for schema changes

## Troubleshooting

### Common Issues

1. **Database Connection Errors**:
   - Check database credentials in `app/Config/Database.php`
   - Verify MariaDB/MySQL server is running
   - Ensure user has proper database permissions

2. **IIS URL Rewrite Issues**:
   - Install URL Rewrite module for IIS
   - Check `web.config` is properly configured
   - Verify application pool settings

3. **PHP Errors**:
   - Enable error reporting in development
   - Check PHP error logs
   - Verify all required PHP extensions are installed

4. **File Permission Issues**:
   - Ensure `writable/` folder has write permissions
   - Set appropriate IIS user permissions
   - Check file ownership settings

### Performance Optimization

- **Database Optimization**: Add indexes for frequently queried fields
- **Caching**: Enable CodeIgniter's built-in caching
- **Image Optimization**: Compress images and use appropriate formats
- **MinifyCSS/JS**: Minimize static assets
- **Database Connection Pooling**: Configure for high traffic

## API Documentation

### Character Lookup API
```
GET /character/{name}
Response: Character data with equipment and stats
```

### Rankings API
```
GET /rankings/{type}
Types: level, pvp, guild, class
Response: Ranked player list
```

### News API
```
GET /news
Response: Latest news articles
```

## Deployment Checklist

- [ ] Configure IIS with PHP support
- [ ] Set up database connection
- [ ] Update base URL configuration
- [ ] Set file permissions
- [ ] Configure web.config for URL rewriting
- [ ] Test all major features
- [ ] Set up SSL certificate (recommended)
- [ ] Configure backup strategy
- [ ] Set up monitoring and logging

## Support

For issues related to:
- **CodeIgniter 4**: Check official documentation
- **Database**: Verify table structure matches expectations
- **IIS Configuration**: Check Microsoft IIS documentation
- **PHP Issues**: Verify PHP version and extensions

## License

Based on AdventureQuest Worlds by Artix Entertainment.
SacredAQ Reborn implementation for educational purposes.