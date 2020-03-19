<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker\JobSeeker;
use App\User;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\JobCategory;
use App\JobSeeker\JobSeekerProfile;
use App\JobSeeker\JobSeekerEducation;
use App\JobSeeker\JobSeekerAddress;

class JobSeekerController extends Controller
{
    public function register()
    {
        $all_categories = JobCategory::get();

    	return view('auth.jsregister', compact('all_categories'));
    }

    public function store(Request $request)
    {
    	// dd($request);

        if($request->has('image'))
                {
                    $file=$request->file('image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    $filesize=$file->getClientSize();
                    $file->move('images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }

    	$jobseekers = new JobSeeker;

    	$user_info = new User;

        $user_info->name = $request->seeker_name;
        $user_info->email = $request->seeker_email;
        $user_info->mobile = $request->phn_number;
        $user_info->role_id= 2;
        $user_info->password=bcrypt($request->password)?? bcrypt(123456);
        $user_info->save();

        $personal_info = new JobSeekerProfile;
        $personal_info->user_id = $user_info->id;
        $personal_info->save();

        $education_info = new JobSeekerEducation;
        $education_info->user_id = $user_info->id;
        $education_info->save();

        $address_info = new JobSeekerAddress;
        $address_info->user_id = $user_info->id;
        $address_info->save();
        
    	





    	$jobseekers->user_id = $user_info->id;
    	$jobseekers->seeker_name = $request->seeker_name;
    	$jobseekers->seeker_email = $request->seeker_email;
        $jobseekers->seeker_address = $request->seeker_address;
        $jobseekers->phn_number = $request->phn_number;

        $jobseekers->seeker_image = $filename;
        // dd($jobseekers);
    	$jobseekers->interested_area = $request->interested_area;    	
    
    	$jobseekers->save();


    	return redirect()->route('seeker.dashboard');

    }
}
