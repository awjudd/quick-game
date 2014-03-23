<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Confide RESTful route
/*Route::get('user/confirm/{code}', QuickGame::action('UserController@getConfirm'));
Route::get('user/reset/{token}', 'UserController@getReset');*/
Route::controller( 'user', QuickGame::controller('UserController'));


Route::controller('/', QuickGame::controller('HomeController'));// Confide routes
