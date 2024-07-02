<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Validation\Rules\Enum;
use App\Enums\StyleCustomer;
use App\Enums\SocialType;
use App\Enums\StatusPayment;
use Carbon\Carbon;


class BookingController extends Controller
{
   //public function addBooking(){
   //    return view('bookings.add');
   //}
   public function index(Request $request)
   {
      $bookingList = DB::table('booking')->paginate(20);
      return view('backend.booking.customer')->with([
          'index'       => 1,
          'bookingList' => $bookingList
      ]);
   }
   public function bookingAdd(Request $request)
   {
    return view('backend.booking.add');
   }
   public function store(Request $request)
   {
        //dd($request->all());
        
        $request->validate([
            'username' => 'required|string|max:255',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_datetime' => 'required|date',
            'style_customer' => 'required|string|in:' . implode(',', array_column(StyleCustomer::cases(), 'value')),
            'social_type' => 'required|string|in:' . implode(',', array_column(SocialType::cases(), 'value')),
            'contact' => 'required|string|max:255',
            'status_payment' => 'required|string|in:' . implode(',', array_column(StatusPayment::cases(), 'value')),
        ]);
        
        //dd($request->all());
        $image = $request->file('images');
        $imagePaths = [];
        
        if ($image) {
            foreach ($image as $image) {
                $path = $image->store('image', 'public');
                $imagePaths[] = $path;
            }
        }
    
       
       
       
       
       
       
       
       
       
    
       $booking = new Booking;
       $booking->username = $request->input('username');
       //$booking->image = $request->input('image');
       if ($request->file('image')) {
        $path = $request->file('image')->store('images', 'public');
        $booking->image = $path;
        }
       
       $booking->start_datetime = $request->input('start_datetime');

       $booking->contact = $request->input('contact');
       
       $booking->style_customer = $request->input('style_customer');
       //$valid_styles = ["contact(0)", "collab(1)", "pending(2)", "in progress(3)", "done(4)", "cancel(5)"];
       //if (in_array($style_customer, $valid_styles)) {
       //    $booking->style_customer = $style_customer;
       //}
        
       
       
       $booking->social_type = $request->input('social_type');
        //$valid_social_types = ["facebook(0)", "instagram(1)", "google(2)", "phone(3)"];
        //if (in_array($social_type, $valid_social_types)) {
        //    $booking->social_type = $social_type;
        //}
         
        
       
        $booking->status_payment = $request->input('status_payment');
//$valid_status_payments = ["contact(0)", "collab(1)", "pending(2)"];
        //if (in_array($status_payment, $valid_status_payments)) {
        //    $booking->status_payment = $status_payment;
        //} 
          
        
       //$booking->bookingtype_id = $request->input('bookingtype_id');





       $booking->save();
       return redirect()->back()->with('status', 'Them booking thanh cong');
   }
   public function showLatestBooking()
    {
       $booking = Booking::latest()->first();
       return view('booking.show', compact('booking'));
    }
   public function edit($booking)
   {
   //tim student theo id
       $booking = Booking::where('booking_id', $booking)->first();
       return view('backend.booking.edit',compact('booking'));

   }
   public function update(Request $request, $index)
   {
   //tim student theo id
   //dd($request->all());
       $booking = Booking::find($index);

       if (!$booking) {
           return redirect()->back()->with('error', 'Không tìm thấy booking');
       }

    //    $request->validate([
        // 'username' => 'required|string|max:255',
        // 'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'start_datetime' => 'required|date',
        // 'style_customer' => 'required|string|in:' . implode(',', array_column(StyleCustomer::cases(), 'value')),
        // 'social_type' => 'required|string|in:' . implode(',', array_column(SocialType::cases(), 'value')),
        // 'contact' => 'required|string|max:255',
        // 'status_payment' => 'required|string|in:' . implode(',', array_column(StatusPayment::cases(), 'value')),

        // ]);

       if ($request->has('username')) {
           $booking->username = $request->input('username');
       }

      $booking->username = $request->input('username');
      if ($request->file('image')) {
        $path = $request->file('image')->store('images', 'public');
        $booking->image = $path;
        }
    //   if ($request->hasFile('anhtacpham')) {
        //  $file = $request->file('anhtacpham');
        //  $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
        //  $filename = time() . '.' . $extension;
        //  $file->move('uploads/booking/', $filename);  //upload len thu muc uploads/students
        //  $booking->anhtacphẩm = $filename;
        
        $booking->start_datetime = $request->input('start_datetime');
        $booking->contact = $request->input('contact');
        $booking->style_customer = $request->input('style_customer');
        
        
        $booking->social_type = $request->input('social_type');


        $booking->status_payment = $request->input('status_payment');
      
      
      
      
      
    
      
      
      
      
      
    
    
    


        $booking_id = $request->input('booking_id'); // Giả sử customer_id là trường khóa chính

       $booking->update();
return redirect()->back()->with('status', 'Cap nhat booking thanh cong');
   }

   public function delete($booking)
   {
       $booking = Booking::find($booking);
       if (!$booking) {
           return redirect()->back()->with('error', 'Không tìm thấy booking');
       }
       $booking->delete();
       return redirect()->back()->with('status', 'Xóa thành viên thành công');
   }

}