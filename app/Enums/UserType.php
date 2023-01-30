<?php

namespace App\Enums;

enum UserType: string {
    case ADMIN    = "Admin";
    case MANAGER  = "Manager";
    case TELLER   = "Teller";
    case CUSTOMER = "Customer";
}