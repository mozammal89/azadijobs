<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobProvider\JobProvider;
use App\JobCategory;

class ProviderListController extends Controller
{
    public function index()
    {
    	$list = JobProvider::get();

    	return view ('BackEnd.job_provider_list', compact('list'));
    }

    public function providersDetails($id)
    {
    	$details = JobProvider::find($id);

    	return view ('BackEnd.job_provider_details', compact('details'));
    }

    public function providersgetEdit($id)
    {
    	$edit = JobProvider::find($id);
    	$jobcategories = JobCategory::get();
    	return view ('BackEnd.job_provider_edit', compact('edit', 'jobcategories'));
    }

    public function providersEdit(Request $request, $id)
    {
    	$provider = JobProvider::find($id);


    	if($request->has('provider_image'))
                {
                    $file=$request->file('provider_image');  
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    if ($provider->image) {
                       unlink('images/'.$provider->image);
                    }
                    $filesize=$file->getClientSize();
                    $file->move('images',$filename);
                    
                }

            else{
                    $filename=$provider->image;
                }


    	

        $provider->provider_image = $filename;
        $provider->com_name = $request->com_name; 
        $provider->phn_number = $request->phn_number;
        $provider->email = $request->email;
    	$provider->com_address = $request->com_address;    	
    	$provider->com_web_link = $request->com_web_link; 
        $provider->com_business_type = $request->com_business_type; 
        $provider->trade_license = $request->trade_license; 
        $provider->tin_number = $request->tin_number; 
    	$provider->company_starting_date = $request->company_starting_date; 
    	$provider->save();

    	Toastr::success('Job Provider successfully Updated','Created');   

         return redirect()->route('admin.providerList')
                         ->with('success','Job Provider updated successfully.');
    }

    public function delete (Request $request, $id)
    {
    	JobProvider::find($id)->delete();

      	Toastr::success('Job Provider successfully Deleted','Deleted');


    	 return redirect()->route('admin.providerList')
                         ->with('success','Job Provider deleted successfully.'); 
    }

    public function changeStatus(Request $request)
    {
     //dd('test');
        $provider_status = JobProvider::find($request->id);
        $provider_status->status = $request->status;
        $provider_status->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
