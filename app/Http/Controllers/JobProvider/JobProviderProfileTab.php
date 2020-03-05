<?php

namespace App\Http\Controllers\JobProvider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobProvider\JobProvider;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;

class JobProviderProfileTab extends Controller
{
    public function profile ()
    {
    	$all_profiles = JobProvider::get();
    	// dd($all_profiles);
    	// dd($all_profiles[0]->com_name);
		$all_categories = JobCategory::get();

    	return view ('FrontEnd.job_providers_tab', compact('all_profiles','all_categories'));
    }

    public function update (Request $request, $id)
    {
    	$profile = JobProvider::find($id);
  		$profile->com_name = $request->com_name;
  		$profile->com_address = $request->com_address;
  		$profile->com_web_link = $request->com_web_link;
  		$profile->com_business_type = $request->com_business_type;
  		$profile->phn_number = $request->phn_number;
  		$profile->email = $request->email;
  		$profile->save();   

      Toastr::success('Profile successfully Updated','Updated');

         return redirect()->route('profile.jobprovider')
                         ->with('success','Profile updated successfully.');
	
    }
}
