<?php

namespace App\Models;

use CodeIgniter\Model;

class Pages extends Model
{
    protected $table            = 'pages';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['title','slug','content','status'];

    protected $useTimestamps = true;


    
}
