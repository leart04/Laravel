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


//CSRF Protection (Cross Site Request Forgery)
 
    // Route::get($uri, $callback);

    // Route::post($uri, $callback);

    // Route::put($uri, $callback);

    // Route::patch($uri, $callback);

    // Route::delete($uri, $callback);

    // Route::options($uri, $callback);
 

//Perdoret per te gjitha vlerat

Route::match(['get', 'post'], '/login', function () {  
    return view('login');
});  

// Route::any('/', function ()   
// {  
// // 
// }); 

Route::get('/', function()
{
    return "This is a home page";
}
);

Route::get('/about', function()
{

    return "This is a about page";
}
);

Route::get('/contact', function()
{
    return "This is a contact page";
}
);

Route::get('/post/{id}', function($id)
{
    return "id number is : $id";
}
);

Route::get('user/{name?}', function ($name=null)
{
    return $name;
});


Route::get('admin/{name?}', function ($name= 'Arianit')
{
    return $name;
});


Route::get('user/{name?}', function ($name=null)
{
    return $name;
})->where('name','[a-zA-ZëË]+');



Route::get('user1/{id?}', function ($id=null)
{
    return "id is : ". $id;
})->where('id','[0-9]+');


Route::get('user/{name}/{id}', function ($name=$id)
{
    return "Id is : ".$id ." , ". "Name is : ".$name ;
})->where(['id'=>'[0-9]','name'=>'[a-zA-Z]+']);





