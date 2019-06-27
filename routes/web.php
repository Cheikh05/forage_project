<?php
use App\Village;
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
    $villages = Village::get()->load(['chef.user', 'commune.arrondissement.departement.region'])->take(4);
    return view('layout.default', compact('villages'));
});

Route::get('/dashbord', function () {
    $villages = Village::get()->load(['chef.user', 'commune.arrondissement.departement.region'])->take(4);
    return view('layout.default', compact('villages'));
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
        return view("layout.gestionnaire.index");
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/villages', 'VillageController@index')->name('villages');

/* Route::get('/clients/selectVillage', function () {
    $villages = Village::all()->load(['chef.user', 'commune.arrondissement.departement.region']);
    //->paginate(10);
    return view("layout.client.selectVillage", compact('villages'));
})->name('client.selectVillage'); */

/* Route::get('/clients/selectvillage', function () {
    return view('layout.client.selectVillage');
 })->name('clients.selectvillage');
 */

Route::get('/clients/list', 'ClientController@list')->name('clients.list');
Route::get('/gestionnaire/list', 'GestionnaireController@list')->name('gestionnaires.list');
Route::get('/agent/list', 'AgentController@list')->name('agents.list');
Route::get('/facture/list', 'AgentController@list')->name('factures.list');
Route::get('/compteur/list', 'CompteurController@list')->name('compteurs.list');
Route::get('/consommation/list', 'ConsommationController@list')->name('consommations.list');
Route::get('/clients/selecVillage', 'ClientController@select')->name('clients.seletVillage');
Route::get('/villages/list', 'VillageController@list')->name('villages.list');
Route::get('/compteur/list', 'CompteurController@list')->name('compteurs.list');
Route::resource('villages', 'VillageController');
Route::resource('clients', 'ClientController');
Route::resource('compteurs', 'CompteurController');
Route::resource('gestionnaires', 'GestionnaireController');
Route::resource('factures', 'FactureController');
Route::resource('agents', 'AgentController');
Route::resource('consommations', 'ConsommationController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/comptables/list', 'ComptableController@list')->name('comptables.list');
Route::resource('comptables', 'ComptableController');


Route::get('loginfor/{rolename?}', function ($rolename = null) {
    if (!isset($rolename)) {
        return view('auth.loginfor');
    } else {
        $role = App\Role::where('name', $rolename)->first();
        if ($role) {
            $user = $role->users()->first();
            Auth::login($user, true);
            return redirect()->route('home');
        }
    }
    return redirect()->route('login');
})->name('loginfor');
