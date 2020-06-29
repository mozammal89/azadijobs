<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobProvider\JobProvider;
use App\JobSeeker\JobSeeker;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function jpChangePass()
    {
    	$list = User::where('role_id','3')->get();
    	return view ('BackEnd.jp_list', compact('list'));
    }

    public function AllProvidersChangePassword($id)
    {
    	$jp_pass_change = User::find($id);
    	return view ('BackEnd.jp_pass_change', compact('jp_pass_change'));
    }

    public function AllProvidersEdit(Request $request, $id)
    {
    	$hashPassword = User::find($id)->password;

    	if (Hash::check($request->current_password, $hashPassword)) {

    		$update = User::find($id);
    		$update->password = Hash::make($request->new_password);
    		$update->save();

    		Toastr::success('Password successfully Updated','Updated');

         	return redirect()->route('admin.AllProviders')
                         ->with('success','Password updated successfully.');

    	} else {
    		Toastr::success('Current Password is Invalid','Error');

         	return redirect()->route('admin.AllProvidersEdit')
                         ->with('danger','Current Password is Invalid');
    	}

      
    }
}
