<?php

namespace App\Models;

use CodeIgniter\Model;

class Ads extends Model
{
    protected $table            = 'ads';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id', 'category_id', 'title', 'description', 'price', 'location', 'image_url', 'status'];

    protected $useTimestamps = true;
}
