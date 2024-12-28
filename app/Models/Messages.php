<?php

namespace App\Models;

use CodeIgniter\Model;

class Messages extends Model
{
    protected $table            = 'messages';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['sender_id','receiver_id','ad_id','message','sent_at','read_at'];

    protected $useTimestamps = true;


    
}
