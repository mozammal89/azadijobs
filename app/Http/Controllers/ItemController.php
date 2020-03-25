<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;



class ItemController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobseekerCv(Request $request)
    {
        // $items = DB::table("items")->get();
        // view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('FrontEnd.job_seeker_cv');
            return $pdf->download('FrontEnd.job_seeker_cv.pdf');
        }


        return view('FrontEnd.job_seeker_cv');
    }
}
