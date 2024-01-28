<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->delete();

        DB::table('types')->insert([
            [
                'class' => AccountType::class,
                'name' => 'Asset',
                'description' => 'Account Type - Asset',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => AccountType::class,
                'name' => 'Liability',
                'description' => 'Account Type - Liability',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => AccountType::class,
                'name' => 'Equity',
                'description' => 'Account Type - Equity',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => AccountType::class,
                'name' => 'Revenue',
                'description' => 'Account Type - Revenue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class' => AccountType::class,
                'name' => 'Expense',
                'description' => 'Account Type - Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
