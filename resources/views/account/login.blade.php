<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container1 {
            width: 100%;
            height: 100%;
            background-color: rgb(225, 232, 236);
        }

        .account-logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .account-logo p {
            margin: 20px 0px 23px 10px;
            font-size: 25px;
            font-weight: 700;
        }

        .gif {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-group {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 5px;
        }

        .forgot-acc {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .forgot-acc a {
            padding: 0 30px 0 30px;
            text-decoration: none;
            justify-content: space-between;
        }

        .dont-have-acc {
            text-align: center;
            margin-top: 20px;
        }

        .dont-have-acc a {
            text-decoration: none;
        }

        h5 {
            margin-top: 30px;
            text-align: center;
        }

        .login-with-api {
            display: grid;
            align-items: center;
            justify-content: center;
        }

        .fb {
            margin-bottom: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: white;
            width: 400px;
            background-color: #1877f2;
            border-radius: 5px;
            height: 40px;
            cursor: pointer;
            line-height: 40px;
        }

        .gg {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: black;
            width: 400px;
            background-color: white;
            border-radius: 5px;
            height: 40px;
            margin-bottom: 10px;
            cursor: pointer;
            line-height: 40px;
        }

        .apple {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: white;
            width: 400px;
            background-color: black;
            border-radius: 5px;
            height: 40px;
            line-height: 40px;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .alert-danger {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container1">
        <div class="row">
            <div class="col-md-3 col-md-offset-3"></div>
            <div class="col-md-6 col-md-offset-6">
                <div class="account-logo">
                    <a href="/"> <img src="assets/images/logo.png" style="height: 30px;" alt=""></a>
                    <p>Account</p>
                </div>
                <div class="gif">
                    <img src="assets/images/login.gif" alt="">
                </div>
                @error('login_fail')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com" name="email" value="{{ old('email') }}" id="staticEmail">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="* * * * * * * * * *" name="password" id="inputPassword">
                            <img class="hide" src="assets/svg/hide.svg" alt="" style="width:16px" onclick="myFunction()">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="rememberme">
                        <label class="form-check-label" for="rememberme" style="color:#185d9a;">
                            Remember me
                        </label>
                    </div>
                    <div style="text-align: center;">
                        Remember to log out afterwards if you’re using a shared computer, for example in <br> a library or school.
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Login" name="btn-login" style="width: 200px;border-radius: 20px">
                    </div>
                </form>
                <div class="forgot-acc">
                    <a href="">Forgot username?</a>
                    |
                    <a href="">Forgot password?</a>
                </div>
                <div class="dont-have-acc">
                    <p> Don’t have a LEGO® Account?</p>
                    <a href="signup">Create Account</a>
                </div>
                <h5>Or</h5>
                <div class="login-with-api">
                    <div class="fb">
                        <img src="assets/svg/fb.svg" alt="" style="width:36px">
                        Continue with facebook
                    </div>
                    <div class="gg">
                        <img src="assets/svg/gmail.svg" alt="" style="width:36px">
                        Continue with google
                    </div>
                    <div class="apple">
                        <img src="assets/images/apple.png" alt="" style="width:25px; margin:0 5px 7px 6px;">
                        Continue with apple
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-3" style="background-color:rgb(225, 232, 236)"></div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function myFunction() {
        var x = document.getElementById("inputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>