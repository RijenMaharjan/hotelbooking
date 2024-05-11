<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Customer::all();
        return view('customer.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {

        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required',
        ]);

        if($request->hasFile('photo')){
        $imgPath = $request->file('photo')->store('public/imgs');
        }else{
            $imgPath='';
        }
        
        $data = new Customer;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=md5($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->photo=$imgPath;
        $data->save();

        $ref = $request->ref;
        if($ref == 'front'){
            return redirect('/')->with('success','Registration Successful.');
        }

        return redirect('admin/customer/create')->with('success','Data has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Customer::find($id);
        return view('customer.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Customer::find($id);
        return view('customer.edit', ['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
        ]);

        if($request->hasFile('photo')){
            $imgPath = $request->file('photo')->store('public/imgs');
        }else{
            $imgPath = $request->prev_photo;
        }
        
        $data = Customer::find($id);
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=md5($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->photo=$imgPath;
        $data->save();

        return redirect('admin/customer/'.$id.'/edit')->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::where('id',$id)->delete();
        return redirect('admin/customer')->with('success','Data has been deleted.');
    }

    //Login
    function login(){
        return view('frontlogin');
    }

    //Check Login
    function customer_login(Request $request){
        $email= $request->email;
        $pwd= md5($request->password);
        $detail=Customer::where(['email'=>$email,'password'=>$pwd])->first();
        if($detail){
            $detail=Customer::where(['email'=>$email,'password'=>$pwd])->get();
            session(['customerlogin'=>true,'data'=>$detail]);
            return redirect('/')->with('succes','Welcome');;
        }else{
            return redirect('/')->with('error','Invalid email and password!!');
        }
    }

    //Register
    function register(){
        return view('register');
    }

    //Logout
    function logout(){
        session()->forget(['customerlogin','data']);
        return redirect('/');
    }

}
