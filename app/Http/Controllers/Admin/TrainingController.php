<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Training;

class TrainingController extends Controller
{
    public function index()
    {
    	$all_training = Training::get();
    	return view ('BackEnd.training', compact('all_training'));
    }

    public function trainingCreate()
    {
    	return view ('BackEnd.training_create');
    }

    public function trainingStore(Request $request)
    {
    	$training = new Training;

    	$training->training_title = $request->training_title;
    	$training->training_subject = $request->training_subject;
    	$training->training_describtion = $request->training_describtion;
    	$training->training_name = $request->training_name;
    	$training->training_number = $request->training_number;
    	$training->training_address = $request->training_address;
    	$training->training_place = $request->training_place;
    	$training->training_hour = $request->training_hour;
    	$training->save();

    	Toastr::success('Training successfully created','Created');   

         return redirect()->route('admin.training')
                         ->with('success','Training added successfully.');
    }

    public function trainingDetails($id)
    {
    	$TrainingDetails = Training::find($id);
    	return view('BackEnd.training_details', compact('TrainingDetails'));
    }

    public function traininggetEdit($id)
    {
    	$trainingDetails = Training::find($id);
    	return view('BackEnd.training_edit',compact('trainingDetails'));
    }

     public function trainingEdit (Request $request, $id)
    {
    	$edit_training = Training::find($id);

    	$edit_training->training_title = $request->training_title;
    	$edit_training->training_subject = $request->training_subject;
    	$edit_training->training_describtion = $request->training_describtion;
    	$edit_training->training_name = $request->training_name;
    	$edit_training->training_number = $request->training_number;
    	$edit_training->training_address = $request->training_address;
    	$edit_training->training_place = $request->training_place;
    	$edit_training->training_hour = $request->training_hour;
    	$edit_training->save();
    

      Toastr::success('Training successfully Updated','Updated');

         return redirect()->route('admin.training')
                         ->with('success','Training updated successfully.');
	
    }


    public function delete ($id)
    {
    	Training::find($id)->delete();

      	Toastr::success('Training successfully Deleted','Deleted');


    	 return redirect()->route('admin.training')
                         ->with('success','Training deleted successfully.'); 
    }
}
