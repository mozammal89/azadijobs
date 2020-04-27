<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Employee;
use App\Department;
use App\Designation;

class EmployeeController extends Controller
{
    public function index()
    {
    	$employees = Employee::get();

    	return view ('BackEnd.employee', compact('employees'));
    }

    public function create()
    {
    	$department = Department::get();
    	$designation = Designation::get();

    	return view ('BackEnd.employee_create',compact('department','designation'));
    }

    public function store(Request $request)
    {
    	if($request->has('image'))
                {
                    $file=$request->file('image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    $filesize=$file->getClientSize();
                    $file->move('employee_images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }


    	$request->validate([
            'employee_name' => 'required',
            'employee_email' => 'required',
            'present_address' => 'required',
            'parmanent_address' => 'required',
            'employee_phone' => 'required',
         
        ]);

        $employee = new Employee;

    	$employee->employee_name = $request->employee_name;
    	$employee->employee_email = $request->employee_email;
    	$employee->present_address = $request->present_address;
    	$employee->nid = $request->nid;
    	$employee->employee_designation = $request->employee_designation;
    	$employee->employee_id = $request->employee_id;
    	$employee->employee_phone = $request->employee_phone;
    	$employee->dob = $request->dob;
    	$employee->parmanent_address = $request->parmanent_address;
    	$employee->passport = $request->passport;
    	$employee->employee_department = $request->employee_department;
    	$employee->image = $filename;
    

    	$employee->save();

    	Toastr::success('Employee successfully created','Created');   

         return redirect()->route('admin.employeeCreate')
                         ->with('success','Employee created successfully.');
    }

    public function employeeDetails($id)
    {
    	$details = Employee::find($id);
    	$department = Department::get();
    	$designation = Designation::get();

    	return view ('BackEnd.employee_details', compact('details','department','designation'));
    }

    public function employeeGetEdit ($id)
    {
    	$employee_edit = Employee::find($id);
    	$department = Department::get();
    	$designation = Designation::get();

    	return view ('BackEnd.employee_edit', compact('employee_edit','department','designation'));
    }

    public function employeeEdit(Request $request, $id)
    {


    	$employee = Employee::find($id);


    	if($request->has('image'))
                {
                    $file=$request->file('image');  
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    if ($employee->image) {
                       unlink('employee_images/'.$employee->image);
                    }
                    $filesize=$file->getClientSize();
                    $file->move('employee_images',$filename);
                    
                }

            else{
                    $filename=$employee->image;
                }


    	$request->validate([
            'employee_name' => 'required',
            'employee_email' => 'required',
            'present_address' => 'required',
            'parmanent_address' => 'required',
            'employee_phone' => 'required',
         
        ]);


    	$employee->employee_name = $request->employee_name;
    	$employee->employee_email = $request->employee_email;
    	$employee->present_address = $request->present_address;
    	$employee->nid = $request->nid;
    	$employee->employee_designation = $request->employee_designation;
    	$employee->employee_id = $request->employee_id;
    	$employee->employee_phone = $request->employee_phone;
    	$employee->dob = $request->dob;
    	$employee->parmanent_address = $request->parmanent_address;
    	$employee->passport = $request->passport;
    	$employee->employee_department = $request->employee_department;
    	$employee->image = $filename;
    

    	$employee->save();

    	Toastr::success('Employee successfully Updated','Created');   

         return redirect()->route('admin.employee')
                         ->with('success','Employee updated successfully.');

    }

    public function delete (Request $request, $id)
    {
    	Employee::find($id)->delete();

      	Toastr::success('Employee successfully Deleted','Deleted');


    	 return redirect()->route('admin.employee')
                         ->with('success','Employee deleted successfully.'); 
    }
}
