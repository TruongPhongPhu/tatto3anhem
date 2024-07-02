<?php
namespace App\Enums;

enum Service: string
{
    case Advise = 'Advice';
    case Tattoo = 'Tattoo';
    case Pain = 'pain';
    case Imagewarrantyaftertattoo = 'Image warranty after tattoo';


    public function label(): string
    {
        return match ($this) {
            self::Advise => 'Advise',
            self::Tattoo => 'Tattoo',
            self::Pain  => 'pain',
            self::Imagewarrantyaftertattoo => 'Imagewarrantyaftertattoo',
            
        };
    }
    
}



