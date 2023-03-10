@extends('master.master')

@section('content')
<section class="" id="menu">
    <p>Tim thay {{count($product)}} san pham</p> <br>
    <div class="owl-menu-item owl-carousel">
        @foreach($product as $data)
        <div class="item">
            <div class='card card1' style="background-image: url('{{('/assets/images/'.$data->image)}}')">
                <div class="price">
                    <h6>${{$data->price}}</h6>
                </div>
                <div class='info'>
                    <h1 class='title'>{{$data->name}}</h1>
                    <p class='description' style="  white-space: nowrap; height: 50px; overflow: hidden; text-overflow: ellipsis; ">{{$data->description}}</p>
                    <div class="main-text-button">
                        <div class="scroll-to-section" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal"> See More <img src="/assets/svg/eye.svg" width="15px"></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</section>
@stop