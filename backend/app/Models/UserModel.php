<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'Name', 'Hash', 'HairID', 'Access', 'Title', 'ActivationFlag', 'PermamuteFlag',
        'Country', 'Age', 'Gender', 'Email', 'Level', 'Gold', 'Coins', 'Diamonds',
        'Crystal', 'Exp', 'ColorChat', 'ColorUsername', 'ColorHair', 'ColorSkin',
        'ColorEye', 'ColorBase', 'ColorTrim', 'ColorAccessory', 'SlotsBag', 'SlotsBank',
        'SlotsHouse', 'SlotsAuction', 'DateCreated', 'LastLogin', 'CpBoostExpire',
        'RepBoostExpire', 'GoldBoostExpire', 'ExpBoostExpire', 'UpgradeExpire',
        'UpgradeDays', 'Upgraded', 'Achievement', 'Settings', 'Quests1', 'Quests2',
        'Quests3', 'Quests4', 'Quests5', 'DailyQuests0', 'DailyQuests1', 'DailyQuests2',
        'MonthlyQuests0', 'DailyAds', 'LastArea', 'CurrentServer', 'HouseInfo',
        'KillCount', 'DeathCount', 'PvPRatio', 'Rebirth', 'webLogin', 'UserColor',
        'RegisterAddress', 'SocketAddress', 'WebAddress', 'Address', 'Token', 'Avatar',
        'ClassID'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'DateCreated';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $callbacks = [];
    protected $beforeInsert = [];
    protected $afterInsert  = [];
    protected $beforeUpdate = [];
    protected $afterUpdate  = [];
    protected $beforeFind   = [];
    protected $afterFind    = [];
    protected $beforeDelete = [];
    protected $afterDelete  = [];

    public function getCharacterByName($name)
    {
        $character = $this->where('Name', $name)->first();
        
        if ($character) {
            // Get class information
            $classModel = new ClassModel();
            $class = $classModel->find($character['ClassID']);
            $character['ClassName'] = $class ? $class['Name'] : 'Unknown';

            // Get title information
            if ($character['Title']) {
                $titleModel = new TitleModel();
                $title = $titleModel->find($character['Title']);
                $character['TitleName'] = $title ? $title['Name'] : null;
            }

            // Get guild information
            $guildModel = new GuildModel();
            $userGuild = $guildModel->getUserGuild($character['id']);
            $character['GuildName'] = $userGuild ? $userGuild['Name'] : null;

            // Get user items (equipment)
            $itemModel = new ItemModel();
            $character['Equipment'] = $itemModel->getUserEquipment($character['id']);

            // Get achievements count
            $achievementModel = new AchievementModel();
            $character['AchievementCount'] = $achievementModel->getUserAchievementCount($character['id']);

            // Calculate faction based on quests or set default
            $character['Faction'] = $this->getUserFaction($character['id']);
        }

        return $character;
    }

    public function getOnlinePlayerCount()
    {
        return $this->where('CurrentServer !=', 'Offline')->countAllResults();
    }

    public function getRankings($type = 'level', $limit = 50)
    {
        $builder = $this->builder();
        
        switch ($type) {
            case 'level':
                $builder->select('id, Name, Level, ClassID, LastLogin')
                       ->orderBy('Level', 'DESC')
                       ->orderBy('Exp', 'DESC');
                break;
            
            case 'pvp':
                $builder->select('id, Name, Level, PvPRatio, KillCount, DeathCount, ClassID')
                       ->orderBy('PvPRatio', 'DESC')
                       ->orderBy('KillCount', 'DESC');
                break;
            
            case 'guild':
                // This would need a more complex query joining with guilds table
                $builder->select('users.id, users.Name, users.Level, guilds.Name as GuildName, users.ClassID')
                       ->join('users_guilds', 'users_guilds.UserID = users.id')
                       ->join('guilds', 'guilds.id = users_guilds.GuildID')
                       ->orderBy('users.Level', 'DESC');
                break;
            
            case 'class':
                $builder->select('users.id, users.Name, users.Level, users.ClassID, classes.Name as ClassName')
                       ->join('classes', 'classes.id = users.ClassID')
                       ->orderBy('users.Level', 'DESC')
                       ->orderBy('users.Exp', 'DESC');
                break;
        }

        return $builder->limit($limit)->get()->getResultArray();
    }

    private function getUserFaction($userId)
    {
        $factionModel = new FactionModel();
        $userFaction = $factionModel->getUserFaction($userId);
        return $userFaction ? $userFaction['Name'] : 'Neutral';
    }
}