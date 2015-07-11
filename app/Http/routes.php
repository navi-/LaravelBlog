<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', 'StaticPageCntlr@contact');

Route::get('about', 'StaticPageCntlr@about');

Route::get('articles', 'ArticlesCntlr@index');
Route::get('articles/create', 'ArticlesCntlr@create');
Route::get('articles/{id}', 'ArticlesCntlr@show');

Route::post('articles', 'ArticlesCntlr@store');
/*Route::get('contact', function () {
    return 'Contact Us Here';
});*/