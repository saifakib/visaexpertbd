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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Authentication routes...
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login-post');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');
 
// Registration routes...
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('registation-post');

Route::get('/clear', 'HomeController@clear')->name('clear');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/how-to-start-agent', 'HomeController@agentStart')->name('agent-start');
Route::get('/how-to-start-candidate', 'HomeController@candidateStart')->name('candidate-start');
Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('/our-services', 'HomeController@ourServices')->name('our-services');
Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile-edit/{id}', 'HomeController@editProfile')->name('editProfile');
Route::get('/profile-update', 'HomeController@updateProfile')->name('updateProfile');





