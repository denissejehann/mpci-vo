<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// url.com/users/
// url.com/users/profile/1
// url.com/users/delete/1
// url.com/users/add
// url.com/users/edit/1
// 
// 

Route::get('/henry', [
    'as' => 'henry',
    'uses' => 'HomeController@henry'
]);

Route::group(['prefix' => 'users'], function() {

    Route::get('/', [
        'as' => 'users.list',
        'uses' => 'UserController@usersList'
    ]);

    Route::get('/profile/{id}', [
        'as' => 'users.profile',
        'uses' => 'UserController@userProfile'
    ]);

    Route::get('/add', [
        'as' => 'users.add',
        'uses' => 'UserController@addUser'
    ]);

    Route::post('/add', [
        'as' => 'users.add',
        'uses' => 'UserController@addUserSave'
    ]);

    Route::get('/delete/{id?}', [
        'as' => 'users.delete',
        'uses' => 'UserController@deleteUser'
    ]);

    Route::get('/edit/{id?}', [
        'as' => 'users.edit',
        'uses' => 'UserController@editUser'
    ]);

    Route::post('/edit/{id?}', [
        'as' => 'users.edit',
        'uses' => 'UserController@editUserSave'
    ]);    

});
