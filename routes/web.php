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
    //for relationship testing between user and word
//    $user = \App\User::first();
//
//    $word = \App\Model\Word\Word::all();
//
//
//    $user->words()->sync($word);
//
//    dd($word);

    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Change this route later to word controller
Route::get('/about', 'HomeController@about')->name('about');


//Change this route later to profile controller
Route::get('/profile', 'HomeController@profile')->name('profile');

//Route to show list of contributors
Route::get('/contributors', 'HomeController@contributors')->name('contributors');

