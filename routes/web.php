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


// Route::get('/listLab', function () {
//     return view('labs.listLab');
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

//Lab
Route::get('listLab',['as'=>'listLab','uses'=>'HomeController@listLab']);
Route::get('addLab',['as'=>'addLab','uses'=>'HomeController@addLab']);
Route::post('postAddLab',['as'=>'postAddLab','uses'=>'HomeController@postAddLab']);
Route::get('deleteLab',['as'=>'deleteLab','uses'=>'HomeController@deleteLab']);
Route::get('editLab',['as'=>'editLab','uses'=>'HomeController@editLab']);


//User
Route::get('listUser',['as'=>'listUser','uses'=>'HomeController@listUser']);
Route::get('addUser',['as'=>'addUser','uses'=>'HomeController@addUser']);
Route::post('postAddUser',['as'=>'postAddUser','uses'=>'HomeController@postAddUser']);
Route::get('deleteUser',['as'=>'deleteUser','uses'=>'HomeController@deleteUser']);
Route::get('editUser',['as'=>'editUser','uses'=>'HomeController@editUser']);