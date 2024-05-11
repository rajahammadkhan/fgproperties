<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\mortgageLoan;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;

class mortgageLoanController extends Controller
{
    public function store(Request $request)
    {
        $mortgageLoan = new mortgageLoan;

        $mortgageLoan->name                        = $request->name;
        $mortgageLoan->email                       = $request->email;
        $mortgageLoan->phone                       = $request->phone;
        $mortgageLoan->monthly_installment         = $request->monthly_installment_sub;
        $mortgageLoan->loan_amount                 = $request->loan_amoun_sub;
        $mortgageLoan->property_price              = $request->property_price_sub;
        $mortgageLoan->down_payment                = $request->down_payment_sub;
        $mortgageLoan->interest_rate               = $request->interest_rate_sub;
        $mortgageLoan->loan_period                 = $request->loan_period_sub;
        $mortgageLoan->status                      = "Pending";
        $mortgageLoan->save();

        $data['mortgage']=[
            $request->input('ad_name'), 
            $request->input('name'), 
            $request->input('email'), 
            $request->input('phone'), 
            $request->input('monthly_installment_sub'), 
            $request->input('loan_amoun_sub'),  
            $request->input('loan_period_sub'), 
            $request->input('down_payment_sub'), 
            $request->input('interest_rate_sub'),
            $request->input('property_price_sub'), 
            "Pending", 
        ];
        $user['To']=$request->input('email');
        // $user['Cc']=[('email1@gmail.com'), ('email2@gmail.com')];
        Mail::send('emails.mortgage',$data,function($messages) use ($user){
            $messages->To($user['To']);
            // $messages->Cc($user['Cc']);
            $messages->subject('Mortgage Send Application');
        });

        return redirect()->back()->with('message', 'YOUR REQUEST HAS BEEN SUBMITTED SUCCESSFULLY');
    }
}
