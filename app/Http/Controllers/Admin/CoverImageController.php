<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\CoverImage;

class CoverImageController extends Controller
{
    public function index()
    {
    	$coverImage = CoverImage::get();

    	return view ('BackEnd.cover_image', compact('coverImage'));
    }

    public function store (Request $request)
    {
      $request->validate([
            // 'image' => 'required|file|min:180',
            'image' => 'dimensions:min_width=2000,min_height=1125'
        ]);

    	if($request->has('image'))
                {
                    $file=$request->file('image');
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    $filesize=$file->getClientSize();
                    $file->move('cover_images',$filename);
                    
                }
            else{
                    $filename='demo.png';
                }


  		$coverImage = new CoverImage;
  		$coverImage->image = $filename;
  		$coverImage->save();

      Toastr::success('Image successfully created','Created');   

         return redirect()->route('admin.coverImage')
                         ->with('success','Image added successfully.');
    }

    public function update (Request $request, $id)
    {
    	$coverImage = CoverImage::find($id);

      $request->validate([
            // 'image' => 'required|file|min:180',
            'image' => 'dimensions:min_width=2000,min_height=1125'
        ]);


    	if($request->has('image'))
                {
                    $file=$request->file('image');  
                    $filename='image'.time().'.'.$file->getClientOriginalExtension();
                    if ($coverImage->image) {
                       unlink('cover_images/'.$coverImage->image);
                    }
                    $filesize=$file->getClientSize();
                    $file->move('cover_images',$filename);
                    
                }

            else{
                    $filename=$coverImage->image;
                }



    	$coverImage->image = $filename;
    

    	$coverImage->save();

      Toastr::success('Image successfully Updated','Updated');

         return redirect()->route('admin.coverImage')
                         ->with('success','Image updated successfully.');
	
    }

    public function delete (Request $request,$id)
    {
      // dd($id);
    	CoverImage::find($id)->delete();

      Toastr::success('Image successfully Deleted','Deleted');


    	 return redirect()->route('admin.coverImage')
                         ->with('success','Image deleted successfully.');
    }

    public function changeStatus(Request $request)
    {
     
        $coverImage = CoverImage::find($request->id);
        $coverImage->status = $request->status;
        
        $coverImage->save();
  
        return response()->json(['success'=>'Image change successfully.']);
    }
}
