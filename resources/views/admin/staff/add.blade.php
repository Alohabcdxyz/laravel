@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div>
    <h2>Add Staff</h2>
</div>
<hr>
<div class="row align-items-start">
    <div class="col">
        <div class="profile_img">
            <img src="/assets/images/staff.png" width="150px">
        </div>
    </div>
    <div class="col">
        <div>
            <h4>
                Staff Lego's Website
            </h4>
            <form action="{{route('staff.stored')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-start">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="name" style="font-size: 400;">First Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="first_name">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="name" style="font-size: 400;">Last Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name">
                    </div>
                </div>
                <div class="row align-items-start" style="margin-top: 10px">
                    <div class="col">
                        <img src="/assets/svg/dob.svg">
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="birth">
                    </div>
                    <div class="col">
                        <img src="/assets/svg/gender.svg" style="margin-bottom: 10px;">
                        <select required name="gender" class="form-control">
                            <option selected>Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-start" style="margin-top: 10px">
                    <div class="col">
                        <img src="/assets/svg/phone.svg" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone">
                    </div>
                </div>
                <div class="row align-items-start" style="margin-top: 10px">
                    <div class="col">
                        <img src="/assets/svg/staff.svg" style="margin-bottom: 5px;">
                        <select required name="level" class="form-control">
                            <option selected>Level</option>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-start" style="margin-top: 10px">
                    <div class="col">
                        <img src="/assets/svg/id.svg" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="account_id">
                    </div>
                </div>
                <img src="/assets/svg/address.svg" style="margin: 5px 0 5px 0;">
                <div class="row align-items-start">
                    <div class="col">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="ward">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="district">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="province">
                    </div>
                </div> <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        <a href="{{route('employee')}}" style="margin-left: -11px;">
            <button class="btn btn-danger" style="margin-top: 10px; margin-left:11px">Cancel</button>
        </a>
    </div>
    <div class="col">

    </div>
</div>


@stop

@section('css')
<style>
    h2 {
        font-weight: 700;
        text-align: center;
    }

    h3 {
        font-size: 18px;
        font-weight: 700;
    }

    h4 {
        font-size: 16px;
        font-weight: 600;
    }

    .profile_img img {
        border-radius: 50%;
        box-shadow: 0.375em 0.375em 0 0 rgb(15 28 63 / 13%);
        height: 10em;
        width: 10em;
    }

    label .name {
        font-size: 16px;
        font-weight: 600;
    }
</style>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop


@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@stop