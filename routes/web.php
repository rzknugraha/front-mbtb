<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@landing');
Route::get('/home', 'HomeController@home');
Route::post('/subscribe', 'HomeController@emailSubscribe');

Route::get('/story', 'PostController@story');
Route::get('/story/{id?}', 'PostController@storyDetail');

Route::get('/event', 'PostController@event');

Route::get('/link', function () {
    Artisan::call('storage:link');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
