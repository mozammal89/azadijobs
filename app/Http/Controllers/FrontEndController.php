<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\JobProvider\JobPost;
use App\User;

class FrontEndController extends Controller
{
    // public function jobdetails($id)
    // {
    // 	$latestJobDetails = JobPost::latest()->where('id',$id)->get();
    // 	$jobDetails = JobPost::latest()->take(8)->get();

    // 	return view('FrontEnd.job_details', compact('latestJobDetails','jobDetails'));
    // }

    public function postjobdetails ($id)
    {
    	$latestJobDetails = JobPost::latest()->where('id',$id)->get();
    	$fc = $latestJobDetails[0]->category;
    	$jobDetails = JobPost::latest()->where('category',$fc)->take(4)->get();

    	return view('FrontEnd.job_details', compact('latestJobDetails','jobDetails'));
    }
}
