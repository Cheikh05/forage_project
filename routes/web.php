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
    return view('layout.default');
});


Route::get('/dashbord', function () {
    return view("layout.default");
});


/* La route pour la gestion des Utilisateurs doivent etre préceder par le prfixe user */
Route::prefix('user')->group(function () {
    Route::get('/client', function () {
        return view("layout.form_user", ['client' => 'Client']);
    });
    Route::get('/gestionnaire', function () {
        return view("layout.form_user", ['client' => 'Gestionnaire']);
    });
    Route::get('/comptable', function () {
        return view("layout.form_user", ['client' => 'Comptable']);
    });
    Route::get('/controlleur', function () {
        return view("layout.form_user", ['client' => 'Controlleur']);
    });
    Route::get('/gestionnaires', function () {
        return view("layout.gestionnaire.gestionnaires");
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/villages', 'VillageController@index')->name('villages');

Route::get('/clients/list', 'ClientsController@list')->name('clients.list');

Route::resource('villages', 'VillageController');
Route::resource('clients', 'ClientsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
