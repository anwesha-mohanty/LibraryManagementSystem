<?php

use App\Http\Controllers\UsersController;
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
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/images',function()
{
    return view('imagesdisplay');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/search','SearchController@index')->name('search');
Route::get('/home/search/{book}','SearchController@show')->name('show');
Route::post('/home/search','TBRController@store')->name('addToTBR');
