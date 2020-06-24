<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Admin\FooterAboutUsTermsAndCondition;
use App\Admin\FooterAboutUsFeedbacks;
use App\Admin\FooterAboutUsAboutUs;
use App\Admin\FooterJobSeekersTermsAndCondition;
use App\Admin\FooterEmployersContacts;

class FooterController extends Controller
{
    public function index ()
    {
    	$dis = FooterAboutUsTermsAndCondition::get();
    	// dd($dis);
    	return view ('BackEnd.Footer.about_us_tc_index', compact('dis'));
    }

    public function create ()
    {
    	return view ('BackEnd.Footer.about_us_tc_create');
    }

    public function store (Request $request)
    {
    	// $request->validate([
     //        'describtions' => 'required',
         
     //    ]);


    	$describtions = new FooterAboutUsTermsAndCondition;

    	$describtions->describtions = $request->describtions;
		// dd($describtions);
    	$describtions->save();


    	Toastr::success('Terms & Condition successfully created','Created');   

         return redirect()->route('admin.aboutUsTandC')
                         ->with('success','Terms & Condition added successfully.');
    }

    public function details ($id)
    {
        $des_details = FooterAboutUsTermsAndCondition::find($id);

        return view ('BackEnd.Footer.about_us_tc_details',compact('des_details'));
    }

    public function aboutUsTandCGetEdit ($id)
    {
        $des_details = FooterAboutUsTermsAndCondition::find($id);
        return view ('BackEnd.Footer.about_us_tc_edit',compact('des_details'));
    }

    public function update (Request $request, $id)
    {
        $des_edit = FooterAboutUsTermsAndCondition::find($id);

        $des_edit->describtions = $request->describtions;
        // dd($describtions);
        $des_edit->save();

        Toastr::success('Terms & Condition successfully updated','Updated');   

         return redirect()->route('admin.aboutUsTandC')
                         ->with('success','Terms & Condition updated successfully.');
    }

    public function delete ($id)
    {
        FooterAboutUsTermsAndCondition::find($id)->delete();

        Toastr::success('Terms & Condition successfully Deleted','Deleted');


         return redirect()->route('admin.aboutUsTandC')
                         ->with('success','Terms & Condition deleted successfully.'); 
    }

    public function aboutUsFeedbackIndex()
    {
        $feedbacks = FooterAboutUsFeedbacks::get();

        return view ('BackEnd.Footer.about_us_feedbacks_index',compact('feedbacks'));

    }

    public function aboutUsFeedbackDetails($id)
    {
        $feedbacks_details = FooterAboutUsFeedbacks::find($id);

        return view ('BackEnd.Footer.about_us_feedbacks_details', compact('feedbacks_details'));
    }

    public function feedbackDelete($id)
    {
        FooterAboutUsFeedbacks::find($id)->delete();

        Toastr::success('Feedback successfully Deleted','Deleted');


         return redirect()->route('admin.aboutUsFeedback')
                         ->with('success','Feedback deleted successfully.'); 
    }

    public function aboutUsIndex()
    {
        $abt_us = FooterAboutUsAboutUs::get();

        return view ('BackEnd.Footer.about_us_about_us_index', compact('abt_us'));
    }

    public function aboutUsCreate()
    {
        return view ('BackEnd.Footer.about_us_about_us_create');
    }

    public function aboutUsStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'address' => 'required',
            'web_link' => 'required',
         
        ]);


        $about_us = new FooterAboutUsAboutUs;

        $about_us->email = $request->email;
        $about_us->web_link = $request->web_link;
        $about_us->mobile = $request->mobile;
        $about_us->tech_email = $request->tech_email;
        $about_us->sales_email = $request->sales_email;
        $about_us->address = $request->address;
        $about_us->describtion = $request->describtion;
        // dd($about_us);
        $about_us->save();


        Toastr::success('Information successfully created','Created');   

        return redirect()->route('admin.aboutUsAboutUs')
                         ->with('success','Information added successfully.');
    }

    public function aboutUsDetails($id)
    {   
        $about_us_details = FooterAboutUsAboutUs::find($id);

        return view ('BackEnd.Footer.about_us_about_us_details', compact('about_us_details'));
    }

    public function aboutUsGetEdit($id)
    {
        $about_us_details = FooterAboutUsAboutUs::find($id);

        return view ('BackEnd.Footer.about_us_about_us_edit', compact('about_us_details'));
    }

    public function aboutUsUpdate(Request $request, $id)
    {
        $about_us_edit = FooterAboutUsAboutUs::find($id);

        $about_us_edit->email = $request->email;
        $about_us_edit->web_link = $request->web_link;
        $about_us_edit->mobile = $request->mobile;
        $about_us_edit->tech_email = $request->tech_email;
        $about_us_edit->sales_email = $request->sales_email;
        $about_us_edit->address = $request->address;
        $about_us_edit->describtion = $request->describtion;
        // dd($about_us_edit);
        $about_us_edit->save();

        Toastr::success('Information successfully updated','Updated');   

        return redirect()->route('admin.aboutUsAboutUs')
                         ->with('success','Information updated successfully.');
    }

    public function aboutUsDelete($id)
    {
        FooterAboutUsAboutUs::find($id)->delete();

        Toastr::success('Information successfully Deleted','Deleted');


         return redirect()->route('admin.aboutUsAboutUs')
                         ->with('success','Information deleted successfully.'); 
    }

    public function jobSeekersTandCIndex ()
    {
        $dis = FooterJobSeekersTermsAndCondition::get();
        // dd($dis);
        return view ('BackEnd.Footer.job_seekers_tc_index', compact('dis'));
    }

    public function jobSeekersTandCCreate ()
    {
        return view ('BackEnd.Footer.job_seekers_tc_create');
    }

    public function jobSeekersTandCStore (Request $request)
    {
        // $request->validate([
     //        'describtions' => 'required',
         
     //    ]);


        $describtions = new FooterJobSeekersTermsAndCondition;

        $describtions->describtions = $request->describtions;
        // dd($describtions);
        $describtions->save();


        Toastr::success('Terms & Condition successfully created','Created');   

         return redirect()->route('admin.jobSeekersTandC')
                         ->with('success','Terms & Condition added successfully.');
    }

    public function jobSeekersTandCDetails ($id)
    {
        $des_details = FooterJobSeekersTermsAndCondition::find($id);

        return view ('BackEnd.Footer.job_seekers_tc_details',compact('des_details'));
    }

    public function jobSeekersTandCGetEdit ($id)
    {
        $des_details = FooterJobSeekersTermsAndCondition::find($id);
        return view ('BackEnd.Footer.job_seekers_tc_edit',compact('des_details'));
    }

    public function jobSeekersTandCUpdate (Request $request, $id)
    {
        $des_edit = FooterJobSeekersTermsAndCondition::find($id);

        $des_edit->describtions = $request->describtions;
        // dd($describtions);
        $des_edit->save();

        Toastr::success('Terms & Condition successfully updated','Updated');   

         return redirect()->route('admin.jobSeekersTandC')
                         ->with('success','Terms & Condition updated successfully.');
    }

    public function jobSeekersTandCDelete ($id)
    {
        FooterJobSeekersTermsAndCondition::find($id)->delete();

        Toastr::success('Terms & Condition successfully Deleted','Deleted');


         return redirect()->route('admin.jobSeekersTandC')
                         ->with('success','Terms & Condition deleted successfully.'); 
    }

    public function contactIndex()
    {
        $abt_us = FooterEmployersContacts::get();

        return view ('BackEnd.Footer.employers_contact_index', compact('abt_us'));
    }

    public function contactCreate()
    {
        return view ('BackEnd.Footer.employers_contact_create');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'address' => 'required',
            'web_link' => 'required',
         
        ]);


        $about_us = new FooterEmployersContacts;

        $about_us->email = $request->email;
        $about_us->web_link = $request->web_link;
        $about_us->mobile = $request->mobile;
        $about_us->tech_email = $request->tech_email;
        $about_us->sales_email = $request->sales_email;
        $about_us->address = $request->address;
        // dd($about_us);
        $about_us->save();


        Toastr::success('Information successfully created','Created');   

        return redirect()->route('admin.employersContact')
                         ->with('success','Information added successfully.');
    }

    public function contactDetails($id)
    {   
        $about_us_details = FooterEmployersContacts::find($id);

        return view ('BackEnd.Footer.employers_contact_details', compact('about_us_details'));
    }

    public function employersContactGetEdit($id)
    {
        $about_us_details = FooterEmployersContacts::find($id);

        return view ('BackEnd.Footer.employers_contact_edit', compact('about_us_details'));
    }

    public function contactUpdate(Request $request, $id)
    {
        $about_us_edit = FooterEmployersContacts::find($id);

        $about_us_edit->email = $request->email;
        $about_us_edit->web_link = $request->web_link;
        $about_us_edit->mobile = $request->mobile;
        $about_us_edit->tech_email = $request->tech_email;
        $about_us_edit->sales_email = $request->sales_email;
        $about_us_edit->address = $request->address;
        // dd($about_us_edit);
        $about_us_edit->save();

        Toastr::success('Information successfully updated','Updated');   

        return redirect()->route('admin.employersContact')
                         ->with('success','Information updated successfully.');
    }

    public function contactDelete($id)
    {
        FooterEmployersContacts::find($id)->delete();

        Toastr::success('Information successfully Deleted','Deleted');


         return redirect()->route('admin.employersContact')
                         ->with('success','Information deleted successfully.'); 
    }


}
