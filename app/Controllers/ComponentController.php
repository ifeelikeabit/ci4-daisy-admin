<?php

namespace App\Controllers;

use App\Models\User;

class ComponentController extends BaseController
{

    public function add(){
        
return view('/components/addcounter');
    }
    public function explorer()
    {
        return view('components/explorer');
    }

    public function UserCount()
    {
        $model = new User();
        $count =  $model->countAll();
        return view('components/usercount', ['count' =>  $count]);
    }

    public function textEditor()
    {
        return view('components/texteditor');
    }
    
}
