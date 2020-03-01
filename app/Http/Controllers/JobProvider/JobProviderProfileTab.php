<?php

namespace App\Http\Controllers\JobProvider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobProviderProfileTab extends Controller
{
    public function profile ()
    {
    	return view ('FrontEnd.job_providers_tab');
    }
}
