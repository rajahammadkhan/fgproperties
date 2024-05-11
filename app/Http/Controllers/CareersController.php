<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developers;
use App\Models\Projects;
use App\Models\Properties;
use App\Models\Amenities;
use App\Models\Blog;
use App\Models\vacancies;
use App\Models\applicants;
use Illuminate\Support\Facades\Storage;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Storage;


class CareersController extends Controller
{
    public function index()
    {           
        $data = [
            'amenities'  => Amenities::limit(20)->get(),
            'developers' => Developers::inRandomOrder()->limit(6)->get(),
            'developers_for_nav' => Developers::get(),
            'vacancies' => vacancies::get(),
            
        ];
        return view('careers', $data);
    }

    public function apply(Request $request)
    {

        $applicant = new applicants;

        $applicant->full_name =  $request->full_name;
        $applicant->phone = $request->phone;
        $applicant->email = $request->email;
        $applicant->dob = $request->dob;
        $applicant->nationality = $request->nationality;
        $applicant->visa_status = $request->visa_status;
        $applicant->ready_to_join = $request->ready_to_join;
        $applicant->fluent_in_lang = $request->languages;
        $applicant->address = $request->address;
        $applicant->major = $request->major;
        $applicant->gender = $request->gender;
        $applicant->in_dubai = $request->location;
        $applicant->education_level = $request->education_level;
        $applicant->realestate_experience = $request->realestate_exp;
        $cv1 = Storage::disk('cms')->putFile('', $request->cv);
        $applicant->cv = $cv1;
        $applicant->designation = $request->designation;
        $applicant->department = $request->department;

        $applicant->save();

        $data['applicant_careers']=[ 
            $request->input('full_name'), 
            $request->input('phone'), 
            $request->input('email'),
            $request->input('dob'), 
            $request->input('nationality'), 
            $request->input('visa_status'), 
            $request->input('ready_to_join'), 
            $request->input('languages'), 
            $request->input('address'), 
            $request->input('major'), 
            $request->input('gender'), 
            $request->input('location'), 
            $request->input('education_level'), 
            $request->input('realestate_exp'), 
            $request->input('designation'), 
            $request->input('department'), 
        ];
        $user['To']=$request->input('email');
        // $user['Cc']=[('email1@gmail.com'), ('email2@gmail.com')];
        Mail::send('emails.applicant_careers',$data,function($messages) use ($user){
            $messages->To($user['To']);
            // $messages->Cc($user['Cc']);
            $messages->subject('Applicant Careers');
        });

        return redirect()->back()->with('message', 'YOUR REQUEST HAS BEEN SUBMITTED SUCCESSFULLY');
    }
}
