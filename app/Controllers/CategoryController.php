<?php

namespace App\Controllers;

use App\Models\Categories;

class CategoryController extends BaseController
{
    public function index()
    {
        $model = new Categories();

        $categories =$model->getAllCategoryWithParent(true);
    

        return view('categories/index', ['categories' => $categories]);
    }

    public function add()
    {
        $model = new Categories();
        $categories = $model->findAll();
        return view('categories/add', ['categories' => $categories]);
    }
    public function store()
    {

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'parent_id' =>  $this->request->getPost('parent_id')
        ];

        $model = new Categories();
        // print_r($data);
        // dd();
        if (!$this->validate(rule('categories'), $data)) {

            return redirect()->to('categories/add')->withInput()->with('errors', $this->validator->getErrors());
        }
        if ($model->insert($data)) {

            return redirect()->to('/categories')->with('success', 'Categorie stored successfully!');
        } else {
            return redirect()->to('categories/index')->with('error', 'Categorie can\'t stored !');
        }
    }

    public function remove($id)
    {
        $model = new Categories();
        if ($model->where('id', $id)->delete()) {
            return redirect()->to('/categories')->with('success', 'Categorie removed successfully!');
        } else {
            return redirect()->to('/categories')->with('error', 'There was an issue removed the categorie');
        }
    }
    public function edit($id)
    {
        $model = new Categories();
        $entity = $model->getCategoryWithParent($id);

        return view('categories/edit', ['entity' => $entity]);
    }
    public function save()
    {
       
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'parent_id' => $this->request->getPost('parent_id')
        ];
        $model = new Categories();
        $id = $this->request->getPost('id');
        if (!$this->validate(rule('categories',$id))) {
            $errors = $this->validator->getErrors();
            return view('/categories/edit', ['errors' => $errors, 'entity' => $model->getCategoryWithParent($id)]);
        }
     
     
        if ($model->update($id, $data)) {
            return redirect()->to('categories')->with('success', 'Categorie saved successfully!');
        } else {
            return redirect()->to('categories')->with('error', 'Categorie can\'t saved !');
        }
    }

    public function reset()
    {
        $model = new Categories();

        if ($model->insert([
            'id' => 1,
            'name' => 'root',
            'description' => 'root',
            'parent_id' => null
        ])) {
            if ($model->update(1, ['parent_id' => 1]))
                return redirect()->to('categories')->with('success', 'Categorie reseted successfully');
        } else {
            return redirect()->to('categories')->with('error', 'Categorie can\'t reseted !');
        }
    }
}
