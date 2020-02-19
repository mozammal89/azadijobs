<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\SubCategory;
use App\JobCategory;

class subCategoryController extends Controller
{
    public function create ()
    {
    	
    	$category = JobCategory::get();
    	$sub_cat = SubCategory::get();
    	return view ('BackEnd.sub_category',compact('category','sub_cat'));

    	
    }

    public function store(Request $request) 
    {
   

    	$request-> validate([
    		'sub_category_name' => 'required','category_id' => 'required'
    	]);

    	$subcategory = new SubCategory;
    	$subcategory->sub_category_name = $request->sub_category_name;
    	$subcategory->cat_id = $request->category_id;
    	$subcategory->save();

    	Toastr::success('Sub Category successfully created','Created');

    	 return redirect()->route('admin.subcategory')
    	 					->with('success','Sub Category added successfully');

    }

    public function update (Request $request, $id)
    {
    	$request-> validate([
    		'sub_category_name' => 'required'
    	],[	
    		'sub_category_name.required'=>'You must fill the Category Name'

    	]);

    	$subcategory = SubCategory::find($id);
    	$subcategory->sub_category_name = $request->sub_category_name;
    	$subcategory->cat_id = $request->category_id;
    	$subcategory->save();
    	Toastr::success('Category successfully Updated','Updated');
    	
    	 return redirect()->route('admin.subcategory')
    	 					->with('success','Sub Category updated successfully');
    }

    public function delete ($id)
    {
    	SubCategory::find($id)->delete();
    	Toastr::warning('Sub Category Successfully Deleted ','Deleted');
    	return redirect()->route('admin.subcategory')
    	 					->with('success','Sub Category deleted successfully');
    }
}
