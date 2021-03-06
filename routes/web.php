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

Route::auth();

Route::get('/', 'PagesController@home');

Route::get('portfolio', 'PagesController@portfolio');

Route::get('over', 'PagesController@over');

Route::get('contact', 'PagesController@contact');
