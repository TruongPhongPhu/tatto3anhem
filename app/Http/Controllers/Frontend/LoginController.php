<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();
class LoginController extends Controller
{
    public function signup(){
        
        return view('frontend.signup');
    }
    public function signin(){
        return view('frontend.signin');
    }
    public function create_signup(Request $request){
        $data=array();
        $data['name']=$request->customer_name;
        $data['email']=$request->customer_email;
        $data['phone']=$request->customer_phone;
        $data['password']=md5($request->customer_password);
        $customer_id=DB::table('signup')->insertGetId($data);

        Session::put('id',$customer_id);
        Session::put('name',$request->customer_name);
        return Redirect::to('/signin');
    }
    public function login_customer(Request $request){
        $email=$request->email_account;
        $password=md5($request->password_account);
        $result=DB::table('signup')->where('email',$email)->where('password',$password)->first();

        if($result){
            Session::put('id',$result->id); 
            return Redirect::to('/customer2');
        }else{
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai');
            return Redirect::to('/signin');
        }
    }
    public function logout()
    {
        Session::put('customer_name', null);
        Session::put('id', null);
        return Redirect::to('/');
    }
    public function product(){
        return view('/product');
    }
    public function kemduong(){
        return view('/kemduong');
    }
    public function kemduong2(){
        return view('/kemduong2');
    }
    public function product2(){
        return view('/product2');
    }
}