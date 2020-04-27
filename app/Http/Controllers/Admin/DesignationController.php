<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Designation;

class DesignationController extends Controller
{
    public function index()
    {
    	$designations = Designation::get();

    	return view ('BackEnd.designation', compact('designations'));
    }

    public function store (Request $request)
    {

    	$request->validate([
            'designation_name' => 'required',
         
        ]);

  		$designation = new Designation;
  		$designation->designation_name = $request->designation_name;
  		$designation->save();

      Toastr::success('Designation successfully created','Created');   

         return redirect()->route('admin.designation')
                         ->with('success','Designation added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$designation = Designation::find($id);
  		$designation->designation_name = $request->designation_name;
  		$designation->save();   

      Toastr::success('Designation successfully Updated','Updated');

         return redirect()->route('admin.designation')
                         ->with('success','Designation updated successfully.');
	
    }

    public function delete (Request $request,$id)
    {
      // dd($id);
    	Designation::find($id)->delete();

      Toastr::success('Designation successfully Deleted','Deleted');


    	 return redirect()->route('admin.designation')
                         ->with('success','Designation deleted successfully.');
    }
}
