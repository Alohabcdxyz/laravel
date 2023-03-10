<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        return view('home');
    }

    function admin()
    {
        $ordercount =  DB::table('orders')
            ->where('orders.status', '==', 1)
            ->count();

        $prdcount =  DB::table('products')
            ->count();

        $money =  DB::table('orders')
            ->where('orders.status', '=', 4)
            ->sum('orders.total');

        $doanhthu =  DB::table('orders')

            ->whereBetween('updated_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
            ->where('orders.status', '=', 4)
            ->get();

        $doanhthuthang =  DB::table('orders')

            ->whereBetween('updated_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
            ->where('orders.status', '=', 4)
            ->sum('orders.total');


        $doanhthuthang3 =  DB::table('orders')
            ->select(
                DB::raw("MONTHNAME(updated_at) as month_name")
            )
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->get();

        return view('admin.admin', compact('ordercount', 'prdcount', 'money', 'doanhthu', 'doanhthuthang', 'doanhthuthang3'));
    }

    function signup()
    {
        return view('account.signup');
    }
}
