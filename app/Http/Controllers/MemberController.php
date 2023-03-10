<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function member()
    {
        $data['city'] =  Product::where('brand_id', 1)
            ->orderBy('product_id', 'desc')
            ->get();

        $data['marvel'] =  Product::where('brand_id', 2)
            ->orderBy('product_id', 'desc')
            ->get();

        $data['dc'] =  Product::where('brand_id', 3)
            ->orderBy('product_id', 'desc')
            ->get();

        $data['technic'] =  Product::where('brand_id', 4)
            ->orderBy('product_id', 'desc')
            ->get();

        $data['icon'] =  Product::where('brand_id', 5)
            ->orderBy('product_id', 'desc')
            ->get();

        return view('member.member', $data);
    }

    public function getSearch(Request $request)
    {
        $product = Product::where('name', 'like', '%' . $request->key . '%')
            ->orWhere('price', $request->key)->get();
        return view('member.search', compact('product'));
    }
}
