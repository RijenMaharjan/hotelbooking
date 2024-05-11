<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mail;

class PageController extends Controller
{
    // Contact Us Form
    function contact_us(){
        return view('contact_us');
    }

     // Save Contact Us Form
    function save_contactus(Request $request){
         $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'msg'=>'required',
        ]);

        $data = array(
            'name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        );

        Mail::send('mail', $data, function($message){
            $message->to('cruellareyna@gmail.com', 'RijenMaharjan')->subject('Contacy Us Query');
            $message->from('rijenmhrzn94@gmail.com', 'hotel');
        });
        return redirect('page/contact-us')->with('contact_success','Mail has been sent.');

    }
}
