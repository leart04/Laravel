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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('age');


// Route::get('/{age}', function($age)
//  {
//     return view('welcome');
// })->middleware('age');


// Route::group([], function()  
// {  
//     Route::get('/first',function()  
//     {  
//     echo "Page 1"; 
//     });  
//     Route::get('/second',function()  
//     {  
//     echo "Page 2";  
//     });  
//     Route::get('/third',function()  
//     {  
//     echo "Page 3";  
//     });  
// });  

// Route::group(['prefix' => 'shkolladigjitale'], function()  
// {
//     Route::get('/prizren',function()  
//     {  
//      echo "Shkolla Digjitale Prizren";
//     });
//     Route::get('/prishtine',function()  
//     {  
//      echo "Shkolla Digjitale Prishtine";
//     });
//     Route::get('/peja',function()  
//     {  
//      echo "Shkolla Digjitale Peje";
//     });
// });


Route::middleware(['age'])->group( function () 
{
    Route::get('/prizren/{age}',function()  
    {  
     echo "Shkolla Digjitale Prizren";
    });
    Route::get('/prishtine',function()  
    {  
     echo "Shkolla Digjitale Prishtine";
    });
    Route::get('/peja',function()  
    {  
     echo "Shkolla Digjitale Peje";
    });
});
