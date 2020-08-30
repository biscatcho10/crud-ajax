<?php

use Illuminate\Support\Facades\Config;

function uploadImage($folder, $image){
    $image->store('/', $folder);
    $file_name = $image->hashName();
    $path = 'images/'.$folder.'/'.$file_name;
    return $path;
}

function saveImage($image, $folder){
    $file_ex = $image->getClientOriginalExtension();
    $file_name = time().'.'.$file_ex;
    $path = $folder;
    $image->move($path,$file_name);

    return $file_name;
 }

 function getLanguage(){
     return Config::locale();
 }
