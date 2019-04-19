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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'FilmController@getFilm');
Route::get('/genre', 'GenreController@getGenre');

// Route::get('/search', 'SearchController@index');
// Route::post('/search/fetch',
// 'SearchController@fetch')->name('search.fetch');
// Route::get('/', 'HomeController@index');

//Route::get('film', 'FilmController@getFilm');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
