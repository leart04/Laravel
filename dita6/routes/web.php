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


Route::get('/home', function () {
    return view('blog.index',['username'=>'Leart']);
});

Route::get('/alert', function () {
    return view('blog.index',['url'=>'<script> alert("Hello Laravel");</script>']);
});

Route::get('/blog', function () {
    return view('blog.index',[
        'username'=>'Leart',
        'url'=>'<script> alert("Hello Laravel");</script>',
    'paragraf'=>'<p>Shkolla Digjitale</p>',
    'name'=>["leart","Krasniqi",15],
    'age'=>29

]);
});