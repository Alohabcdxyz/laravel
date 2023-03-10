@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div>
    <img src="/assets/images/brand.jpg" alt="" style="width: 100%;">
</div>
@stop

@section('content')
<form action="{{route('brand.stored')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 row">
        <i class="fa-solid fa-tag" style="margin-top: 10px;"></i>
        <label for="name" class="col-sm-2 col-form-label">Brand's Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="brand_name">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
<a href="{{route('brand')}}">
    <button class="btn btn-danger">Cancel</button>
</a>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@stop