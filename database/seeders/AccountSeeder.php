<?php

namespace Database\Seeders;

use App\Enums\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->delete();

        DB::table('accounts')->insert([
            // -- ASSETS
            [
                'account_type_id' => AccountType::ASSET,
                'account_code' => 1001,
                'name' => 'Cash',
                'description' => 'Asset - Cash',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::ASSET,
                'account_code' => 1002,
                'name' => 'Accounts Receivable',
                'description' => 'Asset - Accounts Receivable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::ASSET,
                'account_code' => 1003,
                'name' => 'Inventory',
                'description' => 'Asset - Inventory',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::ASSET,
                'account_code' => 1004,
                'name' => 'Fixed Asset',
                'description' => 'Asset - Fixed Asset',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::ASSET,
                'account_code' => 1005,
                'name' => 'Prepaid Expenses',
                'description' => 'Asset - Prepaid Expenses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // -- Liabilities
            [
                'account_type_id' => AccountType::LIABILITY,
                'account_code' => 2001,
                'name' => 'Accounts Payable',
                'description' => 'Liability - Accounts Payable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::LIABILITY,
                'account_code' => 2002,
                'name' => 'Taxes Payable',
                'description' => 'Liability - Taxes Payable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::LIABILITY,
                'account_code' => 2003,
                'name' => 'Wages Payable',
                'description' => 'Liability - Wages Payable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::LIABILITY,
                'account_code' => 2004,
                'name' => 'Accrued Liabilities',
                'description' => 'Liability - Accrued Liabilities',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // -- Equity
            [
                'account_type_id' => AccountType::EQUITY,
                'account_code' => 3001,
                'name' => 'Common Stock',
                'description' => 'Equity - Common Stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EQUITY,
                'account_code' => 3002,
                'name' => 'Retained Earnings',
                'description' => 'Equity - Retained Earnings',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // -- Revenue
            [
                'account_type_id' => AccountType::REVENUE,
                'account_code' => 4001,
                'name' => 'Sales Revenue',
                'description' => 'Revenue - Sales Revenue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::REVENUE,
                'account_code' => 4002,
                'name' => 'Sales Returns and Allowances',
                'description' => 'Revenue - Sales Returns and Allowances',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // -- Expenses
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5001,
                'name' => 'Cost of Goods Sold',
                'description' => 'Expense - Cost of Goods Sold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5002,
                'name' => 'Rent Expense',
                'description' => 'Expense - Rent Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5003,
                'name' => 'Wages Expense',
                'description' => 'Expense - Wages Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5004,
                'name' => 'Advertising Expense',
                'description' => 'Expense - Advertising Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5005,
                'name' => 'Depreciation Expense',
                'description' => 'Expense - Depreciation Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5006,
                'name' => 'Bank Fees',
                'description' => 'Expense - Bank Fees',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5007,
                'name' => 'Utility Expense',
                'description' => 'Expense - Utility Expense',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_type_id' => AccountType::EXPENSE,
                'account_code' => 5008,
                'name' => 'Debt',
                'description' => 'Expense - Debt (Loans & Mortgages)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
