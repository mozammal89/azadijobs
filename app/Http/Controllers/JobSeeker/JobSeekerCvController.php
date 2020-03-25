<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;
use App\JobSeeker\JobSeeker;
use App\JobSeeker\JobSeekerProfile;
use App\JobSeeker\JobSeekerEducation;
use App\JobSeeker\JobSeekerAddress;
use App\JobSeeker\JobSeekerExperiences;
use App\User;
use Auth;

class JobSeekerCvController extends Controller
{
    public function index()
    {

	    $all_seeker_profiles = JobSeeker::where('user_id',Auth::user()->id)->first();
		$all_categories = JobCategory::get();

        $profiles = JobSeekerProfile::where('user_id',Auth::user()->id)->first();
        $educational_infos = JobSeekerEducation::where('user_id',Auth::user()->id)->first();
        $address_infos = JobSeekerAddress::where('user_id',Auth::user()->id)->first();
        $experiences = JobSeekerExperiences::where('user_id',Auth::user()->id)->first();        

    	return view ('FrontEnd.job_seeker_cv', compact('all_seeker_profiles','all_categories','profiles', 'educational_infos', 'address_infos','experiences'));
    }
}
