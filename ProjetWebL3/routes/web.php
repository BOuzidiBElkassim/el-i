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

Auth::routes();

Route::get('/eventpage', 'EventpageController@index' );

Route::get('/register',function() {
    return view('auth.register');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search/results', 'SearchController@search')->name('search.search'); 

<<<<<<< HEAD
=======
/* Route::post('/profile/store','ProfileController@store')->name('profile.store'); 
 */
>>>>>>> c3047d4ef2d710fc9e7813de84b075f38e611d3f
Route::resource('/search','SearchController');

Route::resource('/events','EventpageController');

Route::resource('/profile','ProfileController');