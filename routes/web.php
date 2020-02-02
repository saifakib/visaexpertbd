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
    Route::get('/agents', 'HomeController@agents')->name('agents');
    Route::get('/delete-agent/{id}', 'HomeController@deleteAgent')->name('deleteAgent');
    Route::get('/candidates', 'HomeController@candidates')->name('candidates');
    Route::get('/delete-candidate/{id}', 'HomeController@deleteCandidate')->name('deleteCandidate');

    Route::get('/view-visa', 'HomeController@adminviewVisa')->name('viewVisa');
    Route::get('/post-visa', 'HomeController@createVisa')->name('createVisa');
    Route::get('/posted-visa', 'HomeController@postVisa')->name('postVisa');
    Route::get('/edit-visa/{id}', 'HomeController@editVisa')->name('editVisa');
    Route::get('/delete-visa/{id}', 'HomeController@deleteVisa')->name('deleteVisa');
    Route::get('/update-visa/{id}', 'HomeController@updateVisa')->name('updateVisa');

});


//agent
Route::group(['as'=>'agent.','prefix'=>'agent','middleware'=>['auth','agent']],function()
{
    Route::get('/view-applicant/{id}', 'HomeController@viewApplicant')->name('viewApplicant');
    Route::get('/delete-applicant/{id}', 'HomeController@deleteApplicant')->name('deleteApplicant');
    Route::get('/view-visa/{id}', 'HomeController@agentviewVisa')->name('viewVisa');
    //Route::get('/post-visa', 'HomeController@createVisa')->name('createVisa');
    //Route::get('/posted-visa', 'HomeController@postVisa')->name('postVisa');
    //Route::get('/edit-visa/{id}', 'HomeController@editVisa')->name('editVisa');
    //Route::get('/delete-visa/{id}', 'HomeController@deleteVisa')->name('deleteVisa');
    //Route::get('/update-visa/{id}', 'HomeController@updateVisa')->name('updateVisa');
});


//candidate
Route::group(['as'=>'agent.','prefix'=>'agent','middleware'=>['auth','agent']],function()
{

});

Route::get('/', 'HomeController@index')->name('home');
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
Route::get('/agent-visas/{id}', 'HomeController@agentVisa')->name('agentVisa');
Route::get('/apply-visa/{idv}', 'HomeController@applyVisa')->name('applyVisa');
Route::get('/apply-visa-post/{id}', 'HomeController@applyVisaPost')->name('applyVisaPost');
Route::get('/sign-up-for-free-and-get-visa', 'HomeController@extraOne')->name('extraOne');
Route::get('/hire-us-for-your-visa', 'HomeController@extraTwo')->name('extraTwo');
Route::get('/purchase-tickets-package-tours', 'HomeController@extraThree')->name('extraThree');

Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');





Route::get('/control', 'HomeController@control')->name('control');














