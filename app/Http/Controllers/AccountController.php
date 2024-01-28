<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Data\Account\AccountData;
use Spatie\LaravelData\DataCollection;
use App\Data\Account\AccountCreateData;
use Spatie\LaravelData\PaginatedDataCollection;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): PaginatedDataCollection|DataCollection
    {
        $query = Account::query();
        $perPage = $request->has('perPage') ? $request->get('perPage') : $this->perPage;
        $result = $perPage == 'all' ? $query->get() : $query->paginate($perPage);

        return AccountData::collection($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountCreateData $data): AccountData
    {
        $account = Account::create($data->all());

        return AccountData::from($account);
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account): AccountData
    {
        return AccountData::from($account);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccountData $data, Account $account): AccountData
    {
        $account = tap($account)->update($data->all());

        return AccountData::from($account);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account = tap($account)->delete();

        return response()->json(['status' => 'resource_deleted_successfully']);
    }
}
