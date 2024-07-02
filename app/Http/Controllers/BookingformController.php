<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bookingtype;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Service;
use DB;
use Carbon\Carbon;

class BookingformController extends Controller
{
    public function index(Request $request)
    {
        $bookingformList = DB::table('bookingtype')->paginate(20);

        return view('backend.home.bookingadmin')->with([
            'index'       => 1,
            'bookingformList' => $bookingformList
        ]);
    }

    public function bookingformAdd(Request $request)
    {
        return view('backend.home.bookingform');
        //$username = $request -> username;
        //$customerList = DB::table('customer')
        //    ->where('username', '=', $username)
        //    ->get();
        //if($customerList != null && count($customerList) > 0){
        //    return 'error';
        //}
        //$customer_id=DB::table('customer')->insertGetCustomerId([
        //    'username'=>$request -> username,
        //    'password'=>$request -> password,
        //    'email'=>$request-> email,
        //    'phone'=>$request-> phone,
        //    'gender'=>$request-> gender,
        //    'created_at'=>date('Y-m-d H:i:s'),
        //    'updated_at'=>date('Y-m-d H:i:s'),
        //]);
        //return redirect()->route('user.customer');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'service' => 'required|string|in:' . implode(',', array_column(Service::cases(), 'value')),
            'datetime' => 'required|date',
            'message' => 'required|string|max:2048',
        ]);


        $bookingtype = new Bookingtype;
        $bookingtype->name = $request->input('name');
        $bookingtype->email = $request->input('email');
        $bookingtype->phone = $request->input('phone');
        $bookingtype->service = $request->input('service');
        $bookingtype->datetime = $request->input('datetime');
        $bookingtype->message = $request->input('message');
       

        $bookingtype->created_at = Carbon::now();
        $bookingtype->updated_at = Carbon::now();
       
        
        
        
        
        
        $bookingtype->save();
        return redirect()->back()->with('status', 'Booking successful!');
    }

    public function edit($bookingtype)
    {
    //tim student theo id
        $bookingtype = Bookingtype::where('bookingtype_id', $bookingtype)->first();
        //$customerList = DB::table('customer')->where('customer_id', $customer)->get();
        return view('backend.home.edit',compact('bookingtype'));


   
   
    

    
    
    }

    public function update(Request $request, $index)
    {
    //tim student theo id
    //$customer = DB::table('customer')->where('customer_id', $index)->first();
        $bookingtype  = Bookingtype::find($index);
        
        if (!$bookingtype) {
            return redirect()->back()->with('error', 'Không tìm thấy booking');
        }
        if ($request->has('name')) {
            $bookingtype->name = $request->input('name');
        }

        $bookingtype->name = $request->input('name');
        $bookingtype->email = $request->input('email');
        $bookingtype->phone = $request->input('phone');
        $bookingtype->service = $request->input('service');
        $bookingtype->datetime = $request->input('datetime');
        $bookingtype->message = $request->input('message');
    

    

        $bookingtype_id = $request->input('bookingtype_id'); // Giả sử customer_id là trường khóa chính
    //$customer = Customer::find($index);
    



        $bookingtype->update();
        return redirect()->back()->with('status', 'Cap nhat booking thanh cong');
   
   
    }
    public function delete($bookingtype)
    {
        $bookingtype  = Bookingtype::find($bookingtype);
        if (!$bookingtype ) {
            return redirect()->back()->with('error', 'Không tìm thấy khách hàng');
        }
        $bookingtype ->delete();
        return redirect()->back()->with('status', 'Xóa booking thành công');
    }

    
    //public function postCustomerAdd(Request $request)
    //{
       //$username = $request -> username;
       //$customerList = DB::table('customer')
       //    ->where('username', '=', $username)
       //    ->get();


       //if($customerList != null && count($customerList) > 0){
       //    return 'error';
       //}
        
        //$user = new Customer();
        //$user->postUsername($username);

        //if ($request->isMethod('POST')){
//
        //    $validate=$request->validate([
        //       'username'=>'required',
        //       'password'=>'required',
        //       'email'=>'required',
        //       'phone'=>'required',
        //       'gender'=>'required',
        //]);
        //$params=$request->expect('_token');
        //$customerList = Customer::create($params);
        //if ($customerList->id) {
        //    return redirect()->route('user.add')->with('success','Thêm thành công');
        //}
          
        
        
        
        
//
        
       //return redirect()->route('user.customer');
    //function insert(Request $req){
    //    $username = $request ->get('username');
    //    $email = $request ->get('email');
    //    $gender = $request ->get('gender');
    //    $customer = new Customer();
    //    $customer->username = $username;
    //    $customer->email = $email;
    //    $customer->gender = $gender;
    //    $customer->save();
    //    return redirect()->route('user.customer');
    //}
    //function readdata(){
    //    $pdata = customer::all();
    //    return view('user.add', ['customerList'=>$pdata]);
    //}
}












