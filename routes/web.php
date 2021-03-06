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

// Route::get('/', function () {
//     return view('FrontEnd.home');
// });

Route::get('/', 'HomeController@index')->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



Route::get('/test',function(){

	// dd(Auth::user()->role_id);

})->middleware(['auth','admin']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('jobdetails','FrontEndController@jobdetails')->name('jobdetails');




// FrontEnd Routes Starts Here
Route::get('post/jobdetails/{id}','FrontEndController@postjobdetails')->name('post.jobdetails');

Route::get('browseAllJobs','FrontEndController@browseAllJobs')->name('browseAllJobs');
Route::post('loadmore/load_data', 'FrontEndController@load_data')->name('loadmore.load_data');

Route::get('browseAllCat','FrontEndController@browseAllCat')->name('browseAllCat');
Route::post('loadMoreCat/load_cat', 'FrontEndController@load_cat')->name('loadMoreCat.load_cat');

Route::get('browseAllClients','FrontEndController@browseAllClients')->name('browseAllClients');

Route::post('searchResult','SearchJobController@index')->name('searchResult');
Route::get('searchResult/details/{id}','SearchJobController@searchResultDetails')->name('searchResultDetails');

Route::get('training','FrontEndController@trainingIndex')->name('training');
Route::get('trainingDetails/{id}','FrontEndController@trainingDetails')->name('trainingDetails');
Route::get('trainingCourseOutlineDetails/{id}','FrontEndController@trainingCourseOutlineDetails')->name('trainingCourseOutlineDetails');

// FrontEnd Footer Start
Route::get('footerAboutUsTandC','FrontEndController@footerAboutUsTandC')->name('footerAboutUsTandC');

Route::get('footerAboutUsFeedback','FrontEndController@footerAboutUsFeedback')->name('footerAboutUsFeedback');
Route::post('footerAboutUsFeedback/store','FrontEndController@footerAboutUsFeedbackStore')->name('footerAboutUsFeedbackStore');

Route::get('footerAboutUsAboutUs','FrontEndController@footerAboutUsAboutUs')->name('footerAboutUsAboutUs');

Route::get('footerJobSeekerTandC','FrontEndController@footerJobSeekerTandC')->name('footerJobSeekerTandC');

Route::get('footerEmployersContact','FrontEndController@footerEmployeersContact')->name('footerEmployeersContact');
// FrontEnd Footer End


// FrontEnd Routes Ends Here





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

Route::get('adsManagement','adsManagementController@index')->name('adsManagement');
Route::post('adsManagement/store','adsManagementController@store')->name('adsManagement.store');
Route::put('adsManagement/update/{id}','adsManagementController@update')->name('adsManagement.update');
Route::delete('adsManagement/delete/{id}','adsManagementController@delete')->name('adsManagement.delete');
Route::get('adsManagement/details/{id}','adsManagementController@details')->name('adsManagement.details');

Route::get('training','TrainingController@index')->name('training');
Route::get('training/Create','TrainingController@trainingCreate')->name('trainingCreate');
Route::post('training/store','TrainingController@trainingStore')->name('trainingStore');
Route::get('training/details/{id}','TrainingController@trainingDetails')->name('trainingDetails');
Route::get('training/edit/{id}','TrainingController@traininggetEdit')->name('trainingEditget');
Route::put('training/edit/{id}','TrainingController@trainingEdit')->name('trainingEdit');
Route::delete('training/delete/{id}','TrainingController@delete')->name('trainingDelete');

Route::get('trainingCourseOutline','TrainingCourseOutlineController@index')->name('trainingCourseOutline');
Route::get('trainingCourseOutline/Create','TrainingCourseOutlineController@trainingCourseOutlineCreate')->name('trainingCourseOutlineCreate');
Route::post('trainingCourseOutline/store','TrainingCourseOutlineController@trainingCourseOutlineStore')->name('trainingCourseOutlineStore');
Route::get('trainingCourseOutline/details/{id}','TrainingCourseOutlineController@details')->name('trainingCourseOutlineDetails');
Route::get('trainingCourseOutline/edit/{id}','TrainingCourseOutlineController@trainingCourseGetEdit')->name('trainingCourseOutlineGetEdit');
Route::put('trainingCourseOutline/edit/{id}','TrainingCourseOutlineController@edit')->name('trainingCourseOutlineEdit');
Route::delete('trainingCourseOutline/delete/{id}','TrainingCourseOutlineController@delete')->name('trainingCourseOutlineDelete');

Route::get('govtJobs','GovtJobsController@index')->name('govtJobs');
Route::get('govtJobs/create','GovtJobsController@create')->name('govtJobsCreate');
Route::post('govtJobs/store','GovtJobsController@store')->name('govtJobsStore');
Route::get('govtJobs/details/{id}','GovtJobsController@govtJobsDetails')->name('govtJobsDetails');
Route::get('govtJobs/edit/{id}','GovtJobsController@govtJobsgetEdit')->name('govtJobsGetEdit');
Route::put('govtJobs/edit/{id}','GovtJobsController@govtJobsEdit')->name('govtJobsEdit');
Route::delete('govtJobs/delete/{id}','GovtJobsController@delete')->name('govtJobsDelete');

Route::get('designation','DesignationController@index')->name('designation');
Route::post('designation/store','DesignationController@store')->name('designation.store');
Route::put('designation/update/{id}','DesignationController@update')->name('designation.update');
Route::delete('designation/delete/{id}','DesignationController@delete')->name('designation.delete');

Route::get('department','DepartmentController@index')->name('department');
Route::post('department/store','DepartmentController@store')->name('department.store');
Route::put('department/update/{id}','DepartmentController@update')->name('department.update');
Route::delete('department/delete/{id}','DepartmentController@delete')->name('department.delete');

Route::get('employee','EmployeeController@index')->name('employee');
Route::get('employee/create','EmployeeController@create')->name('employeeCreate');
Route::post('employee/store','EmployeeController@store')->name('employeeStore');
Route::get('employee/details/{id}','EmployeeController@employeeDetails')->name('employeeDetails');
Route::get('employee/edit/{id}','EmployeeController@employeeGetEdit')->name('employeeGetEdit');
Route::put('employee/edit/{id}','EmployeeController@employeeEdit')->name('employeeEdit');
Route::delete('employee/delete/{id}','EmployeeController@delete')->name('employeeDelete');

Route::get('institute','InstituteController@index')->name('institute');
Route::post('institute/store','InstituteController@store')->name('institute.store');
Route::put('institute/update/{id}','InstituteController@update')->name('institute.update');
Route::delete('institute/delete/{id}','InstituteController@delete')->name('institute.delete');

Route::get('district','DistrictController@index')->name('district');
Route::post('district/store','DistrictController@store')->name('district.store');
Route::put('district/update/{id}','DistrictController@update')->name('district.update');
Route::delete('district/delete/{id}','DistrictController@delete')->name('district.delete');

Route::get('notice','NoticeController@index')->name('notice');
Route::post('notice/store','NoticeController@store')->name('notice.store');
Route::put('notice/update/{id}','NoticeController@update')->name('notice.update');
Route::delete('notice/delete/{id}','NoticeController@delete')->name('notice.delete');

Route::get('coverImage','CoverImageController@index')->name('coverImage');
Route::post('coverImage/store','CoverImageController@store')->name('coverImage.store');
Route::put('coverImage/update/{id}','CoverImageController@update')->name('coverImage.update');
Route::delete('coverImage/delete/{id}','CoverImageController@delete')->name('coverImage.delete');

Route::get('aboutUsTandC','FooterController@index')->name('aboutUsTandC');
Route::get('aboutUsTandC/create','FooterController@create')->name('aboutUsTandC.create');
Route::post('aboutUsTandC/store','FooterController@store')->name('aboutUsTandC.store');
Route::get('aboutUsTandC/details/{id}','FooterController@details')->name('aboutUsTandC.details');
Route::get('aboutUsTandC/edit/{id}','FooterController@aboutUsTandCGetEdit')->name('aboutUsTandCGetEdit');
Route::put('aboutUsTandC/update/{id}','FooterController@update')->name('aboutUsTandC.update');
Route::delete('aboutUsTandC/delete/{id}','FooterController@delete')->name('aboutUsTandC.delete');

Route::get('aboutUsFeedback','FooterController@aboutUsFeedbackIndex')->name('aboutUsFeedback');
Route::get('aboutUsFeedback/details/{id}','FooterController@aboutUsFeedbackDetails')->name('aboutUsFeedbackDetails');
Route::delete('aboutUsFeedback/delete/{id}','FooterController@feedbackDelete')->name('aboutUsFeedback.delete');

Route::get('aboutUs/aboutUs','FooterController@aboutUsIndex')->name('aboutUsAboutUs');
Route::get('aboutUsAboutUs/create','FooterController@aboutUsCreate')->name('aboutUsAboutUs.create');
Route::post('aboutUsAboutUs/store','FooterController@aboutUsStore')->name('aboutUsAboutUs.store');
Route::get('aboutUsAboutUs/details/{id}','FooterController@aboutUsDetails')->name('aboutUsAboutUs.details');
Route::get('aboutUsAboutUs/edit/{id}','FooterController@aboutUsGetEdit')->name('aboutUsGetEdit');
Route::put('aboutUsAboutUs/update/{id}','FooterController@aboutUsUpdate')->name('aboutUsAboutUs.update');
Route::delete('aboutUsAboutUs/delete/{id}','FooterController@aboutUsDelete')->name('aboutUsAboutUs.delete');

Route::get('jobSeekersTandC','FooterController@jobSeekersTandCIndex')->name('jobSeekersTandC');
Route::get('jobSeekersTandC/create','FooterController@jobSeekersTandCCreate')->name('jobSeekersTandC.create');
Route::post('jobSeekersTandC/store','FooterController@jobSeekersTandCStore')->name('jobSeekersTandC.store');
Route::get('jobSeekersTandC/details/{id}','FooterController@jobSeekersTandCDetails')->name('jobSeekersTandC.details');
Route::get('jobSeekersTandC/edit/{id}','FooterController@jobSeekersTandCGetEdit')->name('jobSeekersTandCGetEdit');
Route::put('jobSeekersTandC/update/{id}','FooterController@jobSeekersTandCUpdate')->name('jobSeekersTandC.update');
Route::delete('jobSeekersTandC/delete/{id}','FooterController@jobSeekersTandCDelete')->name('jobSeekersTandC.delete');

Route::get('employers/contact','FooterController@contactIndex')->name('employersContact');
Route::get('employersContact/create','FooterController@contactCreate')->name('employersContact.create');
Route::post('employersContact/store','FooterController@contactStore')->name('employersContact.store');
Route::get('employersContact/details/{id}','FooterController@contactDetails')->name('employersContact.details');
Route::get('employersContact/edit/{id}','FooterController@employersContactGetEdit')->name('employersContactGetEdit');
Route::put('employersContact/update/{id}','FooterController@contactUpdate')->name('employersContact.update');
Route::delete('employersContact/delete/{id}','FooterController@contactDelete')->name('employersContact.delete');

Route::get('providers','ProviderListController@index')->name('providerList');
Route::get('providers/details/{id}','ProviderListController@providersDetails')->name('providersDetails');
Route::get('providers/edit/{id}','ProviderListController@providersgetEdit')->name('providersgetEdit');
Route::put('providers/edit/{id}','ProviderListController@providersEdit')->name('providersEdit');
Route::delete('providers/delete/{id}','ProviderListController@delete')->name('providersDelete');

Route::get('adminChangePassword','AdminChangePasswordController@adminChangePassword')->name('adminChangePassword');
Route::post('adminChangePasswordUpdate', 'AdminChangePasswordController@store')->name('adminChangePasswordUpdate');


});

Route::get('/changeAdsStatus', 'Admin\adsManagementController@changeStatus')->name('changeAdsStatus');
Route::get('/changeGovtJobStatus', 'Admin\GovtJobsController@changeStatus')->name('changeJobStatus');
Route::get('/changeNoticeStatus', 'Admin\NoticeController@changeStatus')->name('changeNoticeStatus');
Route::get('/changeCoverImageStatus', 'Admin\CoverImageController@changeStatus')->name('changeCoverImageStatus');
Route::get('/changeTrainingStatus', 'Admin\trainingController@changeStatus')->name('changeTrainingStatus');
Route::get('/changeProviderStatus', 'Admin\ProviderListController@changeStatus')->name('changeProviderStatus');
/*Admin Route End Here*/




/*Provider Route Start Here*/
Route::group(['as'=>'provider.','prefix'=>'provider', 'namespace'=>'JobProvider' ,'middleware'=>['auth','jobprovider'] ],function(){


Route::get('dashboard','DashboardController@index')->name('dashboard');
// Job Post Routes Start
Route::get('jpsetting','JobPostController@index')->name('jpsetting');
Route::get('jpPost','JobPostController@jobPostIndex')->name('jpPost');
Route::get('jpPost/Create','JobPostController@jobPostCreate')->name('jpPostCreate');
Route::post('jpPost/store','JobPostController@jobPostStore')->name('jpPostStore');
Route::get('jpPost/details/{id}','JobPostController@jobPostDetails')->name('jpPostDetails');
Route::get('jpPost/edit/{id}','JobPostController@jobPostgetEdit')->name('jpPostEditget');
Route::put('jpPost/edit/{id}','JobPostController@jobPostEdit')->name('jpPostEdit');
Route::delete('jpPost/delete/{id}','JobPostController@delete')->name('jpPostDelete');
Route::get('jpPost/applicants/{id}','JobPostController@applicants')->name('applicants');

Route::get('jpChangePassword','JpChangePasswordController@jpChangePassword')->name('jpChangePassword');
Route::post('jpChangePasswordUpdate', 'JpChangePasswordController@store')->name('jpChangePasswordUpdate');
// Job Post Routes End
});
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'JobProvider\JobPostController@myformAjax'));
Route::get('/changeJobStatus', 'JobProvider\JobPostController@changeStatus')->name('changeJobStatus');
/*Provider Route End Here*/



/*Job Seeker Route Start Here*/
Route::group(['as'=>'seeker.','prefix'=>'seeker', 'namespace'=>'JobSeeker' ,'middleware'=>['auth','jobseeker'] ],function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');

//Job Seeker Profile Start Here
Route::get('jsProfile','JobSeekerProfileTab@profile')->name('jobseekerProfile');
Route::put('jsUpdate/{id}','JobSeekerProfileTab@update')->name('jobseekerUpdate');
Route::put('jsPersonalInfoupdate/{id}','JobSeekerProfileTab@personalInfoupdate')->name('personalInfoUpdate');
Route::put('jsEducationupdate/{id}','JobSeekerProfileTab@educationupdate')->name('educationUpdate');
Route::put('jsAddressupdate/{id}','JobSeekerProfileTab@addressupdate')->name('addressUpdate');
Route::put('jsExperienceupdate/{id}','JobSeekerProfileTab@experienceupdate')->name('experienceUpdate');
//Job Seeker Profile End Here

// Job Seeker CV Route Start Here
Route::get('jsCv','JobSeekerCvController@index')->name('jobseekerCv');
Route::get('jsCvUpload','JobSeekerCvController@CvUpload')->name('jobseekerCvUpload');
Route::post('jsCvUpload/store','JobSeekerCvController@store')->name('jobseekerCvStore');
// Job Seeker CV Route End Here

// Apply Jobs Route Start Here
Route::get('applyjobs/{id}','ApplyJobsController@index')->name('applyjobs');
Route::post('applyjobs/store/{id}','ApplyJobsController@store')->name('applyjobsStore');

// Apply Jobs Route End Here

Route::get('jsChangePassword','JsChangePasswordController@jsChangePassword')->name('jsChangePassword');
Route::post('jsChangePasswordUpdate', 'JsChangePasswordController@store')->name('jsChangePasswordUpdate');

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
Route::post('login','UserLoginCheck@authenticate')->name('login');
/*Custome Login Route End here*/

// PDF Route Start Here
Route::get('jobseekerCv',array('as'=>'jobseekerCv','uses'=>'ItemController@jobseekerCv'));
// PDF Route Ends Here

//Reset Password Route Start
Route::get('mailChangePage', 'HomeController@mailChangePage')->name('mailChangePage');
Route::post('mail', 'HomeController@mail')->name('mail');
//Reset Password Route End