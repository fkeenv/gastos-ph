<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Type;

class AccountType extends Type
{
    use HasFactory;

    protected $attributes = ['class' => self::class];
}
