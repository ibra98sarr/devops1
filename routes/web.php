<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\CompteurController;
use App\Http\Controllers\ConsommationController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ReglementController;

Route::resource('clients', ClientController::class);
Route::resource('villages', VillageController::class);
Route::resource('abonnements', AbonnementController::class);
Route::resource('compteurs', CompteurController::class);
Route::resource('consommations', ConsommationController::class);
Route::resource('factures', FactureController::class);
Route::resource('reglements', ReglementController::class);
Route::get('/clients', [ClientController::class, 'index']);

Route::get('/view', function () {
    return view('view'); // Affiche la vue view.blade.php



  

Route::get('/user/create', function () {
    return '
        <form method="POST" action="/user/create">
            ' . csrf_field() . '
            Nom de l\'utilisateur :
            <input type="text" name="name">
            <button type="submit">Ajouter l\'utilisateur</button>
        </form>
    ';
});

Route::post('/user/create', function (\Illuminate\Http\Request $request) {
    $name = $request->input('name'); // Récupération de la valeur saisie
    $response = '
        <h1>Ajout Utilisateur</h1>
    ';
    $response .= '
        <p>Utilisateur "' . htmlspecialchars($name) . '" ajouté avec succès</p>
    ';
    return $response;
});

Route::get('/saluer/{nom}', function ($nom) {
    $reponse = 'Bonjour ' . $nom;
    return $reponse;
});

Route::get('/users/{id}', function ($id) {
    $reponse = 'Utilisateur N°' . $id;
    return $reponse;
})->where('id', '[0-9]+');






Route::get('/user/create', function () {
    return '
    <form method="POST" action="/user/create">
        ' . csrf_field() . '
        Nom de l\'utilisateur : <input type="text" name="name">
        <button type="submit">Ajouter l\'utilisateur</button>
    </form>
    ';
});

Route::post('/user/create', function (Request $request) {
    $name = $request->input('name'); // Récupération de la valeur saisie
    $response = 'Ajout Utilisateur';
    $response .= '<p>Utilisateur "' . htmlspecialchars($name) . '" ajouté avec succès</p>';
    return $response;
});

Route::get('/saluer/{nom}', function ($nom) {
    return 'Bonjour ' . $nom;
});

Route::get('/users/{id}', function ($id) {
    return 'Utilisateur N°' . $id;
})->where('id', '[0-9]+');


});






Route::get('/', function () {
    return view('welcome');
});
