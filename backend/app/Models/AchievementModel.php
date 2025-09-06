<?php

namespace App\Models;

use CodeIgniter\Model;

class AchievementModel extends Model
{
    protected $table            = 'achievements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Name', 'Description', 'File', 'Category', 'Show'
    ];

    protected $useTimestamps = false;

    public function getUserAchievementCount($userId)
    {
        $builder = $this->db->table('users_achievements');
        return $builder->where('UserID', $userId)->countAllResults();
    }

    public function getUserAchievements($userId)
    {
        $builder = $this->db->table('users_achievements');
        return $builder->select('achievements.*, users_achievements.Date')
                      ->join('achievements', 'achievements.id = users_achievements.AchievementID')
                      ->where('users_achievements.UserID', $userId)
                      ->orderBy('users_achievements.Date', 'DESC')
                      ->get()
                      ->getResultArray();
    }

    public function getAllAchievements()
    {
        return $this->where('Show', 1)->findAll();
    }

    public function getAchievementsByCategory($category)
    {
        return $this->where('Category', $category)
                   ->where('Show', 1)
                   ->findAll();
    }
}