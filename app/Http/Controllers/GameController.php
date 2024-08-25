<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
   public function userform(){
    return view('user_form');
   }
   public function insertid(Request $request){
  $insert_id=  DB::table('student')->insertGetId(['name'=>$request->input('name')]);
  return back()->withInsertId($insert_id);

   }
   public function deletefrompublic(){
    if(File::exists(public_path('image/1718175345.png'))){
        File::delete(public_path('image/1718175345.png'));
        dd("file is deleted");

    }
    else{
        dd("not deleted");
    }
   }
}
