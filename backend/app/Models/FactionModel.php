<?php

namespace App\Models;

use CodeIgniter\Model;

class FactionModel extends Model
{
    protected $table            = 'factions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Name'
    ];

    protected $useTimestamps = false;

    public function getUserFaction($userId)
    {
        $builder = $this->db->table('users_factions');
        $userFaction = $builder->select('users_factions.*, factions.Name')
                              ->join('factions', 'factions.id = users_factions.FactionID')
                              ->where('users_factions.UserID', $userId)
                              ->orderBy('users_factions.Reputation', 'DESC')
                              ->get()
                              ->getRowArray();
        
        return $userFaction;
    }

    public function getAllFactions()
    {
        return $this->findAll();
    }
}