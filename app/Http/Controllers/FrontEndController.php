<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\JobProvider\JobPost;
use App\Division;
use App\User;
use App\Training;
use App\TrainingCourseOutline;
use DB;

class FrontEndController extends Controller
{
    // public function jobdetails($id)
    // {
    // 	$latestJobDetails = JobPost::latest()->where('id',$id)->get();
    // 	$jobDetails = JobPost::latest()->take(8)->get();

    // 	return view('FrontEnd.job_details', compact('latestJobDetails','jobDetails'));
    // }

    public function postjobdetails ($id)
    {
    	$latestJobDetails = JobPost::latest()->where('id',$id)->get();
    	$fc = $latestJobDetails[0]->category;
    	$jobDetails = JobPost::latest()->where('category',$fc)->take(4)->get();

    	return view('FrontEnd.job_details', compact('latestJobDetails','jobDetails'));
    }

    // public function browseAllJobs()
    // {
    //     $jobPost = jobPost::latest()->take(10)->get();

    //     return view('FrontEnd.browse_all_jobs', compact('jobPost'));
    // }

    function browseAllJobs()
    {
      
     return view('FrontEnd.browse_all_jobs');
    }

    function load_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->id > 0)
      {
       $data = DB::table('job_provider_job_post')
          ->leftjoin('divisions', 'divisions.id', '=', 'job_provider_job_post.job_location')
          ->select('job_provider_job_post.id','job_provider_job_post.job_title','job_provider_job_post.employment_status','job_provider_job_post.application_deadline','job_provider_job_post.job_location','divisions.division_name')
          ->where('job_provider_job_post.id', '<', $request->id)
          ->orderBy('job_provider_job_post.id', 'DESC')
          ->limit(5)
          ->get();
          
      }
      else
      {
       $data = DB::table('job_provider_job_post')
          ->leftjoin('divisions', 'divisions.id', '=', 'job_provider_job_post.job_location')
          ->select('job_provider_job_post.id','job_provider_job_post.job_title','job_provider_job_post.employment_status','job_provider_job_post.application_deadline','job_provider_job_post.job_location','divisions.division_name')
          ->orderBy('job_provider_job_post.id', 'DESC')
          ->limit(5)
          ->get();
      }
      $output = '';
      $lst_id = '';
      
      if(!$data->isEmpty())
      {
       foreach($data as $row)
       {
        $output .= '
        <ul class="post-job-bx">
            <li>
                <a href="post/jobdetails/'.$row->id.'">
                    <div class="d-flex m-b30">
                        <div class="job-post-company">
                            <span><img src="../FrontEnd/images/logo/icon1.png"/></span>
                        </div>
                        <div class="job-post-info">
                          <h4> '.$row->job_title.' </h4>
                          <ul>
                            <li><i class="fa fa-map-marker"></i> '.$row->division_name.' </li>
                            <li><i class="fa fa-bookmark-o"></i> '.$row->employment_status.' </li>
                            <li><i class="fa fa-clock-o"></i> '.$row->application_deadline.' </li>
                          </ul>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="job-time mr-auto">
                          <span> '.$row->employment_status.' </span>
                        </div>
                      </div>
                    </div>
                </a>
            </li>
        </ul>
        ';
        $lst_id = $row->id;
       }

       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success" data-id="'.$lst_id.'" id="load_more_button">Load More</button>
       </div>
       ';
      }
      else
      { 
       $output .= '
       <div id="no_data">
        <button type="button" class="btn btn-info">No Data Found</button>
       </div>
       ';
      }
      echo $output;
     }
    }

    function browseAllCat()
    {
      
     return view('FrontEnd.browse_all_categories');
    }

    function load_cat(Request $request)
    {
     if($request->ajax())
     {
      if($request->id > 0)
      {
       $data = DB::table('job_categories')
          ->where('id', '<', $request->id)
          ->orderBy('id', 'DESC')
          ->limit(5)
          ->get();
          
      }
      else
      {
       $data = DB::table('job_categories')
          ->orderBy('id', 'DESC')
          ->limit(5)
          ->get();
      }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty())
      {
       foreach($data as $row)
       {
        $output .= '
        <div class="row sp20">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="icon-bx-wraper">
              <div class="icon-content">
                <div class="icon-md text-primary m-b20"><i class="fas fa-palette"></i></div>
                <a href="#" class="dez-tilte">'.$row->job_category_name.'</a>
                <p class="m-a0">Open Positions</p>
              </div>
            </div>        
          </div>
        </div>
        ';
        $last_id = $row->id;
       }

       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success" data-id="'.$last_id.'" id="load_more_button">Load More</button>
       </div>
       ';
      }
      else
      { 
       $output .= '
       <div id="no_data">
        <button type="button" class="btn btn-info">No Data Found</button>
       </div>
       ';
      }
      echo $output;
     }
    }

    public function trainingIndex ()
    {
      $training_list = Training::get();

      return view ('FrontEnd.training_list',compact('training_list'));
    }

    public function trainingDetails ($id)
    {
      $TrainingDetails = Training::find($id);

      return view ('FrontEnd.training_details', compact('TrainingDetails'));
    }

    public function trainingCourseOutlineDetails ($id)
    {
      $tco_details = TrainingCourseOutline::find($id);

      return view ('FrontEnd.training_course_outline_details', compact('tco_details'));
    }

}
