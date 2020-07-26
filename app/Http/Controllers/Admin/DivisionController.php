<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Division;

class DivisionController extends Controller
{
    public function division ()
    {
    	$divisions = Division::get();
    	// dd($divisions);
    	return view ('BackEnd.division',compact('divisions'));
    }

    public function store (Request $request)
    {

    	$request->validate([
            'division_name' => 'required',
            'division_name' => 'required|unique:divisions,division_name',
         
        ]);

  		$division = new Division;
  		$division->division_name = $request->division_name;
  		$division->save();

      Toastr::success('Division successfully created','Created');   

         return redirect()->route('admin.division')
                         ->with('success','Division added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$division = Division::find($id);
  		$division->division_name = $request->division_name;
  		$division->save();   

      Toastr::success('Division successfully Updated','Updated');

         return redirect()->route('admin.division')
                         ->with('success','Division updated successfully.');
	
    }

    public function delete ($id)
    {
    	Division::find($id)->delete();

      Toastr::success('Division successfully Deleted','Deleted');


    	 return redirect()->route('admin.division')
                         ->with('success','Division deleted successfully.');
    }
}
