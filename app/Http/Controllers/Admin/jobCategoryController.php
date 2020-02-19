<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\JobCategory;

class jobCategoryController extends Controller
{
    public function jobcategory ()
    {
    	
    	$jobcategories = JobCategory::get();
    	// dd($jobcategories);
    	return view ('BackEnd.job_category',compact('jobcategories'));

    	
    }

    public function store(Request $request) 
    {
    	$request-> validate([
    		'job_category_name' => 'required|unique:job_categories'
    	]);

    	$jobcategory = new JobCategory;
    	$jobcategory->job_category_name = $request->job_category_name;
    	$jobcategory->save();

    	Toastr::success('Category successfully created','Created');

    	 return redirect()->route('admin.jobcategory')
    	 					->with('success','Category added successfully');

    }

    public function update (Request $request, $id)
    {
    		$request-> validate([
    		'job_category_name' => 'required'
    	],[	
    		'job_category_name.required'=>'You must fill the Category Name'

    	]);

    	$jobcategory = JobCategory::find($id);
    	$jobcategory->job_category_name = $request->job_category_name;
    	$jobcategory->save();
    	Toastr::success('Category successfully Updated','Updated');
    	
    	 return redirect()->route('admin.jobcategory')
    	 					->with('success','Category updated successfully');

    }

    public function delete ($id)
    {
    	JobCategory::find($id)->delete();
    	Toastr::warning('Category Successfully Deleted ','Deleted');
    	return redirect()->route('admin.jobcategory')
    	 					->with('success','Category deleted successfully');
    }

}
