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

// Authentication routes...
Auth::routes();
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login-post');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');
// Registration routes...
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('registation-post');
Route::get('/clear', 'HomeController@clear')->name('clear');


//admin
Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']],function()
{

    Route::get('/create-visa-category', 'HomeController@createVisaCategory')->name('createVisaCategory');
    Route::post('/post-visa-category', 'HomeController@postVisaCategory')->name('postVisaCategory');
    Route::get('/visa-categories', 'HomeController@visaCategories')->name('visaCategories');
    Route::get('/edit-category/{id}', 'HomeController@editCategory')->name('editCategory');
    Route::get('/delete-category/{id}', 'HomeController@deleteCategorie')->name('deleteCategorie');
    Route::get('/update-category/{id}', 'HomeController@updateCategory')->name('updateCategory');


});


//agent
Route::group(['as'=>'agent.','prefix'=>'agent','middleware'=>['auth','agent']],function()
{
    Route::get('/view-visa/{id}', 'HomeController@agentviewVisa')->name('viewVisa');
    Route::get('/post-visa', 'HomeController@createVisa')->name('createVisa');
    Route::get('/posted-visa', 'HomeController@postVisa')->name('postVisa');
    Route::get('/edit-visa/{id}', 'HomeController@editVisa')->name('editVisa');
    Route::get('/delete-visa/{id}', 'HomeController@deleteVisa')->name('deleteVisa');
    Route::get('/update-visa/{id}', 'HomeController@updateVisa')->name('updateVisa');
});


//candidate
Route::group(['as'=>'agent.','prefix'=>'agent','middleware'=>['auth','agent']],function()
{

});

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
Route::get('/candidate-resume-details/{id}', 'HomeController@candidateResumeDetails')->name('candidateResumeDetails');
Route::get('/visa-details/{id}', 'HomeController@visaDetails')->name('visaDetails');
Route::get('/visa-agents', 'HomeController@visaAgents')->name('visaAgents');
Route::get('/visa-agent/{id}', 'HomeController@visaAgent')->name('visaAgent');
Route::get('/category/{id}/visa', 'HomeController@categoryVisa')->name('categoryVisa');



Route::get('/control', 'HomeController@control')->name('control');














