<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Pages;

class Home extends BaseController
{
    public function index()
    {

        $counters = [
            counter('user', 'success', 'Kullanıcı sayısı'),
            counter('page', 'danger', 'Sayfa sayısı'),
            
        ];
        return view('dashboard', ['counters' => $counters]);
    }

    public function test()
    {
        $html = $this->request->getPost('editor');
        return view('components/test', ['data' => $html]);
    }
}
