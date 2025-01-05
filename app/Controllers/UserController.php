<?php

namespace App\Controllers;

use Config\Database;
use App\Models\User;
use App\Models\Ads;
use CodeIgniter\HTTP\Request;
use PHPUnit\TextUI\XmlConfiguration\Validator;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new User();

        $users = $userModel->findAll();

        return view("user/index", ['users' => $users]);
    }

    public function show($id)
    {
        $userModel = new User();
        $adsM = new Ads();
        $user = $userModel->find($id);
        $ads = $adsM->getAllAdWithForeigns($id);
        return view("user/show", ['user' => $user , 'ads' => $ads]);
    }
    public function createview()
    {
        return view('user/create');
    }


    public function store()
    {

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone_number = $this->request->getPost('phone_number');
        $password = $this->request->getPost('password');
        $role = $this->request->getPost('role');

        $userModel = new User();

        $data = [
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'password' => $password,
            'role' => $role
        ];

        if (!$this->validate(rule('user'))) {
            $errors = $this->validator->getErrors();
            return view('/user/create', ['errors' => $errors]);
        }

        if ($userModel->insert($data)) {
            return redirect()->to('/user/create')->with('success', 'User registered successfully!');
        } else {
            return redirect()->to('/user/create')->with('error', 'There was an issue registering the user.');
        }
    }

    public function delete($id)
    {
        $userModel = new User();
        if ($userModel->where('id', $id)->delete()) {
            return redirect()->to('/user')->with('success', 'User deleted successfully!');
        } else {
            return redirect()->to('/user')->with('error', 'There was an issue deleting the user.');
        }
    }

    public function edit($id)
    {
        $model = new User();
        $user = $model->find($id);
        return view('user/edit', ['user' => $user]);
    }


    public function save($id)
    {

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone_number = $this->request->getPost('phone_number');
        $role = $this->request->getPost('role');

        $model = new User();

        $data = [
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'role' => $role
        ];

        if (!$this->validate(rule('user_update'))) {
            $errors = $this->validator->getErrors();
            return view('user/edit', [
                'user' =>  $model->find($id),
                'errors' => $errors
            ]);
        }

        if ($model->update($id, $data)) {
            return view('/user/edit', ['success' => 'User updated successfully!','user' =>  $model->find($id)]);
        } else {
            return view("/user/edit", ['error' => 'There was an issue update the user.', 'user' =>  $model->find($id)]);
        }
    }
}
