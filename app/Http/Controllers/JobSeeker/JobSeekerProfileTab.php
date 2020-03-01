<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSeekerProfileTab extends Controller
{
    public function profile ()
    {
    	return view ('FrontEnd.job_seekers_tab');
    }
}
