@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<img src="assets/images/fac.jpg" width="100%">
@stop

@section('content')
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Option</th>
        </tr>
        <tr>
            @foreach($suppliers as $suppliers)
            <td>{{$suppliers->supplier_id}}</td>
            <td>{{$suppliers->supplier_name}}</td>
            <td>
                <a href=""><button type="button" class="btn btn-outline-success"><img src="assets/svg/phone.svg" alt=""></button></a>
                <a href="{{route('provider.delete', ['supplier_id' =>$suppliers -> supplier_id])}}"><button type="button" class="btn btn-outline-danger"><img src="assets/svg/trash.svg" alt=""></button></a>
            </td>
            @endforeach
        </tr>
    </table>
</div>
<hr>
<div class="add">
    <a href="{{route('provider.create')}}">
        <button type="button" class="btn btn-primary"><img src="assets/svg/add.svg" alt="" style="margin-bottom: 4px; margin-right: 5px"> Add more Provider</button>
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
        width: 33%;
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