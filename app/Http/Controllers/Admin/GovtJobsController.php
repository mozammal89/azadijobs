<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\GovtJobs;
use App\Division;

class GovtJobsController extends Controller
{

	public function index()
	{
		$govtJobs = GovtJobs::get();

		return view ('BackEnd.admin_govt_jobs', compact('govtJobs'));
	}



    public function create()
    {
    	$divisions = Division::get();

    	return view ('BackEnd.admin_govt_jobs_create', compact('divisions'));
    }

    public function store(Request $request)
    {

    	if($request->has('image'))
                {
                    $file=$request->file('image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    $filesize=$file->getClientSize();
                    $file->move('govt_jobs_images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }


    	$request->validate([
            'job_title' => 'required',
            'dept_title' => 'required',
         
        ]);


    	$govt_jobs = new GovtJobs;

    	$govt_jobs->job_title = $request->job_title;
    	$govt_jobs->dept_title = $request->dept_title;
    	$govt_jobs->image = $filename;
    	$govt_jobs->job_post_date = $request->job_post_date;
    	$govt_jobs->application_deadline = $request->application_deadline;
    	$govt_jobs->vacancy = $request->vacancy;
    	$govt_jobs->job_context = $request->job_context;
    	$govt_jobs->job_responsibilities = $request->job_responsibilities;
    	$govt_jobs->employment_status = $request->employment_status;
    	$govt_jobs->educational_requirements = $request->educational_requirements;
    	$govt_jobs->additional_requirements = $request->additional_requirements;
    	$govt_jobs->job_location = $request->job_location;
    	$govt_jobs->salary = $request->salary;
    	$govt_jobs->application_note = $request->application_note;

    	$govt_jobs->save();

    	Toastr::success('Govt Job successfully created','Created');   

         return redirect()->route('admin.govtJobsCreate')
                         ->with('success','Govt Job created successfully.');
    }

    public function govtJobsgetEdit ($id)
    {
    	$divisions = Division::get();
    	$govt_jobs_details = GovtJobs::find($id);
    	return view ('BackEnd.admin_govt_jobs_edit',compact('govt_jobs_details','divisions'));
    }

    public function govtJobsEdit(Request $request, $id)
    {


    	$govt_jobs = GovtJobs::find($id);


    	if($request->has('image'))
                {
                    $file=$request->file('image');  
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    if ($govt_jobs->image) {
                       unlink('govt_jobs_images/'.$govt_jobs->image);
                    }
                    $filesize=$file->getClientSize();
                    $file->move('govt_jobs_images',$filename);
                    
                }

            else{
                    $filename=$govt_jobs->image;
                }


    	$request->validate([
            'job_title' => 'required',
            'dept_title' => 'required',
         
        ]);

    	$govt_jobs->job_title = $request->job_title;
    	$govt_jobs->dept_title = $request->dept_title;
    	$govt_jobs->image = $filename;
    	$govt_jobs->job_post_date = $request->job_post_date;
    	$govt_jobs->application_deadline = $request->application_deadline;
    	$govt_jobs->vacancy = $request->vacancy;
    	$govt_jobs->job_context = $request->job_context;
    	$govt_jobs->job_responsibilities = $request->job_responsibilities;
    	$govt_jobs->employment_status = $request->employment_status;
    	$govt_jobs->educational_requirements = $request->educational_requirements;
    	$govt_jobs->additional_requirements = $request->additional_requirements;
    	$govt_jobs->job_location = $request->job_location;
    	$govt_jobs->salary = $request->salary;
    	$govt_jobs->application_note = $request->application_note;

    	$govt_jobs->save();

    	Toastr::success('Govt Job successfully Updated','Created');   

         return redirect()->route('admin.govtJobs')
                         ->with('success','Govt Job updated successfully.');
    }

    public function govtJobsDetails ($id)
    {
    	$divisions = Division::get();
    	$govt_jobs_details = GovtJobs::find($id);

		return view ('BackEnd.admin_govt_jobs_details', compact('govt_jobs_details','divisions'));
    }

    public function delete ($id)
    {
    	GovtJobs::find($id)->delete();

      	Toastr::success('Govt Job successfully Deleted','Deleted');


    	 return redirect()->route('admin.govtJobs')
                         ->with('success','Govt Job deleted successfully.'); 
    }

       public function changeStatus(Request $request)
    {
     //dd('test');
        $govt_jobs = GovtJobs::find($request->id);
        $govt_jobs->status = $request->status;
        $govt_jobs->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
