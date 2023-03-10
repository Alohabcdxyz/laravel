<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('account.login');
    }
    public function login(LoginRequest $request)
    {

        $infor = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infor) && Auth::user()->isAdmin()) {
            return redirect()->route('admin');
        } else if (Auth::attempt($infor) && Auth::user()->isMember()) {
            return redirect()->route('member');
        }

        return back()->withErrors([
            'login_fail' => 'Something went wrong',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
