<?php

use App\Models\User;
use App\Models\Pages;

function counter($entity, $color = 'primary', $message = 'Number of undefined')
{
    //color types defined just bootstrap variable
    $model = 0;
    switch ($entity) {
        case 'user':
            $model = (new User())->countAll();
            break;
        case 'page':
            $model = (new Pages())->countAll();
            break;

        default:
            $model = -1;
            break;
    }

    $counter = [
            'color' => $color,
            'id' => $entity,
            'numberOF' => $model,
            'message' => $message
        ];
    return $counter;
}
