@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                        {{$ordercount}}
                    </h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3> {{$prdcount}}<sup style="font-size: 20px"></sup></h3>
                    <p>Product</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>$ {{$money}}</h3>
                    <p>Total Money</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <table>
            <tr>
                <th>Total</th>
                <th>Date</th>
            </tr>
            @foreach($doanhthu as $doanhthu)
            <tr>
                <td>{{$doanhthu->total}}</td>
                <td>{{$doanhthu->updated_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        Doanh thu thang
        @foreach($doanhthuthang3 as $doanhthuthang3)
        <div>
            {{$doanhthuthang3->month_name}} : {{$doanhthuthang}}
        </div>
        @endforeach
    </div>
    <div>
    </div>

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

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

    @section('js')
    <script>
        console.log('Hi!');
    </script>
    @stop