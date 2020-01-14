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

Route::get('/create-visa-category', 'HomeController@createVisaCategory')->name('createVisaCategory');
Route::post('/post-visa-category', 'HomeController@postVisaCategory')->name('postVisaCategory');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/how-to-start-agent', 'HomeController@agentStart')->name('agent-start');
Route::get('/how-to-start-candidate', 'HomeController@candidateStart')->name('candidate-start');
Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('/our-services', 'HomeController@ourServices')->name('our-services');
Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile-edit/{id}', 'HomeController@editProfile')->name('editProfile');
Route::get('/profile-update', 'HomeController@updateProfile')->name('updateProfile');
Route::get('/visa-category', 'HomeController@visaCategory')->name('visacategory');
Route::get('/view-visa-offers', 'HomeController@viewVisaOffers')->name('viewvisaoffers');
Route::get('/candidate-resumes', 'HomeController@candidateResumes')->name('candidateResumes');
Route::get('/visa-details/{id}', 'HomeController@visaDetails')->name('visaDetails');





//agent
Route::get('/agent/post-visa', 'HomeController@createVisa')->name('createVisa');
Route::get('/agent/posted-visa', 'HomeController@postVisa')->name('postVisa');




//admin

Route::get('/admin/visa-categories', 'HomeController@visaCategories')->name('visaCategories');
Route::get('/admin/delete-category/{id}', 'HomeController@deleteCategorie')->name('deleteCategorie');
Route::get('/admin/edit-category/{id}', 'HomeController@editCategory')->name('editCategory');
Route::get('/admin/update-category/{id}', 'HomeController@updateCategory')->name('updateCategory');








