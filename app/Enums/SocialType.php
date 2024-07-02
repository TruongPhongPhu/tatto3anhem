<?php
namespace App\Enums;

enum SocialType: string
{
    case FACEBOOK = 'facebook';
    case INSTAGRAM = 'instagram';
    case GOOGLE = 'google';
    case PHONE = 'phone';


    public function label(): string
    {
        return match ($this) {
            self::FACEBOOK => 'facebook',
            self::INSTAGRAM => 'instagram',
            self::GOOGLE => 'google',
            self::PHONE => 'phone',
            
        };
    }
    
}



