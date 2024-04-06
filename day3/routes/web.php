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


Route::get('/Arianit/{id}', function ($id) {
    return $id;
});
Route::get('/post/{id}', function ($id) {
    return $id;
});


Route::get('user/{id}/profile',function ($id)
{
    $url=route('profile',['id'=>$id]);
    return $url;
})->name('profile');

Route::get('/', function () {
    return view('home');
});



Route::get('home/details',function()
{
    $url=route('home.details');
    return $url;
})->name('home.details');




