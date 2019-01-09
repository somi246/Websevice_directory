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

Route::get('/', function () {
    return view('welcome');

});
/*

Route::get('/hello', function () {// You can use route post and route delete
    //return view('welcome');
    return 'Hello World';
});


Route::get('/users/{id}/{name}', function ($id, $name) { // Adding dynamic values and parameters into the url
    return 'This is user '.$name. ' with an id of ' . $id;

}); //control + backspace opens the terminal

Route::get('/about', function () { // writing the code without using a controller
    return view('pages.about');

});
*/
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts', 'PostsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
