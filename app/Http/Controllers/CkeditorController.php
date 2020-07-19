<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $file_name_with_extension = $request->file('upload')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($file_name_with_extension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
      
            //filename to store
            $file_name_to_store = $filename.'_'.time().'.'.$extension;
      
            //Upload File
            $request->file('upload')->storeAs('public/uploads/ckeditor_upload', $file_name_to_store); 
            $url = asset('storage/uploads/ckeditor_upload/'.$file_name_to_store); 
            return response()->json(['url' => asset($url)]);
        }
    }
}



