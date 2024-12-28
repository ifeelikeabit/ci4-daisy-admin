<?php

namespace App\Models;

use CodeIgniter\Model;

class Favorites extends Model
{
    protected $table            = 'favorites';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id','ad_id'];

    protected $useTimestamps = true;


    
}
