<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\RoomType;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
// use Cookie;

class AdminController extends Controller
{
    // Login
    function login(){
        return view('login');
    }
    // Check Login
    function check_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $admin=Admin::where(['username'=>$request->username,'password'=>$request->password])->count();
        if($admin>0){
            $adminData =Admin::where(['username'=>$request->username,'password'=>$request->password])->get();
            session(['adminData'=>$adminData]);

            if($request->has('rememberme')){
                Cookie::queue('adminuser',$request->username,1440);
                Cookie::queue('adminpwd',$request->password,1440);
            }

            return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg','Invalid username/Password!!');
        }
    }
    // Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }

    function dashboard(){
        $bookings = Booking::selectRaw('count(id) as total_bookings,checkin_date')->groupBy('checkin_date')->get();

        $labels=[];
        $data=[];
        foreach($bookings as $booking){
            $labels[] = $booking['checkin_date'];
            $data[] = $booking['total_bookings'];
        }

        // For Pie-Chart
        $rtbookings=DB::table('room_types as rt')
            ->join('rooms as r','r.room_type_id','=','rt.id')
            ->join('bookings as b','b.room_id','=','r.id')
            ->select('rt.*','r.*','b.*',DB::raw('count(b.id) as total_bookings'))
            ->groupBy('r.room_type_id')
            ->get();

            $plabels=[];
            $pdata=[];
            foreach($rtbookings as $rbooking){ 
                $plabels[]=$rbooking->detail;
                $pdata[]=$rbooking->total_bookings;
        }

        return view('dashboard',['labels'=>$labels,'data'=>$data, 'plabels'=>$plabels,'pdata'=>$pdata]);
    }

    public function home(){
        $room = RoomType::all();
        return view('room', compact('room'));
    }
    // public function display(){
    //     $roomTypes = RoomType::all();
    //     return view('checkroom', compact('roomTypes'));
    // }
    public function display(Request $request)
    {
        if ($request->has('checkin_date')) {
            // Handle form submission and get available rooms
            $checkinDate = $request->input('checkin_date');
            $availableRooms = $this->getAvailableRooms($checkinDate);

            // Set the available rooms data in the session
            session(['availableRooms' => $availableRooms]);
            // Pass available room data to the view
            return view('checkroom', compact('availableRooms'));
        }

        // If the form is not submitted, display the form
        $roomTypes = RoomType::all();
        return view('checkroom', compact('roomTypes'));
    }

    public function getAvailableRooms($checkinDate)
    {
        // dd($checkinDate);
        $bookedRoomIds = Booking::where('checkin_date', $checkinDate)->pluck('room_id')->toArray();
        // Get all room types
        // $allRoomTypes = RoomType::all();
        // $allRoomTypes = RoomType::with('roomTypeImgs')->get();

          // Filter out booked room types
        // $availableRooms = $allRoomTypes->reject(function ($roomType) use ($bookedRoomIds) {
        //     return in_array($roomType->id, $bookedRoomIds);
        // });
        $availableRooms = RoomType::whereNotIn('id', $bookedRoomIds)->with('roomTypeImgs')->get();


        return $availableRooms;
    }

     public function testimonials()
    {
        $data=Testimonial::all();
        return view('admin_testimonials',['data'=>$data]);
    }

    public function destroy_testimonial($id)
    {
       Testimonial::where('id',$id)->delete();
       return redirect('admin/testimonials')->with('success','Data has been deleted.');
    }
}
