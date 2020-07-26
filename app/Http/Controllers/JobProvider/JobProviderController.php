<?php

namespace App\Http\Controllers\JobProvider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobProvider\JobProvider;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\JobCategory;
class JobProviderController extends Controller
{
    public function register () 
    {
        $all_categories = JobCategory::get();
    	return view('auth.jpregister', compact('all_categories'));
    }

    public function store(Request $request)
    {
    	// dd($request);

        $this->validate($request,[
            'phn_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
            ]);


        if($request->has('provider_image'))
                {
                    $file=$request->file('provider_image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    $filesize=$file->getClientSize();
                    $file->move('images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }

                
    	$jobproviders = new JobProvider;
    	$user_info = new User;
    	$user_info->name = $request->com_name;
        $user_info->email = $request->email;
    	$user_info->mobile = $request->phn_number;
    	$user_info->role_id = 3;
    	$user_info->password = bcrypt($request->password);
    	$user_info->save();

        


        $jobproviders->provider_image = $filename;
    	$jobproviders->user_id = $user_info->id;
        $jobproviders->com_name = $request->com_name; 
        $jobproviders->phn_number = $request->phn_number;
        $jobproviders->email = $request->email;
    	$jobproviders->com_address = $request->com_address;    	
    	$jobproviders->com_web_link = $request->com_web_link; 
        $jobproviders->com_business_type = $request->com_business_type; 
        $jobproviders->trade_license = $request->trade_license; 
        $jobproviders->tin_number = $request->tin_number; 
    	$jobproviders->company_starting_date = $request->company_starting_date; 
    	$jobproviders->save();

    	

    	$credential=[];
        $credential['email']=$request->email;
    	$credential['mobile']=$request->phn_number;
    	$credential['password']=$request->password;
    	// auth()->login();
    	// auth()->attempt($credential);

    	return redirect()->route('provider.dashboard');

    	// return 'ok';
    	//return redirect()->route('login'); 
    }
}
