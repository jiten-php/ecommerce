<?php

namespace App\Traits;
 
trait ImageUpload
{
    public function uploadImage($file)
    {
        //get filename with extension
        $file_name_with_extension = $file->getClientOriginalName();
        $filename = pathinfo($file_name_with_extension, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $file_name_to_store = $filename.'_'.time().'.'.$extension;
        //Upload File
        $file->storeAs('public/uploads/sliders', $file_name_to_store); 
        return $file_name_to_store;
    }
}