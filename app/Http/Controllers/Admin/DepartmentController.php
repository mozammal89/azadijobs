<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
    	$departments = Department::get();

    	return view ('BackEnd.department', compact('departments'));
    }

    public function store (Request $request)
    {

    	$request->validate([
            'department_name' => 'required',
            'department_name' => 'required|unique:departments,department_name',
         
        ]);

  		$department = new Department;
  		$department->department_name = $request->department_name;
  		$department->save();

      Toastr::success('Department successfully created','Created');   

         return redirect()->route('admin.department')
                         ->with('success','Department added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$department = Department::find($id);
  		$department->department_name = $request->department_name;
  		$department->save();   

      Toastr::success('Department successfully Updated','Updated');

         return redirect()->route('admin.department')
                         ->with('success','Department updated successfully.');
	
    }

    public function delete (Request $request, $id)
    {
    	Department::find($id)->delete();

      Toastr::success('Department successfully Deleted','Deleted');


    	 return redirect()->route('admin.department')
                         ->with('success','Department deleted successfully.');
    }
}
