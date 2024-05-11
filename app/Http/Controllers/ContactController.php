<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Developers;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {   
        $data = [
            'developers' => Developers::inRandomOrder()->limit(6)->get(),
            'developers_for_nav' => Developers::get(),
            
        ];
        return view('contactus' ,$data);
    }

    public function contactsend(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $data['contact_us']=[ 
            $request->input('name'), 
            $request->input('email'), 
            $request->input('phone'),
            $request->input('message'), 
        ];
        $user['To']=$request->input('email');
        // $user['Cc']=[('email1@gmail.com'), ('email2@gmail.com')];
        Mail::send('emails.contact_us',$data,function($messages) use ($user){
            $messages->To($user['To']);
            // $messages->Cc($user['Cc']);
            $messages->subject('Contact Inquirie');
        });

        return redirect()->back()->with('message', 'YOUR REQUEST HAS BEEN SUBMITTED SUCCESSFULLY');
    }
}
