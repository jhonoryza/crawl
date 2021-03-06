<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/status', function () {
    return "It works!";
});

Route::get('/articles', 'ArticlesController@index');

Route::get('/categories', 'CategoriesController@index');

// Route::get('/debug-sentry', function () {
//     throw new Exception('My first Sentry error!');
// });
