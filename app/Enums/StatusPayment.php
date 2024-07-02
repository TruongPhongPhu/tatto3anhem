<?php
namespace App\Enums;

enum StatusPayment: string
{
    case DEPOSIT_PAID = 'Đã cọc tiền';
    case BALANCE_UNPAID = 'Chưa thanh toán tiền còn lại';
    case PAID = 'Đã thanh toán';
    case CANCELED = 'Hủy';


    public function label(): string
    {
        return match ($this) {
            self::DEPOSIT_PAID => 'Đã cọc tiền',
            self::BALANCE_UNPAID => 'Chưa thanh toán tiền còn lại',
            self::PAID => 'Đã thanh toán',
            self::CANCELED => 'Hủy',
        };
    }
    
}



