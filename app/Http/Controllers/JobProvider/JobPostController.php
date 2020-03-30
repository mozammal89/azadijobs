<?php

namespace App\Http\Controllers\JobProvider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPostController extends Controller
{
    public function index ()
    {
    	return view('BackEnd.dashboard');
    }

    public function jobPostIndex ()
    {
    	return view('BackEnd.jobpost');
    }
}
