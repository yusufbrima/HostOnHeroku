<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::view("about","about");

// Route::view("contact","contact");


// Route::get('/services', function () {
//     return view('services');
// });

// Route::view("services","services");

//Laravel 7.x syntax
//Route::get("users","Users@index");

//Laravel 8.x syntax

Route::get("users",[UsersController::class, "index"])->name('users');

Route::get("contact",[ContactController::class,"index"])->name('contact');

Route::get("about",[AboutController::class,"index"])->name('about');

Route::get("services",[ServiceController::class,"index"])->name('services');

Route::get("/",[WelcomeController::class,"index"])->name('index');

Route::get("register",[RegisterController::class,"index"])->name('register');

Route::get("login",[LoginController::class,"index"])->name('login');


Route::get("posts",[PostController::class,"index"])->name('posts');

Route::get("posts/{id}",[PostController::class,"show"])->name('show_post');

// Route::get('posts/create', function () {
  
//     DB::insert("INSERT INTO posts(title,body) VALUES(?,?)",['hey day','tada tada tada!']);

// })->name('insert');

// Route::get('posts/update/{id}', function ($id) {
  
//     $post =  DB::update('UPDATE posts set title=? ,body=? where id=?',["happy coding","the quick brown fox jumps over the lazy dog!",$id]);
//     return $post;

// })->name('update_post');

// Route::get('posts/delete/{id}', function ($id) {
  
//     $post =  DB::update('DELETE FROM posts where id=?',[$id]);
//     return $post;

// })->name('delete_post');


// Route::get('test', function () {
//     return view('test');
// })->name('test');

// Route::resource("admin",AdminController::class);

// Route::get('/read',function(){
//     $post =  Post::class;
//     $posts = $post::all();
//     foreach($posts as $post){
//         print($post->title."<br />");
//     }
// });

// Route::get('/find/{id}',function($id){
//     $post =  Post::class;
//     $posts = $post::find($id);
//     if($posts){
//         print($posts->title."<br />");
//     }

// });

Route::get('/search/{id}',function($id){
    $post =  Post::class;
    $posts = $post::where('id',$id)->orderBy('id','desc')->take(3)->get();
    return $posts;

});


// Route::get('/searchmore/{id}',function($id){
//     $post =  Post::class;
//     $posts = $post::findOrFail($id);
//     return $posts;

// });


// Route::get('esave',function(){
//     $post =  new Post;
//     $post->title = "AIMS Learning";
//     $post->body = "What an amazing experience in Kigali :)";
//     return $post->save();

// });

// Route::get('/eupdate/{id}',function($id){
//     $post =  Post::find($id);
//     if($post){
//         $post->title = "AIMS Learning 2021";
//         $post->body = "What an amazing experience in Kigali :)";
//         $post->save();
//         return "update sucessfully";
//     }else{
//         return "not found";
//     }

// });

Route::get('create',function(){ 

    Post::create(["title"=>"hello world 2","body" => "this is a nice way to make laravel apps","user_id"=>1]);

});

Route::get('update/{id}',function($id){ 

    $post =  Post::find($id);
    if($post){
        $post->title = "new title for my blog post";
        $post->body = "What a wonderful world :)";
        $post->save();
        return "post updated successfully";
    }else{
        return "Not found";
    }

});

Route::get('delete/{id}',function($id){ 

    $post =  Post::where('id','=',$id)->where('is_admin','=',1);
    if($post){
        $post->delete();
        return "post deleted successfully";
    }else{
        return "Not found";
    }

});

Route::get('trash/{id}',function($id){ 

    $post =  Post::find($id);
    if($post){
        $post->delete();
        return "post deleted successfully";
    }else{
        return "Not found";
    }

});

Route::get('restore/{id}',function($id){ 

    $post =  Post::withTrashed()->where('id',$id);
    if($post){
        $post->restore();
        return "post restored successfully";
    }else{
        return "Not found";
    }

});

Route::get('forcedelete/{id}',function($id){ 

    $post =  Post::withTrashed()->where('id',$id);
    if($post){
        $post->forceDelete();
        return "post restored successfully";
    }else{
        return "Not found";
    }

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/{id}/posts',function($id){ 
    $user =  User::find($id)->post;
    return $user;

});

Route::get('/posts/{id}/user',function($id){ 
    $post =  Post::find($id)->user;
    return $post;

});


Route::get('roles',function(){ 
    $roles =  DB::select("select id,name from roles");

    return $roles;

});


Route::get('user/{id}/roles',function($id){ 
    $user =  User::find($id)->roles;
    return $user;

});
