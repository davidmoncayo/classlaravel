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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Login_cpm', function () {
   return view('Login_cpm');
});

Route::get('Login_cpm', function () {
   return view('Login_cpm');
});

Route::get('bridged', function () {
   return view('bridged');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'productsController');

Route::resource('communication', 'communicationController');


Route::get('/publicacion/{id}', 'communicationController@consulta');
//Route::resource('home', 'productsController@view');



?>

