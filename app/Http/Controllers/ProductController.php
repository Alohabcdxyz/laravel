<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\OrderProduct;
use App\Models\Supplier;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function product()
    {
        $products = Product::paginate(5);
        return view('admin.product.product', ['products' => $products]);
    }

    function detail($product_id)
    {
        $products = Product::where('product_id', $product_id)
            ->first();
        // $orderqty = OrderProduct::where('product_id', $products->product_id)->select('order_products.quantity')->first();
        // $products->quantity = $products->quantity - $orderqty->quantity;
        // $products = DB::table('products')
        //     ->join('order_products', 'products.products_id', '=', 'order_products.product_id')
        //     ->join('orders', 'order_products.order_id', '=', 'orders.order_id')
        //     ->where(
        //         ['product_id', $orderqty->product_id],
        //         ['orders.status', '=', 2]
        //     )->update(['products.quantity' => $products->quantity]);
        return view('admin.product.detail', compact('products'));
    }

    function delete($product_id)
    {
        if ($product_id != null) {
            Product::where('product_id', $product_id)->delete();
        }
        return redirect()->route('product');
    }

    function edit($product_id)
    {
        $products = Product::where('product_id', $product_id)->first();
        $brands = Brand::with('product')->get();
        $suppliers = Supplier::with('product')->get();
        $warehouses = Warehouse::with('product')->get();
        return view('admin.product.edit', compact('products', 'brands', 'suppliers', 'warehouses'));
    }

    function update(Request $request, $product_id)
    {

        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'brand_id' => $request->brand_id,
            'supplier_id' => $request->supplier_id,
            'warehouse_id' => $request->warehouse_id,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path('assets/images');
            $file->move($path, $name);
            $data['image'] = $name;
        }

        Product::where('product_id', $request->product_id)
            ->update($data);
        return redirect()->route('product');
    }

    function create()
    {
        $brands = Brand::with('product')->get();
        $suppliers = Supplier::with('product')->get();
        $warehouses = Warehouse::with('product')->get();
        return view('admin.product.add', [
            'brands' => $brands,
            'suppliers' => $suppliers,
            'warehouses' => $warehouses
        ]);
    }

    function stored(Request $request)
    {
        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'brand_id' => $request->brand_id,
            'supplier_id' => $request->supplier_id,
            'warehouse_id' => $request->warehouse_id,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path('assets/images');
            $file->move($path, $name);
        }
        $data['image'] = $name;
        DB::table('products')->insert($data);
        return redirect()->route('product');
    }
}
