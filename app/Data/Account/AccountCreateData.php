<?php

namespace App\Data\Account;

use Spatie\LaravelData\Data;

class AccountCreateData extends Data
{
    public int $type_id;
    public string $account_code;
    public string $name;
    public string $description;
}
