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

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();
Route::get('/home/{user}', 'HomeController@homeUser')->name('home.show');

Auth::routes();

//Route::get('/{user}', 'HomeController@app')->name('app.show');

Route::get('welcome/{user}', 'HomeController@welcome')->name('welcome.show');

Auth::routes();

//Route::get('/home/{user}', 'HomeController@homeUser')->name('home.show');



Route::get('/activitylog', 'ActivitylogController@index')->name('activitylog.index');



Route::get('/profiles/{user}', 'ProfileController@profile')->name('profile.show');

Route::get('/form/{user}', 'FormController@userform')->name('form.show');
