<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function employee()
    {
        $employees =  DB::table('employees')
            ->join('accounts', 'employees.account_id', '=', 'accounts.account_id')
            ->where('employees.level', '=', '1')
            ->select('employees.*')
            ->get();
        return view('admin.staff.admin', ['employees' => $employees]);
    }

    function staff()
    {
        $employees =  DB::table('employees')
            ->join('accounts', 'employees.account_id', '=', 'accounts.account_id')
            ->where('employees.level', '!=', '1')
            ->select('employees.*', 'accounts.username', 'accounts.email')
            ->get();
        return view('admin.staff.staff', ['employees' => $employees]);
    }

    function create()
    {
        return view('admin.staff.add');
    }

    function stored(Request $request)
    {
        $employees = new Employee();
        $employees->employee_id = $request->employee_id;
        $employees->phone = $request->phone;
        $employees->first_name = $request->first_name;
        $employees->last_name = $request->last_name;
        $employees->district = $request->district;
        $employees->ward = $request->ward;
        $employees->province = $request->province;
        $employees->gender = $request->gender;
        $employees->birth = $request->birth;
        $employees->level = $request->level;
        $employees->account_id = $request->account_id;
        $employees->save();
        return redirect()->route('employee');
    }
}
