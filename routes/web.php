<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'test', 'middleware' => ['web','auth'], 'namespace' => 'test'], function (){
    Route::post('/participantes', 'ParticipanteController@store')->name('participantes.store');
    Route::get('/test/{test}', 'TestController@create')->name('test.create');
    Route::post('/test', 'TestController@store')->name('test.store');

    
    /*
    Route::get('/participantes', 'ParticipantesController@list')->name('participantes.index');

    Route::get('/preguntas', 'PreguntasController@list')->name('preguntas.index');
    Route::get('/preguntas/{pregunta}', 'PreguntasController@show')->name('preguntas.show');
    Route::get('/preguntas/edit/{pregunta}', 'PreguntasController@edit')->name('preguntas.edit');
    Route::get('/preguntas/update/{pregunta}', 'PreguntasController@update')->name('preguntas.update');
    */
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
