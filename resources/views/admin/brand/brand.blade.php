@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<img src="assets/images/theme.png" width="100%">
@stop

@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brands)
        <tr>
            <td>{{$brands->brand_id}}</td>
            <td>{{$brands->brand_name}}</td>
            <td>
                <a href="{{route('brand.edit', ['brand_id' =>$brands -> brand_id])}}"><button type="button" class="btn btn-outline-success"><img src="assets/svg/edit.svg" alt=""></button></a>
                <a href="{{route('brand.delete', ['brand_id' =>$brands -> brand_id])}}"><button type="button" class="btn btn-outline-danger"><img src="assets/svg/trash.svg" alt=""></button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr>
<div class="add">
    <a href="{{route('brand.create')}}">
        <button type="button" class="btn btn-primary"><img src="assets/svg/add.svg" alt="" style="margin-bottom: 4px; margin-right: 5px"> Add more Brand</button>
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
        /* vertical-align: middle; */
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