<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    function provider()
    {
        $suppliers = Supplier::all();
        return view('admin.provider.provider', ['suppliers' => $suppliers]);
    }

    function create()
    {
        return view('admin.provider.add');
    }

    function stored(Request $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_id = $request->supplier_id;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->save();
        return redirect()->route('provider');
    }

    function delete($supplier_id)
    {
        if ($supplier_id != null) {
            Supplier::where('supplier_id', $supplier_id)->delete();
        }
        return redirect()->route('provider');
    }
}
