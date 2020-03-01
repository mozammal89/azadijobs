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
    return view('FrontEnd.home');
});


// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test',function(){

	dd(Auth::user()->role_id);

})->middleware(['auth','admin']);



/*Admin Route Start Here*/
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin' ,'middleware'=>['auth','admin'] ],function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::get('division','DivisionController@division')->name('division');
Route::post('division/store','DivisionController@store')->name('division.store');
Route::put('division/update/{id}','DivisionController@update')->name('division.update');
Route::delete('division/delete/{id}','DivisionController@delete')->name('division.delete');

Route::get('jobcategory','jobCategoryController@jobcategory')->name('jobcategory');
Route::post('jobcategory/store','jobCategoryController@store')->name('jobcategory.store');
Route::put('jobcategory/update/{id}','jobCategoryController@update')->name('jobcategory.update');
Route::delete('jobcategory/delete/{id}','jobCategoryController@delete')->name('jobcategory.delete');

Route::get('subcategory','subCategoryController@create')->name('subcategory');
Route::post('subcategory','subCategoryController@store')->name('subcategory.store');
Route::put('subcategory/update/{id}','subCategoryController@update')->name('subcategory.update');
Route::delete('subcategory/delete/{id}','subCategoryController@delete')->name('subcategory.delete');


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


// Facebook Route Start Here
Route::get('/auth/redirect/{provider}', 'AuthController@redirect');
Route::get('/callback/{provider}', 'AuthController@callback');
// Facebook Route Ends Here


// Job Seeker Register Start Here
Route::get('jobseeker/register','JobSeeker\JobSeekerController@register')->name('registration.jobseeker');
Route::post('jobseeker/store','JobSeeker\JobSeekerController@store')->name('store.jobseeker');
Route::get('jobseeker/profile','JobSeeker\JobSeekerProfileTab@profile')->name('profile.jobseeker');
// Job Seeker Register End Here


// Job Provider Register Start Here
Route::get('jobprovider/register','JobProvider\JobProviderController@register')->name('register.jobprovider');
Route::post('register/store','JobProvider\JobProviderController@store')->name('store.jobprovider');

Route::get('jobprovider/profile','JobProvider\JobProviderProfileTab@profile')->name('profile.jobprovider');
// Job Provider Register End Here


/*Custome Login Route Start here*/
Route::post('custom/login','UserLoginCheck@authenticate')->name('user.login');

/*Custome Login Route End here*/