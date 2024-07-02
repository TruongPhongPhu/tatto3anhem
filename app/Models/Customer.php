<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //public function postUsername($customer)
    //{
    //    // Thực hiện truy vấn INSERT
    //    $this->customer = $customer;
    //    $this->save();
    //}
   //public function yourMethod()
   //{
   //    // Lấy một collection của các đối tượng Customer
   //    $customer = Customer::all();

   //    // Lặp qua từng đối tượng Customer và tăng giá trị của một trường nào đó
   //    foreach ($customer as $customer) {
   //        $customer->increment('customer_id'); // Thay 'field_name' bằng tên của trường bạn muốn tăng giá trị
   //    }
   //}
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey ='customer_id'; 
    protected $fillable =[
        'username', 
        'password',
        'email', 
        'gender', 
        'phone',
        'customer_id',
    ];
      
      
      
      
    
}