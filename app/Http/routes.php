<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', function () {
    return view('welcome');
});

Route::get('start', function () {
    return view('layout.start');
});




	Route::get('/',function()
	{
    return view('welcome');
	});

	Route::get('/produtos','ProdutoController@lista');
	
	Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id','[0-9]+');

	Route::get('/produtos/novo','ProdutoController@novo');

	Route::post('/produtos/adiciona','ProdutoController@adiciona');

	Route::get('/produtos/json','ProdutoController@listaJson');

	Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

	Route::get('/produtos/editar/{id}','ProdutoController@editar');

	Route::post('/produtos/alterar/{id}','ProdutoController@alterar');

	Route::get('/login', 'LoginController@login');

	Route::post('/login/auth','LoginController@auth');

	Route::get('/registro' , 'LoginController@registro');
	
	Route::get('login/register' , 'LoginController@register');

	Route::get('/admin/perfil', 'ProfileController@perfil');


	Route::controllers([
			'auth' => 'Auth\AuthController',
			'password' => 'Auth\PasswordController',
		]);



	Route::get('products','ProductController@lista');
	
	Route::get('/products/mostra/{id}','ProductController@mostra')->where('id','[0-9]+');

	Route::get('/products/novo','ProductController@novo');

	Route::post('/products/adiciona','ProductController@adiciona');

	Route::get('/products/json','ProductController@listaJson');

	Route::get('/products/remove/{id}', 'ProductController@remove');

	Route::get('/products/editar/{id}','ProductController@editar');

	Route::post('/products/alterar/{id}','ProductController@alterar');