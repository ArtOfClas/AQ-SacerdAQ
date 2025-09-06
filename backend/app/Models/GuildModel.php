<?php

namespace App\Models;

use CodeIgniter\Model;

class GuildModel extends Model
{
    protected $table            = 'guilds';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Name', 'MessageOfTheDay', 'MaxMembers', 'HallSize', 'LastUpdated',
        'Wins', 'Loss', 'TotalKills', 'Level', 'Experience', 'GuildColor',
        'StaffG', 'Color'
    ];

    protected $useTimestamps = false;

    public function getUserGuild($userId)
    {
        $builder = $this->db->table('users_guilds');
        return $builder->select('guilds.*, users_guilds.Rank')
                      ->join('guilds', 'guilds.id = users_guilds.GuildID')
                      ->where('users_guilds.UserID', $userId)
                      ->get()
                      ->getRowArray();
    }

    public function getTopGuilds($limit = 20)
    {
        return $this->select('guilds.*, COUNT(users_guilds.UserID) as MemberCount')
                   ->join('users_guilds', 'users_guilds.GuildID = guilds.id', 'left')
                   ->groupBy('guilds.id')
                   ->orderBy('guilds.Level', 'DESC')
                   ->orderBy('guilds.Experience', 'DESC')
                   ->limit($limit)
                   ->findAll();
    }

    public function getGuildMembers($guildId)
    {
        $builder = $this->db->table('users_guilds');
        return $builder->select('users.Name, users.Level, users.ClassID, users_guilds.Rank, users.LastLogin')
                      ->join('users', 'users.id = users_guilds.UserID')
                      ->where('users_guilds.GuildID', $guildId)
                      ->orderBy('users_guilds.Rank', 'DESC')
                      ->orderBy('users.Level', 'DESC')
                      ->get()
                      ->getResultArray();
    }
}