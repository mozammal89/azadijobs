<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;
use App\JobSeeker\JobSeeker;
use App\JobSeeker\JobSeekerProfile;
use App\JobSeeker\JobSeekerEducation;
use App\JobSeeker\JobSeekerAddress;
use App\JobSeeker\JobSeekerExperiences;
use App\JobSeeker\JobSeekerCv;
use App\User;
use Auth;
use File;
use DB;

class JobSeekerCvController extends Controller
{
    public function index()
    {

	    $all_seeker_profiles = JobSeeker::where('user_id',Auth::user()->id)->first();
		$all_categories = JobCategory::get();

        $profiles = JobSeekerProfile::where('user_id',Auth::user()->id)->first();
        $educational_infos = JobSeekerEducation::where('user_id',Auth::user()->id)->first();
        $address_infos = JobSeekerAddress::where('user_id',Auth::user()->id)->first();
        $experiences = JobSeekerExperiences::where('user_id',Auth::user()->id)->first();        

    	return view ('FrontEnd.job_seeker_cv', compact('all_seeker_profiles','all_categories','profiles', 'educational_infos', 'address_infos','experiences'));
    }


    public function CvUpload()
    {
        $all_cv_info = JobSeekerCv::where('seeker_id',Auth::user()->id)->first();
        return view ('FrontEnd.job_seeker_cv_upload', compact('all_cv_info'));
    }

    public function store(Request $request)
    {

        $UserId=Auth::user()->id;
        // dd($UserId);
        $seeker_cv = new JobSeekerCv;
        $user_info = new User;
        $checkUserData=JobSeekerCv::where('seeker_id',$UserId)->first();

        // dd($checkUserData);

        if ($checkUserData){
            $deleteFileName=$checkUserData->file;
            // dd($deleteFileName);

            $destinationPath = base_path().'/public/cv_uploads/';
            // dd($destinationPath);
            File::delete($destinationPath.$deleteFileName);
            
            

            // JobSeekerCv::where('seeker_id',$UserId)->first()->delete();

            $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'file' => 'required',
            ]);

            $fileName = time().'.'.$request->file->extension();    
            $request->file->move(public_path('cv_uploads'), $fileName);

           
            $checkUserData->file=$fileName;
            $checkUserData->save();          
           

            Toastr::success('Resume Updated successfully','Success'); 

            return redirect()->route('seeker.jobseekerCvUpload')
                             ->with('success','Resume Updated successfully.');
            
        }else{
            // dd("test no");

            $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'file' => 'required',
            ]);

            $fileName = time().'.'.$request->file->extension();    
            $request->file->move(public_path('cv_uploads'), $fileName);

            $seeker_cv->seeker_id = Auth::user()->id;
            $seeker_cv->file = $fileName;
            $seeker_cv->save();

            Toastr::success('Resume submitted successfully','Success'); 

            return redirect()->route('seeker.jobseekerCvUpload')
                             ->with('success','Resume Submitted successfully.');


        }
        
        // dd($seeker_cv->file);

        
   
    }
}
