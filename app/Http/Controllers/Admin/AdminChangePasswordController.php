<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use Brian2694\Toastr\Facades\Toastr;

class AdminChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function adminChangePassword()
    {
    	return view ('BackEnd.admin_pass_change');
    }

     public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        Toastr::success('Password successfully Updated','Updated');

         return redirect()->route('admin.adminChangePassword')
                         ->with('success','Password updated successfully.');
    }
}