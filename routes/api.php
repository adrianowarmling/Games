<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider  which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'games'], function () {
    Route::get('', 'GamesController@getGames');
    
    Route::get('{id}', 'GamesController@getGame');
    
    Route::post('', 'GamesController@addGames');
    
    Route::put('{id}', 'GamesController@alteraGames');
    
    Route::delete('{id}', 'GamesController@deletarGames');
});

Route::group(['prefix' => 'generos'], function () {

    Route::get('', 'GenerosController@getGeneros');

    Route::get('{id}', 'GenerosController@getGenero');

    Route::post('', 'GenerosController@addGeneros');

    Route::put('{id}', 'GenerosController@alteraGeneros');

    Route::delete('{id}', 'GenerosController@deletarGeneros');

});

Route::group(['prefix' => 'desenvolvedora'], function () {

    Route::get('', 'DesenvolvedoraController@getDesenvolvedora');

    Route::get('{id}', 'DesenvolvedoraController@getDesenvolvedora1');

    Route::post('', 'DesenvolvedoraController@addDesenvolvedora');

    Route::put('{id}', 'DesenvolvedoraController@alteraDesenvolvedora');

    Route::delete('{id}', 'DesenvolvedoraController@deletarDesenvolvedora');

});

Route::group(['prefix' => 'plataforma'], function () {

    Route::get('', 'PlataformaController@getPlataforma');

    Route::get('{id}', 'PlataformaController@getPlataforma1');

    Route::post('', 'PlataformaController@addPlataforma');

    Route::put('{id}', 'PlataformaController@alteraPlataforma');

    Route::delete('{id}', 'PlataformaController@deletarPlataforma');

});

