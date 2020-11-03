<?php

// App::setlocale('es');

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('projects', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

//Las 7 rutas rest de la aplicación
// Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');
// Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');
//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
// Route::get('portfolio', 'PortfolioController')->name('portfolio');
/*Route::apiResource('proyectos', 'PortFolioController3');
Route::get('portfolio3', 'PortfolioController3@index')->name('portfolio3');
Route::resource('projects', 'PortFolioController2')->except(['index', 'show']);*/
// Route::resource('projects', 'PortFolioController2')->only(['index', 'show']);



	// Route::get('/', function(){
	// 	$nombre = "Kevin";

	// 	//return view('home')->with('nombre', $nombre);
	// 	//return view('home')->with(['nombre' => $nombre]);
	// 	//return view('home', ['nombre' => $nombre]);
	// 	return view('home', compact('nombre'));

	// })->name('home');


Auth::routes();

// Auth::routes(['register' => false]);


