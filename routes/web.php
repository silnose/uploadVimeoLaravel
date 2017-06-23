<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// You can alias this in config/app.php.
use Vinkla\Vimeo\Facades\Vimeo;



Route::get('/', function () {

    Vimeo::upload('public/video/bar.mp4', false);
// This example is simple and there are far more methods available.

    return view('welcome');
});
