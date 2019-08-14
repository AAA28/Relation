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

Route::get('acceuil','PharmacieController@index')->name('acceuil');


//les pharmacies de garde
Route::get('/pharmacies/garde','PharmacieController@showliste')->name('showliste');
//les pharmacies par localiste
Route::get('/pharmacies/garde/{id}','PharmacieController@show')->name('show');
//pour une pharmacie
Route::get('/pharmacies/garde/{id}/{nom}','PharmacieController@showone')->name('showone');

//insert pharma
Route::get('/pharmacies/insert','PharmacieController@showform')->name('showform');
Route::post('/pharmacies/insert','PharmacieController@storeform')->name('storeform');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Entreprise creation
Route::get('/Entreprises/create','EntrepriseController@showform')->name('showform');
Route::post('/Entreprises/create','EntrepriseController@storeform')->name('storeform');
//listes des entreprises
Route::get('/Entreprises/listes','EntrepriseController@showlistes')->name('showlistes');


//Thematiques
Route::get('Thematiques/listes','ThematiqueController@listes')->name('listesthematiques');
//les entreprises par thematiques
Route::get('Thematiques/{nom}/{id}','ThematiqueController@show')->name('show');

