<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function cart()
    {
        $data['items'] = Cart::content();
        return view('cart.cart', $data);
    }


    function addCart($product_id)
    {
        $product = DB::table('products')->where('product_id', $product_id)->first();
        Cart::add(['id' => $product_id, 'name' => $product->name, 'qty' => 1, 'weight' => 550, 'price' => $product->price, 'options' => ['img' => $product->image]]);
        return redirect()->route('cart');
    }

    function deleteCart($id)
    {
        if ($id == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($id);
        }
        return back();
    }

    function getUpdateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
    }

    function stored(Request $request)
    {
        $order = new Order();
        $order->receiver_name = $request->receiver_name;
        $order->receiver_phone = $request->receiver_phone;
        $order->receiver_address = $request->receiver_address;
        $order->total = $request->total;
        $order->save();

        foreach (Cart::content() as $item) {
            OrderProduct::create(
                [
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'price' => $item->price,
                ]
            );
        }

        $product = DB::table('products')->where('product_id', $item->id)->select('products.quantity')->first();

        $product->quantity = $product->quantity - $item->qty;
        $product = DB::table('products')
            ->where('product_id', $item->id)->update(['products.quantity' => $product->quantity]);

        session()->forget('cart');
        return redirect()->route('success');
    }

    function success()
    {
        return view('cart.success');
    }

    function order()
    {
        $orders =  DB::table('orders')
            ->join('order_products', 'orders.order_id', '=', 'order_products.order_id')
            ->join('products', 'order_products.product_id', '=', 'products.product_id')
            ->select('orders.*', 'order_products.quantity', 'order_products.price', 'products.name', 'products.image')
            ->get();
        return view('admin.order.order', ['orders' => $orders]);
    }

    function edit($order_id)
    {
        $orders = Order::where('order_id', $order_id)->first();
        return view('admin.order.edit', compact('orders'));
    }

    function update(Request $request, $order_id)
    {
        $data = [
            'status' => $request->status
        ];
        Order::where('order_id', $request->order_id)
            ->update($data);
        return redirect()->route('order');
    }

    function historypurchases()
    {
        $orders =  DB::table('orders')
            ->join('order_products', 'orders.order_id', '=', 'order_products.order_id')
            ->join('products', 'order_products.product_id', '=', 'products.product_id')
            ->select('orders.*', 'order_products.quantity', 'order_products.price', 'products.name', 'products.image')
            ->get();
        return view('member.order', ['orders' => $orders]);
    }

    function edithistorypurchases($order_id)
    {
        $orders = Order::where('order_id', $order_id)->first();
        return view('member.editorder', compact('orders'));
    }

    function updatehistorypurchases(Request $request, $order_id)
    {

        $data = [
            'status' => $request->status
        ];

        Order::where('order_id', $request->order_id)
            ->update($data);
        return redirect()->route('historypurchases');
    }

    // function qtyPrd()
    // {
    //     foreach (Cart::content() as $item) {
    //         $product = Product::find($item->model->id);
    //         $product->update(['quantity' => $product->quantity - $item->qty]);
    //     }
    // }

    function delete($order_id)
    {
        if ($order_id != null) {
            Order::where('order_id', $order_id)->delete();
        }
        return redirect()->route('order');
    }
}
