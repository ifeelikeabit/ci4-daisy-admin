<?php

namespace App\Controllers;

use Config\Database;
use App\Models\User;
use CodeIgniter\HTTP\Request;

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
        $user = $userModel->find($id);
        return view("user/show", ['user' => $user]);
    }

    public function edit($id)
    {
        return $id;
    }

    public function store()
    {

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone_number');
        $password = $this->request->getPost('password');
        $role = $this->request->getPost('role');

        $userModel = new User();

        $data = [
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone,
            'password' => $password,
            'role' => $role
        ];


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
}
