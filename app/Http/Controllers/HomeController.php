<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Testimonial;

class HomeController extends Controller
{
    //Home Page
    function home(){
        $testimonials=Testimonial::all();
        return view('home',['testimonials'=>$testimonials]);
    }

     public function dis($title)
    {
        $room= RoomType::find($title);
        // return view('checkroom', ['data'=>$room]);
        return view('checkroom', compact('room'));
    }

    //Add testimonial
    function add_testimonial(){
        return view('add-testimonial');
    }

    //Save testimonial
    function save_testimonial(Request $request){
        $customerId = session('data')[0]->id;
        $data = new Testimonial;
        $data->customer_id= $customerId;
        $data->testi_cont=$request->testi_cont;
        $data->save();

        return redirect('customer/add-testimonial')->with('success','Data has been added.');
    }
}
