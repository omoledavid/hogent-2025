<?php

namespace App\Enums;

enum PropertyStatus: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case SOLD = 'sold';
    case RENTED = 'rented';
}
