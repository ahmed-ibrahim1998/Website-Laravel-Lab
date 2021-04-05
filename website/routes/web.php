<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ResourcPostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//   My Code Here Ahmed  Lab Day1

Route::get('/myinfo',function (){
    $arr = array("Ahmed","Mohamed","Hashem");
    return $arr ;
});

// request

Route::get('/req', function () {
    $req = request();
    return $req;
});

Route::get('/inforequest', function () {
    $req = request("name");
    if($req){
         return $req;
    }else{
        // return "Name You enter Not Found";
        abort(404);
    }
});


// Create New Layout by Route

Route::get('/home', function(){
    return view('BlogHome/layout');
});

Route::get('/home', function(){
//    $post = ["Post1","Post2","Post3"];
    return view('otherpage.home');
});

Route::get('/contact', function(){
    return view('otherpage.contact-us');
});
Route::get('/about', function(){
    return view('otherpage.about');
});


// =========================== Lab Day2 ==========================

//Route::get("/post",function (){
//    $posts = ["title1"=>"Post1","title2"=>"Post2","title3"=>"Post3"];
//    return view('otherpage.post',["posts"=>$posts]);
//});



//
//Route::get('/post', "App\Http\Controllers\postController@postindex");
//Route::get('/post/{postid}', "App\Http\Controllers\postController@show");
//
//======================== Lab Day3 CRUD OPERATION By Simple Controller ==============

//Route::get('/posts',[PostsController::class,'index'])->name('posts.index');

//Route::get('posts/create',[PostsController::class,'create'])->name('posts.create');

//Route::post('posts/store',[PostsController::class,'store'])->name('posts.store');

//Route::get('posts/show/{id}',[PostsController::class,'show'])->name('posts.show');

//Route::get('posts/edit/{id}',[PostsController::class,'edit'])->name('posts.edit');

//Route::post('posts/update/{id}', [PostsController::class, "update"])->name("posts.update");

//Route::get('posts/delete/{id}', [PostsController::class, "destroy"])->name("posts.destroy");

// ========= Lab Day4 CRUD OPERATION By Resource Controller ===================

//Route::resource('resourcePosts',ResourcPostsController::class);
//
//Route::resource('posts',\App\Http\Controllers\PosstController::class)->middleware('auth');
//Route::resource('users',\App\Http\Controllers\UserController::class);
//
//Route::get('/user/{user}/posts', [UserController::class, "getPosts"])->name('user.posts');

//Route::get('/Auth',function (){
//    return view('Posts.authgate');
//});

// JetStream Library
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');
