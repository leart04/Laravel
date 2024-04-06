<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CreateController;


//
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});


Route::get('/viewfile', [ViewController::class,'getData']);

Route::match(['get','post'], '/create',[CreateController::class,'create'])->name('create');
                                      
Route::resource('/todos',CreateController::class);





