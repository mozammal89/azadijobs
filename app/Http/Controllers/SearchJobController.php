<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobProvider\JobPost;
use App\Division;
use App\JobCategory;
use DB;

class SearchJobController extends Controller
{
    public function index (Request $request)
    {
    	
    	$search_job_title = $request->job_title;
        $search_division_name = $request->division_name;
    	$search_job_category_name = $request->job_category_name;

    	$job_post = JobPost::

    	where(function ($job_post) use ($search_job_title, $search_division_name, $search_job_category_name) {
                    if (!empty($search_job_title)) {
                        $job_post->where('job_title', 'LIKE', "%{$search_job_title}%")
                                    ->orWhere('job_context', 'LIKE', "%{$search_job_title}%")
                                    ->orWhere('job_responsibilities', 'LIKE', "%{$search_job_title}%")
                                    ->orWhere('additional_requirements', 'LIKE', "%{$search_job_title}%")
                                    ->orWhere('application_note', 'LIKE', "%{$search_job_title}%");
                    }

                    if (!empty($search_division_name)) {
                        $job_post->where('job_location', '=', $search_division_name);
                    }

                    if (!empty($search_job_category_name)) {
                        $job_post->where('category', '=', $search_job_category_name);
                    }

                   

                })
    	->get();

    	
    	// dd($job_post);

    	return view ('FrontEnd.search_result', compact('job_post'));
    }

    public function searchResultDetails ($id)
    {
    	$all_JobPost = JobPost::find($id);

    	// dd($all_JobPost);

    	return view('FrontEnd.search_result_details', compact('all_JobPost'));

    }
}
