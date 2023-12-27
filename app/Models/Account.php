<?php

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Account extends Model
{
    use HasFactory;

    public function assets(): Collection
    {
        return self::query()->where('account_type_id', AccountType::ASSET)->get();
    }

    public function liabilities(): Collection
    {
        return self::query()->where('account_type_id', AccountType::LIABILITY)->get();
    }

    public function equities(): Collection
    {
        return self::query()->where('account_type_id', AccountType::EQUITY)->get();
    }

    public function revenues(): Collection
    {
        return self::query()->where('account_type_id', AccountType::REVENUE)->get();
    }

    public function expensess(): Collection
    {
        return self::query()->where('account_type_id', AccountType::EXPENSE)->get();
    }
}
