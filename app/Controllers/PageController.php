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


    public function store()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'slug'  => sef($this->request->getPost('slug')),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status')
        ];


        if (!$this->validate(rule('page_create'))) {
            $errors = $this->validator->getErrors();
            return view('/page/create', ['errors' => $errors]);
        }


        $model = new Pages();
        $existingPage = $model->where('slug', $data['slug'])->first();

        if ($existingPage) {
            return view('/page/create', [
                'errors' => ['slug' => 'The slug already exists. Please choose another one.'],
                'data' => $data
            ]);
        }

        if (!$model->insert($data)) {
            return redirect()->to('/page/create')->with('error', 'There was an issue create the user.');
        } else {
            return redirect()->to('/page/create')->with('success', 'Page created successfully!');
        }
    }

    public function edit($id)
    {

        $page = (new Pages())->find($id);

        if (!$page)
            return view('components/errors', ['error' => 'Page was not found in the database']);

        return view('/page/edit', ['page' => $page]);
    }
    public function save($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'slug'  => sef($this->request->getPost('slug')),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status')
        ];

        $model = new Pages();

        if (!$this->validate(rule('page_edit'))) {
            $errors = $this->validator->getErrors();
            return view('/page/edit', ['errors' => $errors, 'page' => $model->find($id)]);
        }


        if ($model->update($id, $data)) {

            return view('/page/edit', ['success' => 'Page updated successfully!', 'page' => $model->find($id)]);
        } else {
            return view("/page/edit", ['error' => 'There was an issue update the page.', 'page' => $model->find($id)]);
        }
    }

    public function delete($id)
    {
        $model = new Pages();

        if ($model->where('id', $id)->delete()) {
            return redirect()->to('/page')->with('success', 'Page deleted successfully!');
        } else {
            return redirect()->to('/page')->with('error', 'There was an issue deleting the page');
        }
    }
    public function show($slug)
    {
        $var = (new Pages())->where('slug', $slug)->first();
        if (!isset($var)) {
            return view('components/errors', ['error' => 'The page mentioned as \'' . $slug . '\' was not found.']);
        }
        return view('page/show', ['page' => $var]);
        // print(view('uploads/' . (new Pages())->find($id)['slug']));
    }
}
