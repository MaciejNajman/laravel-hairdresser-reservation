<?php

namespace App\Enums;

enum TableStatus: string
{
    case Oczekujący = 'pending';
    case Dostępny = 'avaliable';
    case Niedostępny = 'unavaliable';
}
