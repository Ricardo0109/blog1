<?php

Route::get('/', 'PostController@welcome');

Route::get('/about', 'PostController@about');

Route::get('/posts',[
	'uses' => 'PostController@index', 
 	'as' => 'posts.index'
 ]);

Route::get('/posts/{post}', 'PostController@show');

//CRUD de User

 Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

 	Route::resource('users', 'UserController', ['except' => ['destroy']]);

 	Route::get('users/{user}/destroy', [
 		'uses' => 'UserController@destroy', 
 		'as' => 'users.destroy'
 	]);

 	/*Route::put('users/{user}/update', [
		'uses' => 'UserController@edit', 
 		'as' => 'users.update'
 	]); */

 	Route::resource('category', 'CategoryController',['except' =>['destroy']]);
 	Route::get('category/{category}/destroy', [
 		'uses' => 'CategoryController@destroy', 
 		'as' => 'category.destroy'

 	 ]);

 });

//Rutas sin controlador
/*Route::get('/', function () {
	return view('welcome');
});

Route::get('about', function () {
	return view('about_us');
});

Route::get('/prueba', function () {
//	$tests = DB::table('pruebas')->get();
	$tests = Prueba::all(); 
	return view('pruebas.index', compact('tests'));
});

Route::get('/prueba/{id}', function ($id) {
	$test = Prueba::find($id);
	return view('pruebas.show', compact('test'));
}); */