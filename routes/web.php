<?php

//{
    //for relationship testing between user and word
//    $user = \App\User::first();
//
//    $word = \App\Model\Word\Word::all();
//
//
//    $user->words()->sync($word);
//
//    dd($word);

//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Word controller

//fetching all words
Route::get('/', 'Word\WordController@index');

//specific word details
Route::get('/words/{word}', 'Word\WordController@show')->name('words.show');


//End Word controller

//User controller
Route::get('/profile', 'User\UserController@profile')->name('profile');

//Route to show list of contributors
Route::get('/contributors', 'User\UserController@contributors')->name('contributors');

//End User Controller