@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div>
    <h2>About Me</h2>
</div>
<hr>
<div class="row align-items-start">
    <div class="col">
        <div class="profile_img">
            <img src="assets/images/profile.jpg" width="150px">
        </div>
    </div>
    <div class="col">
        <div>
            <h4>
                Admin Lego's Website
            </h4>
            <div class="row align-items-start">
                <div class="col">
                    @foreach($employees as $employee)
                    <label for="exampleFormControlInput1" class="name" style="font-size: 400;">First Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$employee->first_name}}" readonly>
                    @endforeach
                </div>
                <div class="col">
                    @foreach($employees as $employee)
                    <label for="exampleFormControlInput1" class="name" style="font-size: 400;">Last Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$employee->last_name}}" readonly>

                    @endforeach
                </div>
            </div>
            <div class="row align-items-start" style="margin-top: 10px">
                <div class="col">
                    @foreach($employees as $employee)
                    <img src="/assets/svg/dob.svg">
                    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$employee->birth}}" readonly>
                    @endforeach
                </div>
                <div class="col">
                    <img src="/assets/svg/gender.svg" style="margin-bottom: 10px;">
                    @foreach($employees as $employee)
                    @if($employee->gender == 1)
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Male" readonly>
                    @else
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Female" readonly>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="row align-items-start" style="margin-top: 10px">
                <div class="col">
                    <img src="/assets/svg/phone.svg" style="margin-bottom: 5px;">
                    @foreach($employees as $employee)
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$employee->phone}}" readonly>
                    @endforeach
                </div>
            </div>
            <div class="row align-items-start" style="margin-top: 10px">
                <div class="col">
                    <img src="/assets/svg/admin.svg" style="margin-bottom: 5px;">
                    @foreach($employees as $employee)
                    @if($employee->level == 1)
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Admin" readonly>
                    @else
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="Staff" readonly>
                    @endif
                    @endforeach
                </div>
            </div>
            <img src="/assets/svg/address.svg" style="margin: 5px 0 5px 0;">
            <div class="row align-items-start">
                <div class="col">
                    @foreach($employees as $employee)
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$employee->ward}}" readonly>
                    @endforeach
                </div>
                <div class="col">
                    @foreach($employees as $employee)
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$employee->district}}" readonly>
                    @endforeach
                </div>
                <div class="col">
                    @foreach($employees as $employee)
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$employee->province}}" readonly>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: white; border:none; float:right">
            <img src="/assets/svg/gear.svg" alt="">
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Setting</h5>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-success"> <img src="/assets/svg/edit.svg" alt=""></button>
                        <a href="{{route('logout')}}"> <button type="button" class="btn btn-warning"> <img src="/assets/svg/exit.svg" alt=""></button></a>
                        <a href="{{route('staff.create')}}">
                            <button type="button" class="btn btn-primary"><img src="assets/svg/add.svg" alt="" style="margin-bottom: 4px; margin-right: 5px"> Add more Staff</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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