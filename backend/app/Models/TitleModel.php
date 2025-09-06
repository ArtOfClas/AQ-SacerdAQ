<?php

namespace App\Models;

use CodeIgniter\Model;

class TitleModel extends Model
{
    protected $table            = 'titles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Name', 'Description', 'Color', 'Strength', 'Intellect', 'Endurance',
        'Dexterity', 'Wisdom', 'Luck', 'Access'
    ];

    protected $useTimestamps = false;

    public function getAllTitles()
    {
        return $this->findAll();
    }

    public function getTitlesByAccess($accessLevel)
    {
        return $this->where('Access <=', $accessLevel)->findAll();
    }
}