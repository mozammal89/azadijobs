<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker\JobSeeker;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;
use App\JobSeeker\JobSeekerProfile;
use App\JobSeeker\JobSeekerEducation;
use App\JobSeeker\JobSeekerAddress;
use Auth;

class JobSeekerProfileTab extends Controller
{

    public function profile ()
    {
    	$all_seeker_profiles = JobSeeker::where('user_id',Auth::user()->id)->first();
    	$all_categories = JobCategory::get();

      $profiles = JobSeekerProfile::where('user_id',Auth::user()->id)->first();
      $educational_infos = JobSeekerEducation::where('user_id',Auth::user()->id)->first();
      $address_infos = JobSeekerAddress::where('user_id',Auth::user()->id)->first();
      
      

    	return view ('FrontEnd.job_seekers_tab', compact('all_seeker_profiles','all_categories','profiles', 'educational_infos', 'address_infos'));
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

         return redirect()->route('profile.jobseeker')
                         ->with('success','Profile updated successfully.');
	
    

    


    }

    public function personalInfoupdate(Request $request, $id)
    {
      $personal_info = JobSeekerProfile::find($id);

       if($personal_info == null)
      {
        

      $personal_info = new JobSeekerProfile;
      $user_info = new User;

      $personal_info->user_id = Auth::user()->id;

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

    public function educationupdate(Request $request, $id)
    {
      $education_info = JobSeekerEducation::find($id);

       if($education_info == null)
      {
        

      $education_info = new JobSeekerEducation;
      $user_info = new User;

      $education_info->user_id = Auth::user()->id;

      $education_info->school_name = $request->school_name;
      $education_info->school_subject = $request->school_subject;
      $education_info->school_grade = $request->school_grade;
      $education_info->school_passing_year = $request->school_passing_year;
      $education_info->college_name = $request->college_name;
      $education_info->college_subject = $request->college_subject;
      $education_info->college_grade = $request->college_grade;
      $education_info->college_passing_year = $request->college_passing_year;
      $education_info->versity_name = $request->versity_name;
      $education_info->versity_subject = $request->versity_subject;
      $education_info->versity_grade = $request->versity_grade;
      $education_info->versity_passing_year = $request->versity_passing_year;
      
      $education_info->save();   

      Toastr::success('Educational Information successfully Submitted','Submitted');

         return redirect()->route('profile.jobseeker')
                         ->with('success','Educational Information Submitted successfully.');
      }

      else{

      $education_info->school_name = $request->school_name;
      $education_info->school_subject = $request->school_subject;
      $education_info->school_grade = $request->school_grade;
      $education_info->school_passing_year = $request->school_passing_year;
      $education_info->college_name = $request->college_name;
      $education_info->college_subject = $request->college_subject;
      $education_info->college_grade = $request->college_grade;
      $education_info->college_passing_year = $request->college_passing_year;
      $education_info->versity_name = $request->versity_name;
      $education_info->versity_subject = $request->versity_subject;
      $education_info->versity_grade = $request->versity_grade;
      $education_info->versity_passing_year = $request->versity_passing_year;

      $education_info->save();

      Toastr::success('Educational Information successfully Updated','updated');

         return redirect()->route('profile.jobseeker')
                         ->with('success','Educational Information Updated successfully.');
        
      }
    }

    public function addressupdate(Request $request, $id)
    {
      $address_info = JobSeekerAddress::find($id);
      

      if($address_info == null)
      {
        

      $address_info = new JobSeekerAddress;
      $user_info = new User;

      $address_info->user_id = Auth::user()->id;

      $address_info->present_address = $request->present_address;
      $address_info->present_district = $request->present_district;
      $address_info->present_country = $request->present_country;
      $address_info->present_zip = $request->present_zip;
      $address_info->parmanent_address = $request->parmanent_address;
      $address_info->parmanent_district = $request->parmanent_district;
      $address_info->parmanent_country = $request->parmanent_country;
      $address_info->parmanent_zip = $request->parmanent_zip;
     
      
      $address_info->save();   

      Toastr::success('Address Information successfully Submitted','Submitted');

         return redirect()->route('profile.jobseeker')
                         ->with('success','Address Information Submitted successfully.');
      }

      else{

      $address_info->present_address = $request->present_address;
      $address_info->present_district = $request->present_district;
      $address_info->present_country = $request->present_country;
      $address_info->present_zip = $request->present_zip;
      $address_info->parmanent_address = $request->parmanent_address;
      $address_info->parmanent_district = $request->parmanent_district;
      $address_info->parmanent_country = $request->parmanent_country;
      $address_info->parmanent_zip = $request->parmanent_zip;
     
      
      $address_info->save(); 

      Toastr::success('Address Information successfully Updated','updated');

         return redirect()->route('profile.jobseeker')
                         ->with('success','Address Information Updated successfully.');
        
      }
    

    }

      
}
