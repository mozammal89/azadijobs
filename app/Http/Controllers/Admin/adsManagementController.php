<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\AdsManagement;

class adsManagementController extends Controller
{
    public function index()
    {
    	$ads_info = AdsManagement::get();

    	return view ('BackEnd.ads_management', compact('ads_info'));
    }

    public function store(Request $request)
    {
    	if($request->has('image'))
                {
                    $file=$request->file('image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    $filesize=$file->getClientSize();
                    $file->move('ads_images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }

        $request->validate([
        	'ads_cat_name' => 'required',
        	'ads_cat_title' => 'required',
        	'ads_ref_url' => 'required',
        	'ads_position' => 'required',
        ]);

        $all_ads_info = new AdsManagement;

        $all_ads_info->ads_cat_name = $request->ads_cat_name;
        $all_ads_info->ads_cat_title = $request->ads_cat_title;
        $all_ads_info->ads_ref_url = $request->ads_ref_url;
        $all_ads_info->image = $filename;
        $all_ads_info->ads_position = $request->ads_position;
        $all_ads_info->start_date = $request->start_date;
        $all_ads_info->end_date = $request->end_date;
        $all_ads_info->save();

        Toastr::success('Ads Successfully Created','Created');   

         return redirect()->route('admin.adsManagement')
                         ->with('success','Ads added successfully.');
    }

    public function update(Request $request, $id) 
    {
    	$all_ads_info = AdsManagement::find($id);

    	if($request->has('image'))
                {
                    $file=$request->file('image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    if ($all_ads_info->image) {
                       unlink('ads_images/'.$all_ads_info->image);
                    }
                    $filesize=$file->getClientSize();
                    $file->move('ads_images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }

                $request->validate([
        	'ads_cat_name' => 'required',
        	'ads_cat_title' => 'required',
        	'ads_ref_url' => 'required',
        	'ads_position' => 'required',
        ]);

        $all_ads_info->ads_cat_name = $request->ads_cat_name;
        $all_ads_info->ads_cat_title = $request->ads_cat_title;
        $all_ads_info->ads_ref_url = $request->ads_ref_url;
        $all_ads_info->image = $filename;
        $all_ads_info->ads_position = $request->ads_position;
        $all_ads_info->start_date = $request->start_date;
        $all_ads_info->end_date = $request->end_date;
        $all_ads_info->save();

        Toastr::success('Ads successfully Updated','Created');   

         return redirect()->route('admin.adsManagement')
                         ->with('success','Ads updated successfully.');
    }

    public function delete($id)
    {
    	AdsManagement::find($id)->delete();

      Toastr::success('Ads successfully Deleted','Deleted');


    	 return redirect()->route('admin.adsManagement')
                         ->with('success','Ads deleted successfully.');
    }

    public function details($id)
    {
    	$ads_info = AdsManagement::find($id);

    	return view ('BackEnd.ads_management_details', compact('ads_info'));
    }

    public function changeStatus(Request $request)
    {
     //dd('test');
        $ads_info = AdsManagement::find($request->id);
        $ads_info->status = $request->status;
        $ads_info->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
