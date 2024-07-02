<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use DB;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customerList = DB::table('customer')->paginate(20);

        return view('backend.user.customer')->with([
            'index'       => 1,
            'customerList' => $customerList
        ]);
    }

    public function customerAdd(Request $request)
    {
        return view('backend.user.add');
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
        $customer = new Customer;
        $customer->username = $request->input('username');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->gender = $request->input('gender');
        $customer->phone = $request->input('phone');
        
        
        
        
        
        $customer->save();
        return redirect()->back()->with('status', 'Them thanh vien thanh cong');
    }

    public function edit($customer)
    {
    //tim student theo id
        $customer = Customer::where('customer_id', $customer)->first();
        //$customerList = DB::table('customer')->where('customer_id', $customer)->get();
        return view('backend.user.edit',compact('customer'));


   
   
    

    
    
    }

    public function update(Request $request, $index)
    {
    //tim student theo id
    //$customer = DB::table('customer')->where('customer_id', $index)->first();
        $customer = Customer::find($index);
        
        if (!$customer) {
            return redirect()->back()->with('error', 'Không tìm thấy khách hàng');
        }
        if ($request->has('username')) {
            $customer->username = $request->input('username');
        }

        $customer->username = $request->input('username');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->gender = $request->input('gender');
        $customer->phone = $request->input('phone');

    

    

        $customer_id = $request->input('customer_id'); // Giả sử customer_id là trường khóa chính
    //$customer = Customer::find($index);
    



        $customer->update();
        return redirect()->back()->with('status', 'Cap nhat thanh vien thanh cong');
   
   
    }
    public function delete($customer)
    {
        $customer = Customer::find($customer);
        if (!$customer) {
            return redirect()->back()->with('error', 'Không tìm thấy khách hàng');
        }
        $customer->delete();
        return redirect()->back()->with('status', 'Xóa thành viên thành công');
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












