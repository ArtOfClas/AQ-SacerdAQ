<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $newsModel;
    protected $userModel;

    public function __construct()
    {
        $this->newsModel = new \App\Models\NewsModel();
        $this->userModel = new \App\Models\UserModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'SacredAQ Reborn - Free MMORPG Fantasy Roleplaying Game',
            'news' => $this->newsModel->getFeaturedNews(),
            'playerCount' => $this->userModel->getOnlinePlayerCount(),
            'currentUser' => $this->getCurrentUser()
        ];

        return view('templates/header', $data)
             . view('home/index', $data)
             . view('templates/footer', $data);
    }

    public function character($name = null)
    {
        $data = [
            'title' => 'Character Lookup - SacredAQ Reborn',
            'currentUser' => $this->getCurrentUser()
        ];

        if ($name) {
            $character = $this->userModel->getCharacterByName($name);
            $data['character'] = $character;
            $data['characterFound'] = $character ? true : false;
        }

        return view('templates/header', $data)
             . view('character/lookup', $data)
             . view('templates/footer', $data);
    }

    public function rankings($type = 'level')
    {
        $allowedTypes = ['level', 'pvp', 'guild', 'class'];
        if (!in_array($type, $allowedTypes)) {
            $type = 'level';
        }

        $data = [
            'title' => 'Rankings - SacredAQ Reborn',
            'currentUser' => $this->getCurrentUser(),
            'rankingType' => $type,
            'rankings' => $this->userModel->getRankings($type)
        ];

        return view('templates/header', $data)
             . view('rankings/index', $data)
             . view('templates/footer', $data);
    }

    public function wiki($page = 'index')
    {
        $wikiModel = new \App\Models\WikiModel();
        
        $data = [
            'title' => 'Game Wiki - SacredAQ Reborn',
            'currentUser' => $this->getCurrentUser(),
            'wikiPage' => $wikiModel->getPage($page),
            'wikiSidebar' => $wikiModel->getSidebarPages()
        ];

        return view('templates/header', $data)
             . view('wiki/index', $data)
             . view('templates/footer', $data);
    }

    public function news($id = null)
    {
        if ($id) {
            $article = $this->newsModel->find($id);
            if (!$article) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
            }
            
            $data = [
                'title' => $article['title'] . ' - SacredAQ Reborn',
                'article' => $article,
                'currentUser' => $this->getCurrentUser()
            ];

            return view('templates/header', $data)
                 . view('news/article', $data)
                 . view('templates/footer', $data);
        }

        $data = [
            'title' => 'Game News - SacredAQ Reborn',
            'news' => $this->newsModel->getAllNews(),
            'currentUser' => $this->getCurrentUser()
        ];

        return view('templates/header', $data)
             . view('news/index', $data)
             . view('templates/footer', $data);
    }

    private function getCurrentUser()
    {
        $session = session();
        if ($session->get('user_id')) {
            return $this->userModel->find($session->get('user_id'));
        }
        return null;
    }
}