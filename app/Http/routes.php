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

    /*
     * Post
     * */
    Route::group(['prefix' => 'post'], function()
    {
        Route::get('show/{id}', ['as' => 'notice.show', 'uses' => 'NoticeController@show']);
    });
    /*
     * Requer permissão de ADMIN
     * */
    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
    {
        Route::get('/admin', 'AdminController@index');

        /*
         * Usuario
         * */
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

        /*
         * Post
         * */
        Route::group(['prefix' => 'admin/post'], function()
        {
            Route::get('/index', ['as' => 'notice.index', 'uses' => 'NoticeController@index']);
            Route::get('create', ['as' => 'notice.create', 'uses' => 'NoticeController@create']);
            Route::post('insert', ['as' => 'notice.store', 'uses' => 'NoticeController@store']);
            Route::get('edit/{id}', ['as' => 'notice.edit', 'uses' => 'NoticeController@edit']);
            Route::post('update', ['as' => 'notice.update', 'uses' => 'NoticeController@update']);
            Route::get('delete/{id}', ['as' => 'notice.remove', 'uses' => 'NoticeController@destroy']);
        });
    });


});