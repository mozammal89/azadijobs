Route::get('jobseeker/profile','JobSeeker\JobSeekerProfileTab@profile')->name('profile.jobseeker');
Route::put('jobseeker/update/{id}','JobSeeker\JobSeekerProfileTab@update')->name('jobseeker.update');
Route::put('jobseeker/personalInfoupdate/{id}','JobSeeker\JobSeekerProfileTab@personalInfoupdate')->name('jobseeker.personalInfoupdate');
Route::put('jobseeker/educationupdate/{id}','JobSeeker\JobSeekerProfileTab@educationupdate')->name('jobseeker.educationupdate');
Route::put('jobseeker/addressupdate/{id}','JobSeeker\JobSeekerProfileTab@addressupdate')->name('jobseeker.addressupdate');
Route::put('jobseeker/experienceupdate/{id}','JobSeeker\JobSeekerProfileTab@experienceupdate')->name('jobseeker.experienceupdate');