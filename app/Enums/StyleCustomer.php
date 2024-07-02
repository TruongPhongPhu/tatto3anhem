<?php
namespace App\Enums;

enum StyleCustomer: string
{
    case CONTACT = 'contact';
    case COLLAB = 'collab';
    case PENDING = 'pending';
    case INPROGRESS = 'in progress';
    case DONE ='done';


    public function label(): string
    {
        return match ($this) {
            self::CONTACT => 'Contact',
            self::COLLAB => 'Collab',
            self::PENDING => 'Pending',
            self::INPROGRESS => 'In Progress',
            self::DONE => 'Done',
        };
    }

}



