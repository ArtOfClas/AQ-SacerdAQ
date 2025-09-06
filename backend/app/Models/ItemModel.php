<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table            = 'items';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ClassID', 'Name', 'Description', 'Type', 'Element', 'File', 'Link', 'Icon',
        'Equipment', 'Level', 'DPS', 'Range', 'Rarity', 'Quantity', 'Stack', 'Cost',
        'Coins', 'Diamonds', 'Crystal', 'Sell', 'Market', 'Temporary', 'Upgrade',
        'Staff', 'EnhID', 'FactionID', 'ReqReputation', 'ReqClassID', 'ReqClassPoints',
        'ReqQuests', 'QuestStringIndex', 'QuestStringValue', 'Meta', 'Color'
    ];

    protected $useTimestamps = false;

    public function getUserEquipment($userId)
    {
        $builder = $this->db->table('users_items');
        return $builder->select('items.Name, items.Type, items.Equipment, users_items.Equipped')
                      ->join('items', 'items.id = users_items.ItemID')
                      ->where('users_items.UserID', $userId)
                      ->where('users_items.Equipped', 1)
                      ->get()
                      ->getResultArray();
    }

    public function getItemsByType($type, $limit = 50)
    {
        return $this->where('Type', $type)->limit($limit)->findAll();
    }

    public function getRareItems($minRarity = 90, $limit = 20)
    {
        return $this->where('Rarity >=', $minRarity)
                   ->orderBy('Rarity', 'DESC')
                   ->limit($limit)
                   ->findAll();
    }
}