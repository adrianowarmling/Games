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
    return view('inicial');
});

Route::get('/inicial', 'GamesController@loadInicial');

Route::get('/inicial/ConsultaGames', 'GamesController@loadConsultarGames');
Route::get('/inicial/CadastroGames', 'GamesController@loadCadastrarGames');
Route::get('/inicial/AlteraGames/{id}', 'GamesController@loadAlteraGames');

Route::get('/inicial/ConsultaGeneros', 'GenerosController@loadConsultarGeneros');
Route::get('/inicial/CadastroGeneros', 'GenerosController@loadCadastrarGeneros');
Route::get('/inicial/AlteraGeneros/{id}', 'GenerosController@loadAlteraGeneros');

Route::get('/inicial/ConsultaDesenvolvedora', 'DesenvolvedoraController@loadConsultarDesenvolvedora');
Route::get('/inicial/CadastroDesenvolvedora', 'DesenvolvedoraController@loadCadastrarDesenvolvedora');
Route::get('/inicial/AlteraDesenvolvedora/{id}', 'DesenvolvedoraController@loadAlteraDesenvolvedora');

Route::get('/inicial/ConsultaPlataforma', 'PlataformaController@loadConsultarPlataforma');
Route::get('/inicial/CadastroPlataforma', 'PlataformaController@loadCadastrarPlataforma');
Route::get('/inicial/AlteraPlataforma/{id}', 'PlataformaController@loadAlteraPlataforma');
