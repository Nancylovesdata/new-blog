<?php

// use Illuminate\Support\Facades\Route;

// When someone returns to the home page, show them 'welcome'
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return "Hi about you";
// });


// Route::get('/post/{id}', function($id){
//  return "This is post number ". $id;
// });


// Route::get('/post/{id}/{name}', function($id, $name){
//  return "This is post number ". $id . " ". $name;
// });

// giving this long url a nickname
// Route::get('admin/posts/example', array('as' =>'admin.home', function(){
//     $url = route('admin.home');

//     return "this url is". $url;

// }));

// Route::get('/post', 'PostsController@index');

Use App\Http\Controllers\PostsController;

//passing data
// Route::get('/post/{id}', [PostsController::class, 'index']);

// Resources and contollers( creating a request for 'create', ''update',' desdtroy')
// Route::resource('posts', PostsController::class);

// Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('post/{id}/{name}/{password}', [PostsController::class, 'show_post']);

use Illuminate\Support\Facades\DB;

Route::get('/insert', function(){

// use a method from the Db class
DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with laravel','Laravel is the best thing that has happened to PHP, PERIOD!']);


});