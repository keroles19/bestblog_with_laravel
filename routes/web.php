<?php

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

    // Routing
// Route::get('/', function () {
//     return view('welcome');
// });

// // get Route
// Route::get('about',function(){
//     return view("pages.about");
// });

// // send parameters 
// Route::get('services/{id}/{name}',function($id , $name){
//     return "this is id " . $id . "and author is " . $name;
// });

// // optional parameters
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// /* 
//   Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
//  });
//  */
// //Regular Expression Constraints
// Route::get('user/{id}/{name}', function ($id, $name) {
//     return $id . "name is " . $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('search/{search}', function ($search) {
//     return $search;
// });
// // named Routes 
// Route::get('user/profile', function () {
    
// })->name('profile');

// // dd('any thing .............. bla bla bla bla ..... '); 


// Controller 
 // to create controller write  php artisan make:Controller PagesController

Route::get('/' , 'PagesController@index');
Route::get('about' , 'PagesController@about');

Route::get('post','PostController@index')->name('post.index');

Route::get('post/create','PostController@create')->name('post.edit');
Route::post('post','PostController@store')->name('post.store');

Route::get('post/{id}','PostController@show')->name('post.show');

Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
Route::put('post/{id}','PostController@update')->name('post.update');

Route::delete('post/{id}','PostController@destroy')->name('post.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
