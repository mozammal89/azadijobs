<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker\JobSeeker;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;
use App\JobSeeker\JobSeekerProfile;

class JobSeekerProfileTab extends Controller
{

    public function profile ()
    {
    	$all_seeker_profiles = JobSeeker::get();
    	$all_categories = JobCategory::get();

      $profiles = JobSeekerProfile::get();
      
      dd()

    	return view ('FrontEnd.job_seekers_tab', compact('all_seeker_profiles','all_categories','profiles'));
    }

    public function update (Request $request, $id)
    {
      $seeker_profile = JobSeeker::find($id);

    	if($request->has('seeker_image'))
                {
                    $file=$request->file('seeker_image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();

                    if ($seeker_profile->seeker_image) {
                       unlink('images/'.$seeker_profile->seeker_image);
                    }
                    $filesize=$file->getClientSize();
                    $file->move('images',$filename);
                    
                }
                
            else{
                    $filename=$seeker_profile->seeker_image;
                }

    	
  		$seeker_profile->seeker_name = $request->seeker_name;
  		$seeker_profile->seeker_email = $request->seeker_email;
  		$seeker_profile->seeker_address = $request->seeker_address;
  		$seeker_profile->phn_number = $request->phn_number;
  		$seeker_profile->interested_area = $request->interested_area;
  		$seeker_profile->seeker_image = $filename;
  		
  		$seeker_profile->save();   

      Toastr::success('Profile successfully Updated','Updated');

         return redirect()->route('profile')
                         ->with('success','Profile updated successfully.');
	
    

    


    }

    public function cvupdate(Request $request, $id)
    {
      $personal_info = JobSeekerProfile::find($id);

       if($personal_info == null)
      {
        

      $personal_info = new JobSeekerProfile;
      $user_info = new User;

      $personal_info->user_id = $user_info->id;

      $personal_info->first_name = $request->first_name;
      $personal_info->last_name = $request->last_name;
      $personal_info->father_name = $request->father_name;
      $personal_info->mother_name = $request->mother_name;
      $personal_info->gender = $request->gender;
      $personal_info->dob = $request->dob;
      $personal_info->religion = $request->religion;
      $personal_info->nationality = $request->nationality;
      $personal_info->nid = $request->nid;
      $personal_info->passport_number = $request->passport_number;
      $personal_info->maritial_status = $request->maritial_status;
      $personal_info->mobile = $request->mobile;
      $personal_info->email = $request->email;
   
      
      $personal_info->save();   

      Toastr::success('Personal Information successfully Submitted','Submitted');

         return redirect()->route('profile.jobseeker')
                         ->with('success','Personal Information Submitted successfully.');
      }

      else{

      $personal_info->first_name = $request->first_name;
      $personal_info->last_name = $request->last_name;
      $personal_info->father_name = $request->father_name;
      $personal_info->mother_name = $request->mother_name;
      $personal_info->gender = $request->gender;
      $personal_info->dob = $request->dob;
      $personal_info->religion = $request->religion;
      $personal_info->nationality = $request->nationality;
      $personal_info->nid = $request->nid;
      $personal_info->passport_number = $request->passport_number;
      $personal_info->maritial_status = $request->maritial_status;
      $personal_info->mobile = $request->mobile;
      $personal_info->email = $request->email;

      $personal_info->save();

      Toastr::success('Personal Information successfully Updated','updated');

         return redirect()->route('profile.jobseeker')
                         ->with('success','Personal Information Updated successfully.');
        
      }
    }

      
}
