<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategory;
use App\JobProvider\JobPost;
use App\Division;
use App\AdsManagement;
use App\JobProvider\JobProvider;
use App\CoverImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $jobCategory = JobCategory::take(8)->get();
        $jobPost = JobPost::where('status','1')->latest()->take(6)->get();
        $AllJobPost = JobPost::get();
        $countJobPost = count($AllJobPost);
        $adsManagement = AdsManagement::take(2)->get();
        $jobProvider = JobProvider::where('status','1')->take(8)->get();
        $coverImage = CoverImage::take(1)->get();

        $search_job_category = JobCategory::get();
        $search_division = Division::get();

        return view('FrontEnd.home', compact('jobCategory', 'jobPost', 'adsManagement', 'jobProvider', 'coverImage', 'countJobPost', 'search_job_category', 'search_division'));
    }
}
