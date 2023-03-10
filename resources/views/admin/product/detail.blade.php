@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div style="display: flex; align-items:center; justify-content: center;">
    <img src="{{('/assets/images/'.$products->image)}}" alt="" width="30%">
</div>
@stop

@section('content')
<div>
    <div class=" container">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="id" class="form-label">Product ID</label>
                    <input type="text" class="form-control" id="id" readonly value="{{$products->product_id}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" readonly value="{{$products->name}}">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input type="text" class="form-control" id="quantity" readonly value="{{$products->quantity}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price ($)</label>
                    <input type="text" class="form-control" id="price" readonly value="{{$products->price}}">
                </div>
                <div class="mb-3">
                    <label for="id" class="form-label">Product Option</label> <br>
                    <a href="{{route('product.edit', ['product_id' =>$products -> product_id])}}"><button type="button" class="btn btn-outline-success"><img src="/assets/svg/edit.svg" alt=""></button></a>
                    <a href="{{route('product.delete', ['product_id' =>$products -> product_id])}}"><button type="button" class="btn btn-outline-danger"><img src="/assets/svg/trash.svg" alt=""></button></a>
                    <a href="{{route('product')}}"><button type="button" class="btn btn-outline-primary"><img src="/assets/svg/back.svg" alt=""></button></a>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="brand_name" class="form-label">Brand Name</label>
                    <input type="text" class="form-control" id="brand_name" readonly value="{{$products->brand->brand_name}}">
                </div>
                <div class="mb-3">
                    <label for="supplier_name" class="form-label">Made In</label>
                    <input type="text" class="form-control" id="supplier_name" readonly value="{{$products->supplier->supplier_name}}">
                </div>
                <div class="mb-3">
                    <label for="warehouse_name" class="form-label">Import at</label>
                    <input type="text" class="form-control" id="warehouse_name" readonly value="{{$products->warehouse->warehouse_name}}">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Status</label> <br>
                    @if ($products->status == 1)
                    <button type="button" class="btn btn-success">In Stock</button>
                    @else
                    <button type="button" class="btn btn-danger">Out Of Stock</button>
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5">{{$products->description}}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@stop