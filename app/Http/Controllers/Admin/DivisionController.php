<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
         
        ]);

  		$division = new Division;
  		$division->division_name = $request->division_name;
  		$division->save();   
         return redirect()->route('admin.division')
                         ->with('success','Division added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$division = Division::find($id);
  		$division->division_name = $request->division_name;
  		$division->save();   
         return redirect()->route('admin.division')
                         ->with('success','Division updated successfully.');
	
    }

    public function delete ($id)
    {
    	Division::find($id)->delete();
    	 return redirect()->route('admin.division')
                         ->with('success','Division updated successfully.');
    }
}
