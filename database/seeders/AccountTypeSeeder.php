<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('account_types')->delete();

        DB::table('account_types')->insert([
            [
                'name' => 'Asset',
                'description' => 'Account Type - Asset',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Liability',
                'description' => 'Account Type - Liability',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Equity',
                'description' => 'Account Type - Equity',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Revenue',
                'description' => 'Account Type - Revenue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Expense',
                'description' => 'Account Type - Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
