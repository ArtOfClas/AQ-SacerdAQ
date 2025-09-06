<?php

namespace App\Models;

use CodeIgniter\Model;

class WikiModel extends Model
{
    // Wiki pages stored as static content for now
    // You can later move this to a database table if needed
    
    protected $wikiPages = [
        'index' => [
            'title' => 'SacredAQ Reborn Wiki',
            'content' => 'Welcome to the official SacredAQ Reborn Wiki! Here you\'ll find comprehensive guides, information about classes, items, quests, and everything you need to know about the game.'
        ],
        'classes' => [
            'title' => 'Character Classes',
            'content' => 'Learn about all the different character classes available in SacredAQ Reborn, their abilities, and how to unlock them.'
        ],
        'items' => [
            'title' => 'Items & Equipment',
            'content' => 'Complete database of weapons, armor, and items available in the game, including their stats and how to obtain them.'
        ],
        'quests' => [
            'title' => 'Quests & Storylines',
            'content' => 'Walkthrough guides for all major questlines and storylines in SacredAQ Reborn.'
        ],
        'pvp' => [
            'title' => 'Player vs Player',
            'content' => 'Learn about PvP mechanics, strategies, and how to dominate in player combat.'
        ],
        'guilds' => [
            'title' => 'Guild System',
            'content' => 'Everything about guilds - how to create one, manage members, and participate in guild wars.'
        ]
    ];

    protected $sidebarPages = [
        'index' => 'Home',
        'classes' => 'Classes',
        'items' => 'Items',
        'quests' => 'Quests',
        'pvp' => 'PvP Guide',
        'guilds' => 'Guilds'
    ];

    public function getPage($page)
    {
        if (isset($this->wikiPages[$page])) {
            return $this->wikiPages[$page];
        }
        
        return [
            'title' => 'Page Not Found',
            'content' => 'The requested wiki page could not be found.'
        ];
    }

    public function getSidebarPages()
    {
        return $this->sidebarPages;
    }

    public function getAllPages()
    {
        return $this->wikiPages;
    }
}