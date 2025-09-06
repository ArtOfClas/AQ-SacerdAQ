<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table            = 'cms_articles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'author_id', 'title', 'content', 'created_at', 'Image'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function getFeaturedNews($limit = 3)
    {
        return $this->orderBy('created_at', 'DESC')->limit($limit)->findAll();
    }

    public function getAllNews($limit = 20)
    {
        return $this->select('cms_articles.*, users.Name as author_name')
                   ->join('users', 'users.id = cms_articles.author_id', 'left')
                   ->orderBy('created_at', 'DESC')
                   ->limit($limit)
                   ->findAll();
    }

    public function getNewsWithAuthor($id)
    {
        return $this->select('cms_articles.*, users.Name as author_name')
                   ->join('users', 'users.id = cms_articles.author_id', 'left')
                   ->where('cms_articles.id', $id)
                   ->first();
    }
}