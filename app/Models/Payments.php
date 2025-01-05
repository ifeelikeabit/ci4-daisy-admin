<?php

namespace App\Models;

use CodeIgniter\Model;

class Payments extends Model
{
    protected $table            = 'payments';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['user_id','ad_id','amount','payment_method','payment_status'];
    protected $useTimestamps = true;


}