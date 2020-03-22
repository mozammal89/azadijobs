<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobSeeker\JobSeeker;
use App\JobSeeker\JobSeekerProfile;
use App\JobSeeker\JobSeekerEducation;
use App\JobSeeker\JobSeekerAddress;
use App\JobSeeker\JobSeekerExperiences;

class JobSeekerCvController extends Controller
{
    public function index()
    {
    	return view ('FrontEnd.job_seeker_cv');
    }
}
