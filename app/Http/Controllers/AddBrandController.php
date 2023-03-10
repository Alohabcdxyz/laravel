<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddBrandController extends Controller
{

    function brand()
    {
        $brands = Brand::all();
        return view('admin.brand.brand', ['brands' => $brands]);
    }

    function create()
    {
        return view('admin.brand.addbrand');
    }

    function stored(Request $request)
    {
        $brand = new Brand();
        $brand->brand_id = $request->brand_id;
        $brand->brand_name = $request->brand_name;
        $brand->save();
        return redirect()->route('brand');
    }

    function delete($brand_id)
    {
        if ($brand_id != null) {
            Brand::where('brand_id', $brand_id)->delete();
        }
        return redirect()->route('brand');
    }

    function edit($brand_id)
    {
        $brands = Brand::where('brand_id', $brand_id)->first();
        return view('admin.brand.edit', compact('brands'));
    }

    function update(Request $request, $brand_id)
    {
        $data = [
            'brand_name' => $request->brand_name,
        ];
        Brand::where('brand_id', $request->brand_id)
            ->update($data);
        return redirect()->route('brand');
    }
}
