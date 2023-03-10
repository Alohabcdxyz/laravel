@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<img src="assets/images/wh1.jpg" width="100%">
@stop

@section('content')
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Province</th>
            <th>District</th>
            <th>Ward</th>
            <th>Option</th>
        </tr>
        <tr>
            @foreach($warehouses as $warehouses)
            <td>{{$warehouses->warehouse_id}}</td>
            <td>{{$warehouses->warehouse_name}}</td>
            <td>{{$warehouses->province}}</td>
            <td>{{$warehouses->district}}</td>
            <td>{{$warehouses->ward}}</td>
            <td>
                <a href=""><button type="button" class="btn btn-outline-success"><img src="assets/svg/phone.svg" alt=""></button></a>
                <a href="{{route('warehouse.delete', ['warehouse_id' =>$warehouses -> warehouse_id])}}"><button type="button" class="btn btn-outline-danger"><img src="assets/svg/trash.svg" alt=""></button></a>
            </td>
            @endforeach
        </tr>
    </table>
</div>
<hr>
<div class="add">
    <a href="{{route('warehouse.create')}}">
        <button type="button" class="btn btn-primary"><img src="assets/svg/add.svg" alt="" style="margin-bottom: 4px; margin-right: 5px"> Add more Warehouse</button>
    </a>
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
@stop