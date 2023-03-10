<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    function create()
    {
        return view('account.create');
    }

    function stored(Request $request)
    {
        $account = new Account();
        $account->account_id = $request->account_id;
        $account->username = $request->username;
        $account->email = $request->email;
        $account->password = Hash::make($request->password);
        $account->save();
        return redirect()->route('login');
    }

    function account()
    {
        $accounts = Account::all();
        return view('account.account', ['accounts' => $accounts]);
    }
}
