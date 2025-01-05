<?php

use App\Models\Pages;

function SavePageFile($page, $mode = 'create', $old="")
{
    switch ($mode) {
        case 'create':
            $fileName = ROOTPATH . 'app/Views/uploads/' . $page['slug'] . '.php';
            if (file_put_contents($fileName, $page['content']) !== false) {
                return 'File was succesfully saved: ' . $fileName;
            } else {
                return view('/components/error', ['error' => 'Failed save file']);
            }
            break;
        case 'update':
            $oldName = ROOTPATH . 'app/Views/uploads/' . $old . '.php';
         
            $fileName = ROOTPATH . 'app/Views/uploads/' . $page['slug'] . '.php';
            if(file_exists($oldName))
            unlink($oldName);
            
            if (file_put_contents($fileName, $page['content']) !== false) {
                return 'File was succesfully saved: ' . $fileName;
            } else {
                return view('/components/error', ['error' => 'Failed save file']);
            }
            break;
        default:
           echo "HATA page_helper";
           dd();
            break;
    }
}
