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

	// dd(Auth::user()->role_id);

})->middleware(['auth','admin']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



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
// Job Post Routes Start
Route::get('jpsetting','JobPostController@index')->name('jpsetting');
Route::get('jpPost','JobPostController@jobPostIndex')->name('jpPost');
Route::get('jpPost/Create','JobPostController@jobPostCreate')->name('jpPostCreate');

Route::post('jpPost/store','JobPostController@jobPostStore')->name('jpPostStore');
// Job Post Routes End
});
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'JobProvider\JobPostController@myformAjax'));
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
// Job Seeker Register End Here



//Job Seeker Profile Start Here
Route::get('jobseeker/profile','JobSeeker\JobSeekerProfileTab@profile')->name('profile.jobseeker');
Route::put('jobseeker/update/{id}','JobSeeker\JobSeekerProfileTab@update')->name('jobseeker.update');
Route::put('jobseeker/personalInfoupdate/{id}','JobSeeker\JobSeekerProfileTab@personalInfoupdate')->name('jobseeker.personalInfoupdate');
Route::put('jobseeker/educationupdate/{id}','JobSeeker\JobSeekerProfileTab@educationupdate')->name('jobseeker.educationupdate');
Route::put('jobseeker/addressupdate/{id}','JobSeeker\JobSeekerProfileTab@addressupdate')->name('jobseeker.addressupdate');
Route::put('jobseeker/experienceupdate/{id}','JobSeeker\JobSeekerProfileTab@experienceupdate')->name('jobseeker.experienceupdate');
Route::get('jobseeker/cv','JobSeeker\JobSeekerCvController@index')->name('jobseeker.cv');

//Job Seeker Profile End Here




// Job Provider Register Start Here
Route::get('jobprovider/register','JobProvider\JobProviderController@register')->name('register.jobprovider');
Route::post('register/store','JobProvider\JobProviderController@store')->name('store.jobprovider');
// Job Provider Register End Here

//Job Provider Profile Start Here
Route::get('jobprovider/profile','JobProvider\JobProviderProfileTab@profile')->name('profile.jobprovider');
Route::put('jobprovider/update/{id}','JobProvider\JobProviderProfileTab@update')->name('jobprovider.update');
//Job Provider Profile End Here





/*Custome Login Route Start here*/
Route::post('custom/login','UserLoginCheck@authenticate')->name('user.login');
/*Custome Login Route End here*/

// PDF Route Start Here
Route::get('jobseekerCv',array('as'=>'jobseekerCv','uses'=>'ItemController@jobseekerCv'));
// PDF Route Ends Here