<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ImageUploadController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;
use App\Tn\Ranji\Ipl\IndianPlayer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('api',function (){
//         $swiggy_api=env('SWIGGY_API_KEY');
//     return "this is the api1 key ".$swiggy_api;
//     });


// Route::get('/',[ImageUploadController::class,'imageUploadForm']);
// Route::post('/',[ImageUploadController::class,'imageUpload']);
// Route::get('/userform',[GameController::class,'userform']);
// Route::post('/userform',[GameController::class,'insertid']);
// Route::get('/useform',[GameController::class,'deletefrompublic']);

// Advanced Concepts Learning
//  Has Relationship
//    Category|Item|Types

// Polymorphism Relationship
//    1)One to Many
//        Post|Video|Comment

//    2)Many to Many
//       Post|Video|Tag

   //hasMany to Many
Route::get('/',function(){
    $cat=Category::find(1);
    $items=$cat->items;
    foreach($items as $item){
        dd($item);
    }
});

//polymorphic relationship one to many
Route::get('/onetomanypoly',function(){
    $post=Post::find(1);

    // $comment=new Comment();
    // $comment->body="Your first post is very beautiful!";
    // $post->comments()->save($comment);

    $video=Video::find(1);
    // $comment=new Comment();
    // $comment->body="Your first video was marvelous!";
    // $video->comments()->save($comment);
    // return "Succesfully created comments both of post and video";
    dd($video->comments);

});

//polymorphic relationship many to many
Route::get('/manytomanypoly',function(){
     $post=Post::find(1);
    // $tag=new Tag();
    // $tag->name="Dharmapuri";
    // $tag->save();
    // $post->tags()->save($tag);
    // return "Post tag created successfully";
    // dd($post->tags);

       $video=Video::find(1);
    //    $tag=new Tag();
    //    $tag->name="Koimbatore";
    //    $tag->save();
    //    $video->tags()->save($tag);
    //    return "Video tag created successfully";
     dd($video->tags);
});



