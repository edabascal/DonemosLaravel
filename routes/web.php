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

Route::get('/', ['as'=>'admin.index', function () {
    return view('welcome');
}]);

  route::group (['prefix'=>'admin'], function(){
    route::resource('users','UsersController');
    route::GET('users/{id}/destroy',[
      'uses'=>'UsersController@destroy',
      'as'=>'admin.users.destroy'
    ]);
  });
