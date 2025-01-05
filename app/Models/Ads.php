<?php

namespace App\Models;

use CodeIgniter\Model;

class Ads extends Model
{
    protected $table            = 'ads';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'category_id', 'title', 'description', 'price', 'location', 'image_url', 'status'];

    protected $useTimestamps = true;

    public function getAdWithForeigns($id)
    {
        $categoryM = new Categories();
        $userM = new User();
        $ad = $this->find($id);

        if ($ad && $ad['user_id']  && $ad['category_id']) {
            $category = $categoryM->find($ad['category_id']);
            $user = $userM->find($ad['user_id']);

            $ad['category_name'] = $category['name'];
            $ad['user_name'] = $user['name'] ?? null;
        }

        return $ad;
    }


    public function getAllAdWithForeigns($id=-1)
    {
        $categoryM = new Categories();
        $userM = new User();
        if($id!=-1 || $id > 0){
            $ads = $this->where('user_id', $id)->findAll();
        }
        else {
        $ads = $this->findAll();
        }
        foreach ($ads as &$ad) {
            $category = $categoryM->find($ad['category_id']);
            $user = $userM->find($ad['user_id']);

            $ad['category_name'] = $category['name'] ?? null;
            $ad['user_name'] = $user['name'] ?? null;
        }
        return $ads;
    }
}
