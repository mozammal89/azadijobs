<?php

namespace App\Http\Controllers\JobProvider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\JobPostController;
use Brian2694\Toastr\Facades\Toastr;
use App\JobProvider\JobPost;
use App\User;
use App\JobCategory;
use App\SubCategory;
use Auth;
use DB;


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

    public function jobPostCreate ()
    {
    	$jobcategories = JobCategory::get();

    	return view('BackEnd.job_post_create',compact('jobcategories'));
    }

    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
        $subcategories = DB::table("sub_categories")
                    ->where("cat_id",$id)
                    ->get();

                    // dd($subcategories);


           $html ='<option value="">Sub Category</option>';
           
           foreach ($subcategories as  $data) {
                    	$html .='<option value="'.$data->id.'">'.$data->sub_category_name.'</option>';# code...
                    }         
        	return $html;
    }


    public function jobPostStore (Request $request)
    {
    	$job_post_info = new JobPost;
    	$user_info = new User;


    	$job_post_info->provider_id = Auth::user()->id;
    	$job_post_info->job_title = $request->job_title;
    	$job_post_info->category = $request->category;
    	$job_post_info->sub_category = $request->sub_category;
    	$job_post_info->job_post_date = $request->job_post_date;
    	$job_post_info->application_deadline = $request->application_deadline;
    	$job_post_info->joining_date = $request->joining_date;
    	$job_post_info->vacancy = $request->vacancy;
    	$job_post_info->job_context = $request->job_context;
    	$job_post_info->job_responsibilities = $request->job_responsibilities;
    	$job_post_info->employment_status = $request->employment_status;
    	$job_post_info->educational_requirements = $request->educational_requirements;
    	$job_post_info->additional_requirements = $request->additional_requirements;
    	$job_post_info->job_location = $request->job_location;
    	$job_post_info->salary = $request->salary;
    	$job_post_info->application_note = $request->application_note;

    	// dd($job_post_info);

    	$job_post_info->save();

    	
    }
}
