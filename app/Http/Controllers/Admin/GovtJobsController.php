<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GovtJobsController extends Controller
{
    public function create()
    {
    	return view ('BackEnd.govt_jobs');
    }
}
