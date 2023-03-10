<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function customer()
    {
        $customers =  DB::table('customers')
            ->join('accounts', 'customers.account_id', '=', 'accounts.account_id')
            ->select('customers.*', 'accounts.username', 'accounts.email')
            ->get();
        return view('admin.customer.customer', ['customers' => $customers]);
    }
}
