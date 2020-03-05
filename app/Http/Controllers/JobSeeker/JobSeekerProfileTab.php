<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker\JobSeeker;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;

class JobSeekerProfileTab extends Controller
{
    public function profile ()
    {
    	$all_seeker_profiles = JobSeeker::get();
    	$all_categories = JobCategory::get();

    	return view ('FrontEnd.job_seekers_tab', compact('all_seeker_profiles','all_categories'));
    }
}
