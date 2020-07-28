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
Route::get('/oussa', function () {
    return view('index');
});
Route::get('pp', function () {
    return view('temp.index');
});
Route::get('admin','UserController@admin');


//Admin Routes
Route::get('users','AdminController@showUsers');
Route::get('users/ajouter','AdminController@getUserAjouter');
//Route::put('users/{id}','AdminController@ajouterUser');
Route::post('users','AdminController@ajouterUser');
Route::get('users/{id}','AdminController@ConsulterUser');
Route::delete('users/{id}','AdminController@supprimerUser');
Route::get('users/{id}/modifier','AdminController@ModifierUser');
Route::put('users/{id}','AdminController@updateUser');

///////////////////
//Redacteur En Chef
Route::get('reclamation/{id}/create','RedacteurController@ajouterReclamation');
Route::post('articlsredacteur/{id}','RedacteurController@ajouterReclamationStore');
Route::get('articlsredacteur','RedacteurController@ShowArticls');
Route::get('articlsredacteur/{id}','RedacteurController@accepte');
Route::delete('articlsredacteur/{id}','ArticlController@supprimerArticle');
Route::get('reclamation/redacteur','JounalisteController@showReclamationsRedacteur');
Route::delete('reclamation/redacteur/{id}','RedacteurController@supprimerReclamation');
Route::get('actualites','JounalisteController@consulterActu');
///////////
//Chef Production
Route::get('taches','ChefProdController@ShowTaches');
Route::get('taches/{id}/create','ChefProdController@ajoutertache');
Route::post('taches/{id}','ChefProdController@ajoutertacheStore');
Route::delete('taches/{id}','ChefProdController@supprimerTache');
Route::get('articls/taches','ChefProdController@ShowArticls');
//articls/'.$articl->id
Route::get('taches/{id}/modifier','ChefProdController@ModifierTache');
Route::put('taches/{id}','ChefProdController@updateTache');


Route::get('articls/taches/{id}','ChefProdController@envoyerToRedact');

//Memrbre Prod
Route::get('prod/taches','MembProdController@ShowTaches');
  Route::get('file/download/{id}','MembProdController@download')->name('downloadfile');
Route::put('taches/{id}','MembProdController@upload');
//Article Routes
Route::get('articls','ArticlController@ShowArticls');
Route::get('articls/create','ArticlController@ajouterArticle');
Route::post('articls','ArticlController@ajouterArticleStore');
Route::get('articls/{id}','ArticlController@ConsulterArticle');
Route::get('articls/{id}/modifier','ArticlController@ModifierArticle');
Route::put('articls/{id}','ArticlController@updateArticle');
Route::delete('articls/{id}','ArticlController@supprimerArticle');

//journaliste
Route::get('journaliste/{id}','JounalisteController@Jounaliste');
Route::get('reclamation','JounalisteController@showReclamations');
Route::get('journaliste/{id}/profile','JounalisteController@gestionProfil');
Route::get('journaliste/{id}/modifierr','JounalisteController@ModifierUser');
Route::put('journaliste/{id}','JounalisteController@updateUser');
Route::get('journaliste/{id}/modifier','JounalisteController@modifiArticlByReclam');
Route::put('journaliste/{id}','JounalisteController@updateArticlByReclam');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
