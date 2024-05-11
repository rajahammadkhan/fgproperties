<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;
use App\Models\Developers;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;

class SellController extends Controller
{
    public function index()
    {
        $data = [
            'developers' => Developers::inRandomOrder()->limit(6)->get(),
            'sell'    => Sell::get(),
            'developers_for_nav' => Developers::get(),
            
        ];
        return view('sell', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        
        $sell         =   new Sell;

        $image = Storage::disk('cms')->putFile('', $request->title_image);
        $sell->title_image  =   $image;
        $passport_image = Storage::disk('cms')->putFile('', $request->passport_image);
        $sell->passport_image  =   $passport_image;

        $sell->name   =   $request->name;
        $sell->email   =   $request->email;
        $sell->number   =   $request->number;
        $sell->url   =   $request->url;
        $sell->type   =   $request->property_type;
        $sell->bedrooms   =   $request->bedrooms;
        $sell->area   =   $request->size_sqft;
        $sell->unitno   =   $request->unit_no;
        $sell->price   =   $request->price;
            $img = '';

        if($request->has('multi_images')){
            foreach($request->multi_images as $gallery_img){
                $imageName = Storage::disk('cms')->putFile('', $gallery_img);
                $img .=$imageName.",";
            }
        }
        $sell->images  =  $img;

        $sell->save();

        $data['sell_form']=[ 
            $request->input('name'), 
            $request->input('email'), 
            $request->input('number'), 
            $request->input('url'), 
            $request->input('property_type'),  
            $request->input('bedrooms'), 
            $request->input('size_sqft'), 
            $request->input('unit_no'),
            $request->input('price'), 
        ];
        $user['To']=$request->input('email');
        // $user['Cc']=[('email1@gmail.com'), ('email2@gmail.com')];
        Mail::send('emails.sell_form',$data,function($messages) use ($user){
            $messages->To($user['To']);
            // $messages->Cc($user['Cc']);
            $messages->subject('Sell Property');
        });

        // return redirect()->route('sell');
        return redirect()->back()->with('message', 'YOUR FORM HAS BEEN SUBMITTED SUCCESSFULLY');
    }
}
