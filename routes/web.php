<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/registrazione','App\\Http\\Controllers\\ControllerRegistrazione@registrazione');

Route::get('/registrazione',function(){
    return view('registrazione');
})->name('registrazione');

Route::get('/home','App\\Http\\Controllers\\ControllerHome@view')->name('home');

Route::get('/fucili','App\\Http\\Controllers\\ControllerFucili@view')->name('fucili');

Route::get('/pistole','App\\Http\\Controllers\\ControllerPistole@view')->name('pistole');

Route::get('/abbigliamento','App\\Http\\Controllers\\ControllerAbbigliamento@view')->name('abbigliamento');

Route::get('/regole','App\\Http\\Controllers\\ControllerRegole@view')->name('regole');

Route::get('/json_yt','App\\Http\\Controllers\\ControllerYoutube@api_yt')->name('youtube');
Route::get('/home/youtube','App\\Http\\Controllers\\ControllerYoutube@view')->name('youtube');

Route::get('/forum','App\\Http\\Controllers\\ControllerForum@view')->name('forum');
Route::get('/select','App\\Http\\Controllers\\ControllerForum@select');

Route::get('/forum/{query}','App\\Http\\Controllers\\ControllerForum@insert');
Route::get('/stampa','App\\Http\\Controllers\\ControllerForum@insert_stampa');
Route::get('/cancellacommento/{id}', 'App\\Http\\Controllers\\ControllerForum@delete');
//Route::get('/forum/{query}','App\\Http\\Controllers\\ControllerForum@delete');
Route::get('/modifica/{id}/{mess}','App\\Http\\Controllers\\ControllerForum@update');
Route::get('/login','App\\Http\\Controllers\\ControllerLogin@login')->name('login');
Route::get('/login','App\\Http\\Controllers\\ControllerLogin@view')->name('login');

Route::post('/login','App\\Http\\Controllers\\ControllerLogin@ControlloLogin')->name('login');

Route::get('/logout','App\\Http\\Controllers\\ControllerLogin@logout')->name('logout');







  