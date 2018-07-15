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
use \App\Color;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');

    Route::get('/', 'ContactsController@index'); //Listar Contatos
    Route::get('/contacts', 'ContactsController@index'); //Listar Contatos
    Route::get('/contact', 'ContactsController@create'); //Formulario Adicionar
    Route::get('/contact/edit/{id}', 'ContactsController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/contact/store', 'ContactsController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/contact/update/{id}', 'ContactsController@update'); //Editar Contato
    Route::get('/contact/delete/{id}', 'ContactsController@destroy'); //Deletar Contato
    Route::get('/contact/{id}', 'ContactsController@show'); //Mostar Contato
});
