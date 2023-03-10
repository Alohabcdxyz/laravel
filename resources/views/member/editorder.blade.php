<form action="{{route('historypurchases.update',['order_id' =>$orders -> order_id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Order Status</label>
                    <select required name="status" class="form-control">
                        <option selected>Choose your Status</option>
                        <option value="5" @if($orders->status == 5) checked @endif>Cancel</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">Option</label> <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
<div class="container">
    <div class="row align-items-start">
        <div class="col">
            <a href="{{route('historypurchases' , ['order_id' =>$orders -> order_id])}}"><button type="button" class="btn btn-outline-primary"><img src="/assets/svg/back.svg" alt=""></button></a>
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>