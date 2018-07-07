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
//     return view('pages.index');
// });

// Route::get('/index', function () {
//     return view('pages.index');
// });

// Route::get('/login', function () {
//     return view('pages.login');
// });

// Route::get('/candidates', function () {
//     return view('pages.candidates');
// });

// Route::get('/companies', function () {
//     return view('pages.companies');
// });

// Route::get('/company_reg', function () {
//     return view('pages.company_reg');
// });



#Route::resource('Register', 'register');

Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/candidate_reg', 'PagesController@candidate_reg');
Route::get('/company_reg', 'PagesController@company_reg');
Route::get('/login', 'PagesController@login');
Route::get('/candidates', 'PagesController@candidates');
Route::get('/companies', 'PagesController@companies');

Route::resource('companies', 'CompaniesController');
Route::resource('candidates', 'CandidatesController');
Auth::routes();
Route::get('/navbar', function () {
    return view('layouts.newapp');
});


// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/calendar', 'KumbushaController@get_calendar');