<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function index(): string
    {
        return view('page/index');
    }
}
