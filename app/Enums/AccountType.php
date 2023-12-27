<?php

namespace App\Enums;

enum AccountType: int
{
    case ASSET = 1;
    case LIABILITY = 2;
    case EQUITY = 3;
    case REVENUE = 4;
    case EXPENSE = 5;
}
