<?php

namespace App\Data\Account;

use Spatie\LaravelData\Attributes\FromRouteParameterProperty;

class AccountData extends AccountCreateData
{
    public function __construct(
        #[FromRouteParameterProperty('account')]
        public int $id
    ) {

    }
}
