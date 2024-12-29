<?php

namespace App\Controllers;

use App\Models\Pages;

class PageController extends BaseController
{
    public function index(): string
    {
        $model = new Pages();

        return view('page/index', ['pages' => $model->findAll()]);
    }
    public function create(): string
    {
        return view('page/create');
    }


    public function save()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'slug'  => sef($this->request->getPost('slug')),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status')
        ];


        if (!$this->validate(rule('page_create'))) {
            $errors = $this->validator->getErrors();
            return view('/page/create', ['errors' => $errors ,'lan' => 'lan']);
        }

    
        $model = new Pages();

        if ($model->insert($data)) {
            return redirect()->to('/page/create')->with('success', 'Page created successfully!');
        } else {
            return redirect()->to('/page/create')->with('error', 'There was an issue create the user.');
        }
    }
}
