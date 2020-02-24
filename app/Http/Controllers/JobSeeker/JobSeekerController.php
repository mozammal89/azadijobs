<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSeeker\JobSeeker;
use App\User;
use Illuminate\Support\Facades\Auth;

class JobSeekerController extends Controller
{
    public function register()
    {
    	return view('auth.jsregister');
    }

    public function store(Request $request)
    {
    	// dd($request);

    	$jobseekers = new JobSeeker;
    	$user_info = new User;
    	$user_info->name = $request->seeker_name;
        $user_info->email = $request->seeker_email;
    	$user_info->mobile = $request->phn_number;
    	$user_info->role_id= 2;
    	$user_info->password=bcrypt($request->password)?? bcrypt(123456);
    	$user_info->save();

    	$jobseekers->user_id = $user_info->id;
    	$jobseekers->seeker_name = $request->seeker_name;
    	$jobseekers->seeker_email = $request->seeker_email;
        $jobseekers->seeker_address = $request->seeker_address;
        $jobseekers->phn_number = $request->phn_number;
        $jobseekers->seeker_Image = $request->seeker_Image??" ";
    	$jobseekers->interested_area = $request->interested_area;    	
    
    	$jobseekers->save();

    	

    	// $credential=[];
     //    $credential['email']=$request->seeker_email;
    	// $credential['mobile']=$request->phn_number;
    	// $credential['password']=$request->password;
    	// auth()->login();
    	// auth()->attempt($credential);

    	return redirect()->route('seeker.dashboard');

    	// return 'ok';
    	//return redirect()->route('login'); 
    }
}
