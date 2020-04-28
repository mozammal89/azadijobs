<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Institute;

class InstituteController extends Controller
{
    public function index()
    {
    	$institute = Institute::get();

    	return view ('BackEnd.institute', compact('institute'));
    }

    public function store (Request $request)
    {

    	$request->validate([
            'institute_name' => 'required',
            'institute_email' => 'required',
            'institute_address' => 'required',
            'institute_contact_number' => 'required',
         
        ]);

  		$institute = new Institute;
  		$institute->institute_name = $request->institute_name;
  		$institute->institute_email = $request->institute_email;
  		$institute->institute_address = $request->institute_address;
  		$institute->institute_contact_number = $request->institute_contact_number;
  		$institute->save();

      Toastr::success('Institute successfully created','Created');   

         return redirect()->route('admin.institute')
                         ->with('success','Institute added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$institute = Institute::find($id);
  		$institute->institute_name = $request->institute_name;
  		$institute->institute_email = $request->institute_email;
  		$institute->institute_address = $request->institute_address;
  		$institute->institute_contact_number = $request->institute_contact_number;
  		$institute->save();   

      Toastr::success('Institute successfully Updated','Updated');

         return redirect()->route('admin.institute')
                         ->with('success','Institute updated successfully.');
	
    }

    public function delete (Request $request,$id)
    {
      // dd($id);
    	Institute::find($id)->delete();

      Toastr::success('Institute successfully Deleted','Deleted');


    	 return redirect()->route('admin.institute')
                         ->with('success','Institute deleted successfully.');
    }
}
