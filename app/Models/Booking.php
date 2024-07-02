<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\StyleCustomer;
use App\Enums\SocialType;
use App\Enums\StatusPayment;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey ='booking_id'; 
    protected $fillable =[
        'username', 
        'image',
        'start_datetime',
        'style_customer',
        'social_type',
        'contact',
        'status_payment',
        'booking_id',
    ];

    protected $cats=[
        'style_customer' => StyleCustomer::class,
        'social_type' => SocialType::class,
        'status_payment' => StatusPayment::class,

    ];
    public function setStyleCustomerAttribute($value)
    {
        if (!in_array($value, array_column(StyleCustomer::cases(), 'value'))) {
            throw new \InvalidArgumentException("Invalid value for style_customer");
        }

        $this->attributes['style_customer'] = $value;
    }

    public function getStyleCustomerAttribute($value)
    {
        return StyleCustomer::from($value);
    }
}