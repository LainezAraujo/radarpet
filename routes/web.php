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

Route::get('/galeria',function () {
    return view ('galeria');
})->name('galeria');

Route::get('/login',function (){
    return view('login');
})->name('login');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');

    //Rotas de Action
    Route::get('/listaction', 'ActionController@index'); //Listar Actions
    Route::get('/action', 'ActionController@index'); //Listar Actions
    Route::get('/action', 'ActionController@create'); //Formulario Adicionar
    Route::get('/action/edit/{id}', 'ActionController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/action/store', 'ActionController@store'); //Adicionar Action
    Route::match(array('GET', 'POST', 'PUT'), '/action/update/{id}', 'ActionController@update'); //Editar Action
    Route::get('/action/delete/{id}', 'ActionController@destroy'); //Deletar Action
    Route::get('/action/{id}', 'ActionController@show'); //Mostrar Action

    //Rotas de Specie
    Route::get('/listspecie', 'SpecieController@index'); //Listar Species
    Route::get('/specie', 'SpecieController@index'); //Listar Species
    Route::get('/specie', 'SpecieController@create'); //Formulario Adicionar
    Route::get('/specie/edit/{id}', 'SpecieController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/specie/store', 'SpecieController@store'); //Adicionar Specie
    Route::match(array('GET', 'POST', 'PUT'), '/specie/update/{id}', 'SpecieController@update'); //Editar Specie
    Route::get('/specie/delete/{id}', 'SpecieController@destroy'); //Deletar Specie
    Route::get('/specie/{id}', 'SpecieController@show'); //Mostrar Specie

    //Rotas de Image
    Route::get('/listimage', 'ImageController@index'); //Listar Images
    Route::get('/image', 'ImageController@index'); //Listar Images
    Route::get('/image', 'ImageController@create'); //Formulario Adicionar
    Route::get('/image/edit/{id}', 'ImageController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/image/store', 'ImageController@store'); //Adicionar Image
    Route::match(array('GET', 'POST', 'PUT'), '/image/update/{id}', 'ImageController@update'); //Editar Image
    Route::get('/image/delete/{id}', 'ImageController@destroy'); //Deletar Image
    Route::get('/image/{id}', 'ImageController@show'); //Mostrar Image

    //Rotas de Breed
    Route::get('/listbreed', 'BreedController@index'); //Listar Breeds
    Route::get('/breed', 'BreedController@index'); //Listar Breeds
    Route::get('/breed', 'BreedController@create'); //Formulario Adicionar
    Route::get('/breed/edit/{id}', 'BreedController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/breed/store', 'BreedController@store'); //Adicionar Breed
    Route::match(array('GET', 'POST', 'PUT'), '/breed/update/{id}', 'BreedController@update'); //Editar Breed
    Route::get('/breed/delete/{id}', 'BreedController@destroy'); //Deletar Breed
    Route::get('/breed/{id}', 'BreedController@show'); //Mostrar Breed

    //Rotas de Location
    Route::get('/listlocation', 'LocationController@index'); //Listar Locations
    Route::get('/location', 'LocationController@index'); //Listar Locations
    Route::get('/location', 'LocationController@create'); //Formulario Adicionar
    Route::get('/location/edit/{id}', 'LocationController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/location/store', 'LocationController@store'); //Adicionar Location
    Route::match(array('GET', 'POST', 'PUT'), '/location/update/{id}', 'LocationController@update'); //Editar Location
    Route::get('/location/delete/{id}', 'LocationController@destroy'); //Deletar Location
    Route::get('/location/{id}', 'LocationController@show'); //Mostrar Location

    //Rotas de Coat
    Route::get('/listcoat', 'CoatController@index'); //Listar Coats
    Route::get('/coat', 'CoatController@index'); //Listar Coats
    Route::get('/coat', 'CoatController@create'); //Formulario Adicionar
    Route::get('/coat/edit/{id}', 'CoatController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/coat/store', 'CoatController@store'); //Adicionar Coat
    Route::match(array('GET', 'POST', 'PUT'), '/coat/update/{id}', 'CoatController@update'); //Editar Coat
    Route::get('/coat/delete/{id}', 'CoatController@destroy'); //Deletar Coat
    Route::get('/coat/{id}', 'CoatController@show'); //Mostrar Coat


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
    Route::get('/listprofilephoto', 'ProfilePhotoController@index'); //Listar Contatos
    Route::get('/profilephotos', 'ProfilePhotoController@index'); //Listar Contatos
    Route::get('/profilephoto', 'ProfilePhotoController@create'); //Formulario Adicionar
    Route::get('/profilephoto/edit/{id}', 'ProfilePhotoController@edit'); //Formulario Editar
    Route::match(array('GET', 'POST', 'PUT'), '/profilephoto/store', 'ProfilePhotoController@store'); //Adicionar Contato
    Route::match(array('GET', 'POST', 'PUT'), '/profilephoto/update/{id}', 'ProfilePhotoController@update'); //Editar Contato
    Route::get('/profilephoto/delete/{id}', 'ProfilePhotoController@destroy'); //Deletar Contato
    Route::get('/profilephoto/{id}', 'ProfilePhotoController@show'); //Mostar Contato

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
