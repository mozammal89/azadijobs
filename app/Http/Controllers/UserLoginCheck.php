<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserLoginCheck extends Controller
{

	public $redirectTo;

    public function authenticate(Request $request){

    		$request->validate([
    		    				'name'=>'required',
    		    				'password'=>'required'],[

    		    					'name.required'=>'Enter Valid Email or Phone Number'    		    					
    		    				]);

    		$checkByEmail=User::where('email',$request->name)->first();
    		$checkByPhone=User::where('mobile',$request->name)->first();

    		
    		if($checkByEmail){

    				$credential=[];

    				$credential['email']= $request['name'];
    				$credential['password']= $request['password'];


					  // dd($credential);


			   if(Auth::attempt($credential)){			   	



					 if(Auth::check() && Auth::user()->role_id==1){

				                return redirect()->route('admin.dashboard');

				        }elseif(Auth::check() && Auth::user()->role_id==2){

				              return redirect()->route('seeker.dashboard');
				        }else{

				                return redirect()->route('provider.dashboard');

				        }

			   }  }	

			   if($checkByPhone){

			   	$credential=[];

    				$credential['mobile']= $request['name'];
    				$credential['password']= $request['password'];


					  // dd($credential);


			   if(Auth::attempt($credential)){			   	



					 if(Auth::check() && Auth::user()->role_id==1){

				                return redirect()->route('admin.dashboard');

				        }elseif(Auth::check() && Auth::user()->role_id==2){

				              return redirect()->route('seeker.dashboard');
				        }else{

				                return redirect()->route('provider.dashboard');

				        }

			   }

			   }



    		
    	



    }
}




	        



