<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\District;

class DistrictController extends Controller
{
    public function index()
    {
    	$district = District::get();

    	return view ('BackEnd.district', compact('district'));
    }

    public function store (Request $request)
    {

    	$request->validate([
            'district_name' => 'required',
         
        ]);

  		$district = new District;
  		$district->district_name = $request->district_name;
  		$district->save();

      Toastr::success('District successfully created','Created');   

         return redirect()->route('admin.district')
                         ->with('success','District added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$district = District::find($id);
  		$district->district_name = $request->district_name;
  		$district->save();   

      Toastr::success('District successfully Updated','Updated');

         return redirect()->route('admin.district')
                         ->with('success','District updated successfully.');
	
    }

    public function delete (Request $request,$id)
    {
      // dd($id);
    	District::find($id)->delete();

      Toastr::success('District successfully Deleted','Deleted');


    	 return redirect()->route('admin.district')
                         ->with('success','District deleted successfully.');
    }
}
