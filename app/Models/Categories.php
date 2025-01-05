<?php

namespace App\Models;

use CodeIgniter\Model;

class Categories extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'description', 'parent_id'];


    public function getCategoryWithParent($id)
    {

        $category = $this->find($id);

        if ($category && $category['parent_id']) {
            $parentCategory = $this->find($category['parent_id']);
            $category['parent_name'] = $parentCategory['name'] ?? null;
            $category['parent_id'] = $parentCategory['id'] ?? null;
        }

        return $category;
    }
    public function getAllCategoryWithParent($opt=false)
    {
        $categories = $this->findAll();
      
        if($opt){
            $categories = array_filter($categories, function ($categories) {
                return $categories['id'] !=1;
            });
        }


        foreach ($categories as &$category) {
            $parentCategory = $this->find($category['parent_id']);
            $category['parent_name'] = $parentCategory['name'] ?? null;
        }

          
        
     
        return $categories;
    }      
}
