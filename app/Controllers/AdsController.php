<?php

namespace App\Controllers;

use App\Models\Ads;
use App\Models\User;
use App\Models\Pages;
use App\Models\Categories;

class AdsController extends BaseController
{

    public function index()
    {
        $ads = (new Ads())->getAllAdWithForeigns();
        return view('ads/index', ['ads' => $ads]);
    }

    public function add()
    {
        $model_user = new User();
        $users =  $model_user->findAll();
        $model_categories = new Categories();
        $categories =  $model_categories->findAll();

        return view('ads/add', ['users' => $users, 'categories' => $categories]);
    }

    public function store()
    {
        if (!$this->validate(rule('ads'))) {
            return redirect()->to('ads/add')->withInput()->with('errors', $this->validator->getErrors());
        }
        helper(['form', 'url']);
        $model = new Ads();
        $validation =  \Config\Services::validation();

        $file = $this->request->getFile('image_url');

        if ($file && $file->isValid() && !$file->hasMoved()) {

            $newName = $file->getRandomName();

            $file->move(WRITEPATH . 'uploads', $newName);

            $image_url = 'uploads/' . $newName;
        } else {

            $image_url = null;
        }


        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
            'location' => $this->request->getPost('location'),
            'image_url' => $image_url,
            'status' => $this->request->getPost('status'),
            'user_id' => $this->request->getPost('user_id'),
        ];


        if ($model->save($data)) {
            return redirect()->to('/ads')->with('message', 'Ad başarıyla eklendi');
        } else {
            return redirect()->back()->with('error', 'Bir hata oluştu. Lütfen tekrar deneyin.');
        }
    }


    public function edit($id)
    {
        $userM = new User();
        $categoryM = new Categories();
        $adM = new Ads();

        $users = $userM->findAll();
        $categories = $categoryM->findAll();
        $ad = $adM->getAdWithForeigns($id);

        return view('ads/edit', ['ad' => $ad, 'categories' => $categories, 'users' => $users]);
    }

    public function show($id)
    {
        $ad = (new Ads())->getAdWithForeigns($id);
        return view('ads/show', ['ad' => $ad]);
    }
    public function save()
    {
        $id = $this->request->getPost('id');
        $adsM = new Ads();

        $data = $this->request->getPost();

        if ($this->validate(rule('ads', $id))) {

            $image = $this->request->getFile('image_url');
            if ($image && $image->isValid()) {
                $newName = $image->getRandomName();
                $image->move(WRITEPATH . 'uploads', $newName);
                $data['image_url'] = 'uploads/' . $newName;
            }

            $adsM->update($id, $data);


            session()->setFlashdata('success', 'Ad updated successfully');
            return redirect()->to('ads');
        } else {

            return redirect()->to('ads/edit')->withInput()->with('errors', $this->validator->getErrors());
        }
    }
    public function remove($id)
    {
        $adsM = new Ads();
        $ad = $adsM->find($id);

        $image = $ad['image_url'];
        if (isset($image)) {
            if (file_exists(WRITEPATH . $image)) {
                unlink(WRITEPATH . $image);
            }
        }
        if ($adsM->where('id', $id)->delete()) {
            return redirect()->to('ads')->with('success', 'Ad removed successfully!');
        } else {
            return redirect()->to('ads')->with('error', 'There was an issue removed the ad');
        }

    }
}

