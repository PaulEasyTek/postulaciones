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

Route::get('/', 'HomeController@getIndex');

Route::controller('api/v1/postulaciones{extension?}', 'api\v1\PostulacionesController');

Route::controller('api/v1/test', 'api\v1\TestController');
