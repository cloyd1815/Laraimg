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

Route::get('/', array('as' => 'upimg_index', 'uses' => 'UpimgController@index'));

Route::post('/upload', array('as' => 'image_upload', 'uses' => 'UpimgController@uploadImage'));

Route::get('/blog', array('as' => 'upimg_blog', 'uses' => 'UpimgController@blog'));

Route::get('/{img}', array('as' => 'upimg_img', 'uses' => 'UpimgController@imgView'))->where('img', '[a-z0-9]{32}');

Route::get('/view', array('as' => 'upimg_img', 'uses' => 'UpimgController@view'));

Route::get('/login', array('as' => 'upimg_loginPage', 'uses' => 'AuthController@showLogin'));

Route::post('/login', array('as' => 'upimg_login', 'uses' => 'AuthController@login'));

Route::get('logout', array('uses' => 'AuthController@logout'));

Route::get('/signup', array('uses' => 'AuthController@showSignup'));

Route::post('/signup', array('uses' => 'AuthController@signup'));