<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index');
    Route::get('/nope', 'HomeController@notToday');

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
    {
        Route::get('/admin', 'AdminController@index');
        Route::group(['prefix' => 'admin/user'], function()
        {
            Route::get('/index', ['as' => 'usuario.index', 'uses' => 'UserController@index']);
            Route::get('create', ['as' => 'usuario.create', 'uses' => 'UserController@create']);
            Route::post('insert', ['as' => 'usuario.store', 'uses' => 'UserController@store']);
            Route::get('edit/{id}', ['as' => 'usuario.edit', 'uses' => 'UserController@edit']);
            Route::get('show/{id}', ['as' => 'usuario.show', 'uses' => 'UserController@show']);
            Route::post('update', ['as' => 'usuario.update', 'uses' => 'UserController@update']);
            Route::get('delete/{id}', ['as' => 'usuario.remove', 'uses' => 'UserController@destroy']);
        });
    });


});