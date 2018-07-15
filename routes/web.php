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
    /*
    Route::get('/', 'ContactsController@index'); //Listar Contatos
    Route::get('/contacts', 'ContactsController@index'); //Listar Contatos
    Route::get('/contact', 'ContactsController@create'); //Formulario Adicionar
    Route::get('/contact/edit/{id}', 'ContactsController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/contact/store', 'ContactsController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/contact/update/{id}', 'ContactsController@update'); //Editar Contato
    Route::get('/contact/delete/{id}', 'ContactsController@destroy'); //Deletar Contato
    Route::get('/contact/{id}', 'ContactsController@show'); //Mostar Contato
    */

    //Rotas de **COR**
    Route::get('/listcolor', 'ColorController@index'); //Listar Contatos
    Route::get('/colors', 'ColorController@index'); //Listar Contatos
    Route::get('/color', 'ColorController@create'); //Formulario Adicionar
    Route::get('/color/edit/{id}', 'ColorController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/color/store', 'ColorController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/color/update/{id}', 'ColorController@update'); //Editar Contato
    Route::get('/color/delete/{id}', 'ColorController@destroy'); //Deletar Contato
    Route::get('/color/{id}', 'ColorController@show'); //Mostar Contato

    //Rotas de **Situation**
    Route::get('/listsituation','SituationController@index'); //Listar Contatos
    Route::get('/situations', 'SituationController@index'); //Listar Contatos
    Route::get('/situation', 'SituationController@create'); //Formulario Adicionar
    Route::get('/situation/edit/{id}', 'SituationController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/situation/store', 'SituationController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/situation/update/{id}', 'SituationController@update'); //Editar Contato
    Route::get('/situation/delete/{id}', 'SituationController@destroy'); //Deletar Contato
    Route::get('/situation/{id}', 'SituationController@show'); //Mostar Contato

    //Rotas de **Profile_Photos**
    Route::get('/listprofilephoto', 'ProfilephotoController@index'); //Listar Contatos
    Route::get('/profilephotos', 'ProfilephotoController@index'); //Listar Contatos
    Route::get('/profilephoto', 'ProfilephotoController@create'); //Formulario Adicionar
    Route::get('/profilephoto/edit/{id}', 'ProfilephotoController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/profilephoto/store', 'ProfilephotoController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/profilephoto/update/{id}', 'ProfilephotoController@update'); //Editar Contato
    Route::get('/profilephoto/delete/{id}', 'ProfilephotoController@destroy'); //Deletar Contato
    Route::get('/profilephoto/{id}', 'ProfilephotoController@show'); //Mostar Contato

    //Rotas de **Animals**
    Route::get('/listanimal', 'AnimalController@index'); //Listar Contatos
    Route::get('/animals', 'AnimalController@index'); //Listar Contatos
    Route::get('/animal', 'AnimalController@create'); //Formulario Adicionar
    Route::get('/animal/edit/{id}', 'AnimalController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/animal/store', 'AnimalController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/animal/update/{id}', 'AnimalController@update'); //Editar Contato
    Route::get('/animal/delete/{id}', 'AnimalController@destroy'); //Deletar Contato
    Route::get('/animal/{id}', 'AnimalController@show'); //Mostar Contato

    //Rotas de **Users**
    Route::get('/listuser', 'UserController@index'); //Listar Contatos
    Route::get('/users', 'UserController@index'); //Listar Contatos
    Route::get('/user', 'UserController@create'); //Formulario Adicionar
    Route::get('/user/edit/{id}', 'UserController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/user/store', 'UserController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/user/update/{id}', 'UserController@update'); //Editar Contato
    Route::get('/user/delete/{id}', 'ProfilephotoController@destroy'); //Deletar Contato
    Route::get('/user/{id}', 'UserController@show'); //Mostar Contato


});
