<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiries;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;

class InquiriesController extends Controller
{
    public function send(Request $request)
    {
        $inquiry = new Inquiries;
        $inquiry->ad_id = $request->ad_id;
        $inquiry->ad_name = $request->ad_name;
        $inquiry->name = $request->name;
        $inquiry->phone = $request->phone;
        $inquiry->email = $request->email;
        $inquiry->message = $request->message;
        $inquiry->type = $request->type;
        $inquiry->ad_type = $request->ad_type;
        $inquiry->bookedvisit = $request->date;
        $inquiry->save();

        $data['inquiry_form']=[
            $request->input('ad_id'), 
            $request->input('ad_name'), 
            $request->input('ad_type'), 
            $request->input('date'), 
            $request->input('name'), 
            $request->input('phone'), 
            $request->input('email'), 
            $request->input('message'), 
            $request->input('type'), 
        ];
        $user['To']=$request->input('email');        
        // $user['Cc']=[('email1@gmail.com'), ('email2@gmail.com')];
        Mail::send('emails.inquiry_form',$data,function($messages) use ($user){
            $messages->To($user['To']);
            // $messages->Cc($user['Cc']);
            $messages->subject('Booking Details');
        });

        return redirect()->back()->with('message', 'YOUR REQUEST HAS BEEN SUBMITTED SUCCESSFULLY');
    }

    public function contactagent(Request $request)
    {

        $data['contact_agent']=[
            $request->input('ad_name'), 
            $request->input('ad_type'), 
            $request->input('name'), 
            $request->input('email'), 
            $request->input('phone'), 
            $request->input('message'),
        ];
        $user['To']=$request->input('email');
        // $user['Cc']=[('email1@gmail.com'), ('email2@gmail.com')];
        Mail::send('emails.contact_agent',$data,function($messages) use ($user){
            $messages->To($user['To']);
            // $messages->Cc($user['Cc']);
            $messages->subject('Inquiry');
        });

        return redirect()->back()->with('message', 'YOUR MESSAGE HAS BEEN SENT TO OUR AGENT.');
    }
}
