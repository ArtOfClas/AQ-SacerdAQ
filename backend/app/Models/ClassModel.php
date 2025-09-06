<?php

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table            = 'classes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Name', 'Category', 'Description', 'ManaRegenerationMethods', 'StatsDescription'
    ];

    protected $useTimestamps = false;

    public function getAllClasses()
    {
        return $this->findAll();
    }

    public function getClassesByCategory($category)
    {
        return $this->where('Category', $category)->findAll();
    }
}