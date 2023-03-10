@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<img src="/assets/images/fac.jpg" width="10%">
@stop

@section('content')

<form action="{{route('product.update',['product_id' =>$products -> product_id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="id" class="form-label">Product ID</label>
                    <input type="text" class="form-control" id="id" readonly value="{{$products->product_id}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$products->name}}">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{$products->quantity}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$products->price}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Brand Name</label>
                    <select required name="brand_id" class="form-control">
                        <option selected>Choose your Brand</option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->brand_id}}" @if($products->brand_id == $brand->brand_id) selected @endif> {{$brand->brand_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Made In</label>
                    <select required name="supplier_id" class="form-control">
                        <option selected>Choose your Supplier</option>
                        @foreach($suppliers as $supplier)
                        <option value="{{$supplier->supplier_id}}" @if($products->supplier_id == $supplier->supplier_id) selected @endif> {{$supplier->supplier_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Import at</label>
                    <select required name="warehouse_id" class="form-control">
                        <option selected>Choose your Warehouse</option>
                        @foreach($warehouses as $warehouse)
                        <option value="{{$warehouse->warehouse_id}}" @if($products->warehouse_id == $warehouse->warehouse_id) selected @endif> {{$warehouse->warehouse_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product Status</label>
                    <select required name="status" class="form-control">
                        <option selected>Choose your Status</option>
                        <option value="1" @if($products->status == 1) checked @endif>In Stock</option>
                        <option value="2" @if($products->status == 2) checked @endif>Out Of Stock</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="description" class="form-label">Product Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5">{{$products->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Choose Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <div class="row">
                        <div class="col-6">
                            <p>Old Image</p>
                            <img src="{{('/assets/images/'.$products->image) }}" alt="" width="100%">
                        </div>
                        <div class="col-6" class="preview-upload">
                            <p>New Image</p>
                            <img src="{{('/assets/images/'.$products->image) }}" alt="" width="100%" id='sp_hinh-upload'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">Product Option</label> <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
<div class="container">
    <div class="row align-items-start">
        <div class="col">
            <a href="{{route('product.detail' , ['product_id' =>$products -> product_id])}}"><button type="button" class="btn btn-outline-primary"><img src="/assets/svg/back.svg" alt=""></button></a>
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
    </div>
</div>


@stop
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#sp_hinh-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function() {
        readURL(this);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@stop