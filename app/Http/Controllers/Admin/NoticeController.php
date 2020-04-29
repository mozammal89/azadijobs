<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Notice;
use Carbon\Carbon;

class NoticeController extends Controller
{
    public function index()
    {
    	
    		// dd($today);
    	$notice = Notice::get();

    	return view ('BackEnd.notice', compact('notice'));
    }

    public function store (Request $request)
    {

    	$request->validate([
            'notice_title' => 'required',
            'notice_describtion' => 'required',
         
        ]);

  		$notice = new Notice;
  		$notice->notice_title = $request->notice_title;
  		$notice->notice_describtion = $request->notice_describtion;
  		$notice->save();

      Toastr::success('Notice successfully created','Created');   

         return redirect()->route('admin.notice')
                         ->with('success','Notice added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$notice = Notice::find($id);
  		$notice->notice_title = $request->notice_title;
  		$notice->notice_describtion = $request->notice_describtion;
  		$notice->save();   

      Toastr::success('Notice successfully Updated','Updated');

         return redirect()->route('admin.notice')
                         ->with('success','Notice updated successfully.');
	
    }

    public function delete (Request $request,$id)
    {
      // dd($id);
    	Notice::find($id)->delete();

      Toastr::success('Notice successfully Deleted','Deleted');


    	 return redirect()->route('admin.notice')
                         ->with('success','Notice deleted successfully.');
    }

    public function changeStatus(Request $request)
    {
     //dd('test');
		$date = Carbon::today();
    	$today = $date->format('Y-m-d');
    	$date = Carbon::now();
        $notice = Notice::find($request->id);
        $notice->status = $request->status;
        if($request->status == 0)
        {
        	$notice->deactive_date = $today;
        }
        elseif($request->status == 1)
        {
        	$notice->active_date = $today;
        	$notice->deactive_date = '';
        }
        
        $notice->save();
  
        return response()->json(['success'=>'Notice change successfully.']);
    }
}
