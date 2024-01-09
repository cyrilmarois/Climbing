<?php

namespace App\Enums;
enum ClimbingType: string
{
    case LEAD_CLIMBING = 'lead climbing';
    case TOP_ROPE_CLIMBING = 'top rope climbing';
    case BOULDERING = 'bouldering';
}