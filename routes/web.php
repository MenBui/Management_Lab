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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


// Route::get('/homeuser', function () {
//     return view('homeuser');
// });

Route::get('/reset_passwordd', function () {
    return view('auth/passwords/reset');
});

//

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@getLogin']);
Route::post('postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);

Route::get('register',['as'=>'register','uses'=>'Auth\RegisterController@getRegister']);
Route::post('register',['as'=>'register','uses'=>'Auth\RegisterController@postRegister']);


Route::get('logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);


Route::group(['prefix'=>'auth','middleware'=>'auth'],function(){

	// Route::get('index',['as'=>'authIndex','uses'=>'AdminController@index']);
});
