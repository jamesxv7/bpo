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

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('/articulos', function()
{
    return View::make('items');
});

Route::get('/items', function()
{
    return View::make('items');
});

Route::get('/test', function()
{
    $data = Input::all();
    var_dump($data);
});

Route::get('/info', function()
{
    phpinfo();
});
