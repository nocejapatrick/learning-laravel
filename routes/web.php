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
// Route::group(['prefix'=>'v1'],function(){
// 	Route::resource('place','PlaceController');
// });

Route::group(['prefix' => 'v1'],function(){
	Route::get('/auth/login','UserController@loginPage');
	Route::post('/auth/login','UserController@login');
	Route::get('/admin/dashboard','UserController@dashboard');
	Route::get('/auth/logout','UserController@logout');
	
});
Route::get('/{fileDir}', function(){
		ob_start();
	    require(path("public").$fileDir);
	    return ob_get_clean();
	});

// Route::group(['prefix'=>'v1'],function(){
// 	Route::resource('place','PlacesController');
// });
// Route::get('/', function () {
//     return view('welcome');
//     // echo 'foo';
// });
?>