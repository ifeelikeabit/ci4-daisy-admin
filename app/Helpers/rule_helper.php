<?php
function rule($model, $id = -1)
{

    $user = [
        'name' => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email',
        'phone_number' => 'required|numeric',
        'password' => 'required|min_length[8]',
        'role' => 'required|in_list[admin,user,seller]',
    ];
    $user_update = [
        'name' => 'min_length[3]|max_length[255]',
        'email' => 'valid_email',
        'phone_number' => 'numeric',
        'role' => 'in_list[admin,user,seller]',
    ];

    $page_create = [
        'title' => 'required|min_length[3]|max_length[255]',
        'slug' => 'required|min_length[3]|max_length[255]',
        'content' => 'required',
        'status' => 'in_list[draft,published,archived]',
    ];

    $page_edit = [
        'title' => 'required|min_length[3]|max_length[255]',
        'slug' => 'required|min_length[3]|max_length[255]',
        'content' => 'required',
        'status' => 'in_list[draft,published,archived]',
    ];
    $categories = [
        'name' => "required|min_length[2]|max_length[255]|is_unique[categories.name,id,{$id}]",
        'description' => 'required|min_length[2]|max_length[255]',
        'parent_id' => 'permit_empty|integer',
    ];

    $ads = [
        'user_id' => 'required|integer',
        'category_id' => 'required|integer',
        'title' => "required|min_length[2]|max_length[255]|is_unique[ads.title,id,{$id}]",
        'description' => 'required|min_length[10]|max_length[1000]',
        'price' => 'required|decimal',
        'location' => 'required|min_length[2]|max_length[255]',
        'image_url' => 'permit_empty|valid_url',
        'status' => 'required|in_list[active,inactive,sold]',
    ];


    switch ($model) {
        case 'user':
            $rule = $user;
            break;
        case 'user_update':
            $rule = $user_update;
            break;
        case 'page_create':
            $rule = $page_create;
            break;
        case 'page_edit':
            $rule = $page_create;
            break;
        case 'categories':
            $rule = $categories;
            break;
        case 'ads':
            $rule = $ads;
            break;
        default:
            $rule = "rule not found";
            break;
    }
    return $rule;
}
