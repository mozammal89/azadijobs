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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test',function(){

	dd(Auth::user()->role_id);

})->middleware(['auth','admin']);



/*Admin Route Start Here*/


Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin' ,'middleware'=>['auth','admin'] ],function(){


Route::get('dashboard','DashboardController@index')->name('dashboard');


});

/*Admin Route End Here*/




/*Provider Route Start Here*/

Route::group(['as'=>'provider.','prefix'=>'provider', 'namespace'=>'JobProvider' ,'middleware'=>['auth','jobprovider'] ],function(){


Route::get('dashboard','DashboardController@index')->name('dashboard');


});

/*Provider Route End Here*/






/*Job Seeker Route Start Here*/


Route::group(['as'=>'seeker.','prefix'=>'seeker', 'namespace'=>'JobSeeker' ,'middleware'=>['auth','jobseeker'] ],function(){


Route::get('dashboard','DashboardController@index')->name('dashboard');


});


/*Job Seeker Route End Here*/



