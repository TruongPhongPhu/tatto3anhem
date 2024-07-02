<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bookingtype;
use DB;
use Illuminate\Http\Request;


class BookingadminController extends Controller
{
   
   
    public function index(Request $request)
{
    $bookingformList = DB::table('bookingtype')->paginate(20);
    return view('backend.home.bookingadmin')->with([
        'index'       => 1,
        'bookingformList' => $bookingformList
    ]);
}




















    //    $template = 'backend.user.customer';
    //    return view ('backend.user.customer',compact('template'));
    //}
}//

