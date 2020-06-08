<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobProvider\JobPost;
use App\JobSeeker\ApplyJobs;
use App\User;
use Auth;

class ApplyJobsController extends Controller
{
    public function index (Request $request)
    {
    	$job_post = JobPost::find($request->id);
    	// dd($job_post);
    	return view ('FrontEnd.apply_jobs', compact('job_post'));
    }

    public function store (Request $request)
    {
    	$request->validate([
            'expected_salary' => 'required',
         
        ]);

    	$apply_job = new ApplyJobs;

    	$apply_job->seeker_id = Auth::user()->id;
    	$apply_job->provider_id = $request->provider_id;
    	$apply_job->job_post_id = $request->job_post_id;
    	$apply_job->expected_salary = $request->expected_salary;

    	// dd($apply_job);

    	$apply_job->save();

    	Toastr::success('Job successfully Applied','Created');   

         return redirect()->route('seeker.applyjobs', [$request->job_post_id])
                         ->with('success','Job applied successfully.');
    }
}
