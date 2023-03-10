@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div style="display: flex; align-items:center; justify-content: center;">
    <img src="" alt="" width="30%">
</div>
@stop

@section('content')
<div>
    <div class=" container">
        <table>
            <tr>
                <th>Order ID</th>
                <th>Receiver Name</th>
                <th>Receiver Phone</th>
                <th>Receiver Address</th>
                <th>Product</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
            @foreach($orders as $orders)
            <tr>
                <td>{{$orders->order_id}}</td>
                <td>{{$orders->receiver_name}}</td>
                <td>{{$orders->receiver_phone}}</td>
                <td>{{$orders->receiver_address}}</td>
                <td>{{$orders->name}}</td>
                <td><img src="{{('/assets/images/'.$orders->image)}}" alt="" width="150px"></td>
                <td>{{$orders->quantity}}</td>
                <td>{{$orders->price}}</td>
                <td>{{$orders->total}}</td>
                <td>
                    @if($orders->status == 1)
                    <button type="button" class="btn btn-danger" style="width: 100%; font-size:12px">No process</button>
                    @elseif($orders->status == 2)
                    <button type="button" class="btn btn-success" style="width: 100%;">Processed</button>
                    @elseif($orders->status == 3)
                    <button type="button" class="btn btn-warning" style="width: 100%;">Delivering</button>
                    @elseif($orders->status == 4)
                    <button type="button" class="btn btn-primary" style="width: 100%;">Delivered</button>
                    @elseif($orders->status == 5)
                    <button type="button" class="btn btn-danger" style="width: 100%;font-size:12px">Cancel(By Guest)</button>
                    @endif
                </td>
                <td>
                    @if($orders->status != 5 && $orders->status != 4)
                    <a href="{{route('order.edit', ['order_id' =>$orders -> order_id])}}"><button type="button" class="btn btn-outline-success"><img src="/assets/svg/edit.svg" alt=""></button></a>
                    @endif
                    @if($orders->status == 1 || $orders->status == 5)
                    <a href="{{route('order.delete', ['order_id' =>$orders -> order_id])}}"><button type="button" class="btn btn-outline-danger"><img src="/assets/svg/trash.svg" alt=""></button></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop
@section('css')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    table th {
        border: 1px solid black;
        text-align: left;
        padding: 8px;
        text-align: center;
        vertical-align: middle;
        background-color: #fff3cd;
    }

    table td {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
        border: 1px solid black;
        text-align: left;
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    table td button {
        height: 40px;
        width: 70px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@stop
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@stop