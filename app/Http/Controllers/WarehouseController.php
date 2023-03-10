<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    function warehouse()
    {
        $warehouses = Warehouse::all();
        return view('admin.warehouse.warehouse', ['warehouses' => $warehouses]);
    }

    function create()
    {
        return view('admin.warehouse.add');
    }

    function stored(Request $request)
    {
        $warehouse = new Warehouse();
        $warehouse->warehouse_id = $request->warehouse_id;
        $warehouse->warehouse_name = $request->warehouse_name;
        $warehouse->province = $request->province;
        $warehouse->district = $request->district;
        $warehouse->ward = $request->ward;
        $warehouse->save();
        return redirect()->route('warehouse');
    }

    function delete($warehouse_id)
    {
        if ($warehouse_id != null) {
            Warehouse::where('warehouse_id', $warehouse_id)->delete();
        }
        return redirect()->route('warehouse');
    }
}
