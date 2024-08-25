<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageUploadForm(){
        return view('image_upload');

    }
    public function imageUpload(Request $request){
        $request->validate([
            'image'=>'required|image|mimes:png,jpg,jpeg,svg,png,gif|max:2048'
        ]);
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('image'),$imageName);
        return back()
        ->withSuccess('you have successfully uploaded the image!')
        ->withImageName( $imageName );


    }
}
