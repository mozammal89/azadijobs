<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerCvController extends Controller
{
    public function index()
    {
    	return view ('FrontEnd.cv_seeker');
    }
}
