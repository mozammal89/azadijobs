<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker\JobSeeker;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;

class JobSeekerProfileTab extends Controller
{
    public function profile ()
    {
    	$all_seeker_profiles = JobSeeker::get();
    	$all_categories = JobCategory::get();

    	return view ('FrontEnd.job_seekers_tab', compact('all_seeker_profiles','all_categories'));
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
}
