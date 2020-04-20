<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Training;
use App\TrainingCourseOutline;

class TrainingCourseOutlineController extends Controller
{
    public function index()
    {
    	
    	$training_course_outline = TrainingCourseOutline::get();

    	return view ('BackEnd.training_course_outline_lists', compact('training_course_outline'));
    }

    public function trainingCourseOutlineCreate()
    {
    	$training = Training::get();

    	return view ('BackEnd.training_course_outline_create', compact('training'));
    }

    public function trainingCourseOutlineStore(Request $request)
    {

    	// $request-> validate([
		// 	'training_id' => 'required',
		// 	'date' => 'required',
		// 	'type' => 'required',
		// 	'topic' => 'required',
		// 	'duration' => 'required',
		// 	'topic_describtion' => 'required'
		// ]);

		$RequestData = $request->all();


		// dd($RequestData);

		$trainingArray = (isset($RequestData['training_name'])? $RequestData['training_name'] : array() );
		$dateArray = (isset($RequestData['date'])? $RequestData['date'] : array() );
		$typeArray = (isset($RequestData['type'])? $RequestData['type'] : array() );
		$topicArray = (isset($RequestData['topic'])? $RequestData['topic'] : array() );
		$durationArray = (isset($RequestData['duration'])? $RequestData['duration'] : array() );
		$topic_describtionArray = (isset($RequestData['topic_describtion'])? $RequestData['topic_describtion'] : array() );


		foreach ($trainingArray as $key => $data ){


			$tco = new TrainingCourseOutline;
			// dd( $dateArray[$key] );

			$tco->training_id = $data;
			$tco->date = $dateArray[$key];
			$tco->topic =$typeArray[$key];
			$tco->type =$topicArray[$key];
			$tco->duration = $durationArray[$key];
			$tco->topic_describtion = $topic_describtionArray[$key];
	
			$tco->save();

		}   	

    	Toastr::success('Course Outline successfully created','Created');

    	 return redirect()->route('admin.trainingCourseOutline')
    	 					->with('success','Course Outline added successfully');
    }

    public function details($id)
    {
    	$tco_details = TrainingCourseOutline::find($id);

    	return view ('BackEnd.training_course_outline_details', compact('tco_details'));
    }

    public function trainingCourseGetEdit($id)
    {
    	$training = Training::get();
    	$training_course_outline = TrainingCourseOutline::get();
    	$tco_edit = TrainingCourseOutline::find($id);

    	return view('BackEnd.training_course_outline_edit',compact('tco_edit','training','training_course_outline'));
    }

    public function edit (Request $request, $id)
    {
    	$request-> validate([
			'training_id' => 'required',
			'date' => 'required',
			'type' => 'required',
			'topic' => 'required',
			'duration' => 'required',
			'topic_describtion' => 'required'
		]);


    	$training_course_outline_edit = TrainingCourseOutline::find($id);


		$training_course_outline_edit->training_id = $request->training_id;
		$training_course_outline_edit->date = $request->date;
		$training_course_outline_edit->topic = $request->topic;
		$training_course_outline_edit->type = $request->type;
		$training_course_outline_edit->duration = $request->duration;
		$training_course_outline_edit->topic_describtion = $request->topic_describtion;

		$training_course_outline_edit->save();

    
    

      Toastr::success('Training course outline successfully Updated','Updated');

         return redirect()->route('admin.trainingCourseOutline')
                         ->with('success','Training course outline updated successfully.');
	
    }


    public function delete ($id)
    {
    	TrainingCourseOutline::find($id)->delete();

      	Toastr::success('Training course outline successfully Deleted','Deleted');


    	 return redirect()->route('admin.trainingCourseOutline')
                         ->with('success','Training course outline deleted successfully.'); 
    }
}
