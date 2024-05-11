<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings= Booking::all();
        return view('booking.index',['data'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('booking.create',['data'=>$customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id'=>'required',
            'room_id'=>'required',
            'checkin_date'=>'required',
            'checkout_date'=>'required',
            'total_adults'=>'required',
            // 'total_children' => 'nullable|numeric',
        ]);

        $data = new Booking;
        $data->customer_id=$request->customer_id;
        $data->room_id=$request->room_id;
        $data->checkin_date=$request->checkin_date;
        $data->checkout_date=$request->checkout_date;
        $data->total_adults=$request->total_adults;
        $data->total_children=$request->total_children;
        $data->save();
        // $ref = $request->has('reff') ? $request->reff : 'cashPayment';
         $ref = $request->reff;
        if($ref == 'front'){
            // dd($request->all());
            return redirect('/')->with('suc','Booknig Successful.');
        }

        return redirect('admin/booking/create')->with('success','Data has been added.');
    }

    // Check available rooms
    function available_rooms(Request $request, $checkin_date){
        $arooms=DB::SELECT("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE '$checkin_date' BETWEEN checkin_date AND checkout_date)");

        $data=[];
        foreach($arooms as $room){
            $roomtypes =RoomType::find($room->room_type_id);
            $data[]=['room'=>$room,'roomtype'=>$roomtypes];
        }

        return response()->json(['data'=>$data]);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Booking::where('id',$id)->delete();
        return redirect('admin/booking')->with('success','Data has been deleted.');
    }

    public function front_booking()
    {
        // $userId =session('customerlogin');
        // $booking = Booking::where('customer_id', $userId)->get();
        // return view('userbooking',['data' => $booking]);
        
        if (session()->has('customerlogin')) {
        $userId = session('customerlogin');
        // Retrieve bookings for the logged-in customer
        $booking = Booking::where('customer_id', $userId)->get();
        // dd($booking);
        
        // Pass the booking data to the view
        return view('userbooking', ['data' => $booking]);
    } else {
        // Redirect to login or handle the case where the session variable is not set
        return redirect()->route('home'); // Adjust the route name accordingly
    }
    }
}
