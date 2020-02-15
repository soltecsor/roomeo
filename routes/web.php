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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile', 'UserController@update_avatar');

    Route::get('/listar_usuarios', 'UserController@listar_usuarios');
    Route::post('criar_usuario', 'UserController@criar_usuario');
    Route::post('editar_usuario', 'UserController@editar_usuario');
    Route::post('buscar_usuario', 'UserController@buscar_usuario');
    Route::post('apagar_usuario', 'UserController@apagar_usuario');
    Route::post('editar_acesso', 'UserController@editar_acesso');

    Route::post('criar_rol', 'UserController@criar_rol');
    Route::post('criar_permissao', 'UserController@criar_permissao');
    Route::post('agregar_permiso', 'UserController@agregar_permiso');
    Route::get('apagar_permiso/{idrol}/{idper}', 'UserController@apagar_permiso');

    Route::get('form_novo_usuario', 'UserController@form_novo_usuario');
    Route::get('form_novo_role', 'UserController@form_novo_role');
    Route::get('form_novo_permissao', 'UserController@form_novo_permissao');
    Route::get('form_editar_usuario/{id}', 'UserController@form_editar_usuario');
    Route::post('confirmacao_apagar_usuario/{idusuario}', 'UserController@confirmacao_apagar_usuario');
    Route::get('agregar_rol/{idusu}', 'UserController@agregar_rol');
    Route::get('apagar_rol/{idusu}', 'UserController@apagar_rol');
    Route::get('form_excluir_usuario/{idusu}', 'UserController@form_excluir_usuario');
    Route::post('excluir_rol', 'UserController@excluir_rol');


    //Edit Portal
    Route::get('homeportal_edit/{id}', 'PortalController@home_edit');
    Route::post('edit_banner', 'PortalController@edit_banner');
    Route::post('edit_service', 'PortalController@edit_service');
    Route::post('edit_about', 'PortalController@edit_about');
    Route::get('feedbacks', 'PortalController@feedbacks');
    Route::post('edit_feedback', 'PortalController@edit_feedback');
    Route::post('created_feedback', 'PortalController@created_feedback');
    Route::get('edit_instutional/{id}', 'InstitutionalController@edit_instutional');
    Route::get('edit_terms/{id}', 'PortalController@terms_edit');
    Route::post('edit_term', 'PortalController@edit_term');
    Route::post('edit_institution', 'InstitutionalController@edit_institution');
    Route::post('edit_team', 'InstitutionalController@edit_team');
    Route::get('contacts_edit/{id}', 'ContactController@contacts_edit');
    Route::post('edit_contacts', 'ContactController@edit_contact');
    Route::get('reasons', 'LandlordController@reasons');
    Route::post('edit_reason', 'LandlordController@edit_reason');
    Route::post('created_reason', 'LandlordController@created_reason');
    Route::post('delete_reason/{id}', 'LandlordController@reasons_destroy');

    Route::get('prices', 'LandlordController@prices');
    Route::post('edit_price', 'LandlordController@edit_price');
    Route::post('created_price', 'LandlordController@created_price');
    Route::post('delete_price/{id}', 'LandlordController@prices_destroy');

    Route::get('processes', 'LandlordController@processes');
    Route::post('edit_process', 'LandlordController@edit_process');
    Route::post('created_process', 'LandlordController@created_process');
    Route::post('delete_process/{id}', 'LandlordController@process_destroy');
    Route::post('edit_profile', 'UserController@edit_profile');
    Route::post('logoff', 'UserController@logoff');

});

Route::get('/', 'PortalController@index');

Route::get('/room-search', function () {
    return view('portal.room-search');
});
Route::get('/about', 'InstitutionalController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/blog-details', function () {
    return view('portal.blog-details');
});

Route::get('/terms', 'PortalController@index_terms');

Route::get('room-details/{id}', 'UnitController@getId');

Route::get('/landlord', 'LandlordController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
