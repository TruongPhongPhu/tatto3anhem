<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Service;

class Bookingtype extends Model
{
    use HasFactory;
    protected $table = 'Bookingtype';
    protected $primaryKey ='bookingtype_id'; 
    protected $fillable =[
        'username', 
        'email',
        'phone',
        'service',
        'datetime',
        'message',
        'bookingtype_id',
        
];
protected $cats=[
    'service' => Service::class,
    
    
];
}
