<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function updateCart(qty, rowId) {
            $.get(
                "{{asset('updateCart')}}", {
                    qty: qty,
                    rowId: rowId,
                },
                function() {
                    location.reload();
                }
            )
        }
    </script>
</head>

<body>
    <form action="{{route('cart.stored')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h4>Shopping Cart
                    </h4>
                </div>
                <div class="col-8">
                    <div class="order">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>IMAGE</th>
                                    <th>QUANTITY</th>
                                    <th>PRICE</th>
                                    <th>TOTAL</th>
                                    <th>OPTION</th>
                                </tr>
                            </thead>
                            @php
                            $total = 0;
                            @endphp
                            <tbody>
                                @foreach($items as $item)
                                @php
                                $total += $item->price*$item->qty;
                                @endphp
                                <tr>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        <img src="{{('/assets/images/'.$item->options->img)}}" alt="" width="100px">
                                    </td>
                                    <td>
                                        <input type="text" value="{{$item->qty}}" name="qty[]" hidden>
                                        <input type="number" value="{{$item->qty}}" min="1" width="20px" max="" onchange="updateCart(this.value,'{{$item->rowId}}')">

                                    </td>
                                    <td>
                                        <input type="text" value="{{$item->price}}" name="price" hidden>
                                        $&nbsp{{$item->price}}
                                    </td>
                                    <td>
                                        $&nbsp{{$item->price*$item->qty}}
                                    </td>
                                    <td>
                                        <a href="{{asset('deleteCart/'.$item->rowId)}}"><button type="button" class="btn btn-outline-danger"><img src="/assets/svg/trash.svg" alt=""></button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="option">
                            <a href="{{route('member')}}"><button type="button" class="btn btn-outline-success"><img src="/assets/svg/back.svg" alt="" style="margin-bottom: 4px;">&nbsp;&nbsp;Continue Shopping</button></a>
                            <a href="{{asset('deleteCart/all')}}"><button type="button" class="btn btn-outline-danger" style="float: right; margin: 0 10px 0 10px"><img src="/assets/svg/trash.svg" alt="" style="margin-bottom: 3px;">Delete All</button></a>
                            <button type="submit" class="btn btn-outline-success" style="float: right;">Make Purchase&nbsp;&nbsp;<img src="/assets/svg/next.svg" alt="" style="margin-bottom: 4px;"></button>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="voucher">
                        <form class="row g-3">
                            <div class="col-auto">
                                <label>Have Coupon?</label>
                                <input type="file" class="form-control" placeholder="Coupon Code">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="cus_form">
                        <div class="form">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="receiver_name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="receiver_phone">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="text" class="form-control" name="receiver_address">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Total</label>
                                <input type="text" class="form-control" value="{{$total}}" readonly name="total">

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="pay">
                        <p>Select a payment method</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/ibank.png" alt="Internet Banking">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/atm.png" alt="ATM">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/cash.png" alt="Cash">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<style>
    .voucher {
        height: 100px;
        width: 100%;
        border: 1px solid rgb(225, 225, 225);
        border-radius: 10px;
    }

    .voucher form {
        width: 90%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .cus_form {
        width: 100%;
        border: 1px solid rgb(225, 225, 225);
        border-radius: 10px;
    }

    .cus_form .form {
        width: 90%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .pay {
        width: 100%;
        border: 1px solid rgb(225, 225, 225);
        border-radius: 10px;
    }

    .pay p {
        width: 90%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .pay img {
        width: 70%;
    }

    table th:first-child {
        width: 30%;
    }

    table th:last-child {
        width: 10%;
    }

    table th:nth-child(2) {
        width: 30%;
    }

    table th:nth-child(3) {
        width: 10%;
    }

    table th:nth-child(4) {
        width: 10%;
    }


    .order {
        width: 100%;
        border: 1px solid rgb(225, 225, 225);
        border-radius: 10px;
    }

    .order table {
        width: 90%;
        left: 0;
        right: 0;
        margin: auto;
        margin-bottom: 20px;
    }

    .order .option {
        width: 90%;
        left: 0;
        right: 0;
        margin: auto;
        margin-bottom: 20px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
    }

    table th {

        text-align: left;
        padding: 8px;
        text-align: center;
        vertical-align: middle;
        background-color: #fff3cd;
    }

    table td {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: left;
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    table td input {
        width: 50px;
    }
</style>

</html>