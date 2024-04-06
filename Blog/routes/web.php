<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SendMailController;




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
    return view('blog.index');
})->name("home");


Route::get('/about', function () {
    return view('blog.about');
})->name("about");


// Route::get('/blog', function () {
//     return view('blog.blog');
// })->name("blog");


Route::get('/features', function () {
    return view('blog.features');
})->name("features");




Route::get('/contact', function () {
    return view('blog.contact');
})->name("contact");
Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin', [AdminController::class, 'index']);

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    
    
    Route::get('/products',[AdminController::class,'product'])->name('products');


    Route::get('/add-products',[AdminController::class,'create'])->name('add-products');
    Route::post('/add-products',[AdminController::class,'store'])->name('add-products');
    Route::get('/edit-products/{id}',[AdminController::class,'edit'])->name('edit-products');
    Route::put('/update-products/{id}',[AdminController::class,'update'])->name('update-products');
    Route::get('/delete-products/{id}',[AdminController::class,'destroy'])->name('delete-products');


});
Route::get('/contact',[SendMailController::class,'index'])->name('contact');
    Route::post('/sendMail',[SendMailController::class,'sendMail'])->name('sendMail');
    Route::get('/blog',[AdminController::class,'productUsers'])->name('blog');