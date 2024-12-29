<?php


function rule($model)
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

    switch ($model) {
        case 'user':
            $jump = $user;
            break;
        case 'user_update':
            $jump = $user_update;
            break;
        case 'page_create':
            $jump = $page_create;
            break;
        default:
            $jump = "rule not found";
            break;
    }
    return $jump;
}
