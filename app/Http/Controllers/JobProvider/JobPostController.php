<?php

namespace App\Http\Controllers\JobProvider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobProvider\JobPost;
use App\User;
use App\JobCategory;
use App\SubCategory;
use Auth;
use DB;
use App\Division;


class JobPostController extends Controller
{
    public function index ()
    {
    	return view('BackEnd.dashboard');
    }

    public function jobPostIndex ()
    {
    	$JobPost = JobPost::get();
    	return view('BackEnd.job_post', compact('JobPost'));
    }

    public function jobPostCreate ()
    {
    	$jobcategories = JobCategory::get();
    	$divisions = Division::get();

    	return view('BackEnd.job_post_create',compact('jobcategories','divisions'));
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

    	$request->validate([
            'category' => 'required',
            'sub_category' => 'required',
            'job_post_date' => 'required',
            'application_deadline' => 'required',
            'joining_date' => 'required',
            'vacancy' => 'required',
            'job_context' => 'required',
            'job_responsibilities' => 'required',
            'employment_status' => 'required',
            'educational_requirements' => 'required',
            'job_location' => 'required',
            'salary' => 'required',
         
        ]);

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

    	Toastr::success('Job successfully created','Created');   

         return redirect()->route('provider.jpPostCreate')
                         ->with('success','Job created successfully.');
    }
    public function changeStatus(Request $request)
    {
     //dd('test');
        $job_post_info = JobPost::find($request->id);
        $job_post_info->status = $request->status;
        $job_post_info->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }


    public function jobPostDetails ($id)
    {
    	// dd($id);
    	$JobPostDetails = JobPost::find($id);
    	return view('BackEnd.job_post_details', compact('JobPostDetails'));
                         
    }
    public function jobPostgetEdit($id)
    {
    	$JobPostDetails = JobPost::find($id);
    	// dd($JobPostDetails->subcategory->sub_category_name);
    	$jobcategories = JobCategory::get();
    	$divisions = Division::get();
    	return view('BackEnd.job_post_edit',compact('JobPostDetails','jobcategories','divisions'));
    }

     public function jobPostEdit (Request $request, $id)
    {
    	$JobPostEdit = JobPost::find($id);

    	$JobPostEdit->provider_id = Auth::user()->id;
    	$JobPostEdit->job_title = $request->job_title;
    	$JobPostEdit->category = $request->category;
    	$JobPostEdit->sub_category = $request->sub_category;
    	$JobPostEdit->job_post_date = $request->job_post_date;
    	$JobPostEdit->application_deadline = $request->application_deadline;
    	$JobPostEdit->joining_date = $request->joining_date;
    	$JobPostEdit->vacancy = $request->vacancy;
    	$JobPostEdit->job_context = $request->job_context;
    	$JobPostEdit->job_responsibilities = $request->job_responsibilities;
    	$JobPostEdit->employment_status = $request->employment_status;
    	$JobPostEdit->educational_requirements = $request->educational_requirements;
    	$JobPostEdit->additional_requirements = $request->additional_requirements;
    	$JobPostEdit->job_location = $request->job_location;
    	$JobPostEdit->salary = $request->salary;
    	$JobPostEdit->application_note = $request->application_note;

  		
  		$JobPostEdit->save();   

      Toastr::success('Job Post successfully Updated','Updated');

         return redirect()->route('provider.jpPost')
                         ->with('success','Job Post updated successfully.');
	
    }


    public function delete ($id)
    {
    	JobPost::find($id)->delete();

      Toastr::success('Job Post successfully Deleted','Deleted');


    	 return redirect()->route('provider.jpPost')
                         ->with('success','Job Post deleted successfully.'); 
    }
}
