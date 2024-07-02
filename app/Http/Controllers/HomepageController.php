<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bookingtype;
use DB;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
   
   
    public function index(){
            
            return view('backend.home.homepage');
    }

    //public function index(){
    //    $template = 'backend.user.customer';
    //    return view ('backend.user.customer',compact('template'));
    //}
}//

