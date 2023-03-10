<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LEGO</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/lego.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #btn_hide1,
        #btn_hide2,
        #btn_hide3,
        #btn_hide4 {
            width: 50px;
            border-radius: 10px;
            border: none;
            background-color: rgb(161, 194, 249);
            margin-top: 10px;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .tabs-img {
            height: 30px;
        }
    </style>
</head>

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <header class="header-area header-sticky">
        <nav class="main-nav">
            <a href="{{route('member')}}" class="logo">
                <img src="assets/images/logo.png" style="height:60px; width:60px; margin-left: 10px">
            </a>
            <ul class="nav" style="margin-right: 30px">
                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                <li class="scroll-to-section"><a href="#about">About</a></li>
                <li class="scroll-to-section"><a href="#menu">Lego</a></li>
                <li class="scroll-to-section"><a href="#chefs">Themes</a></li>
                <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                <li class="scroll-to-section"><a href="#offers">Best Offers</a></li>
                <li class="scroll-to-section">
                    <div class="search">
                        <form action="{{route('search')}}" role="search" method="get">
                            <input type="text" value="" placeholder=" Search" name="key">
                            <button>
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </li>
                <li class="scroll-to-section">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" style="margin-bottom: 2px;" viewBox="0 0 20 18" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 hhbQvj">
                            <path d="M16.84 8.417L10 15.204 3.16 8.417A3.67 3.67 0 012 5.739C2 3.677 3.71 2 5.815 2a3.82 3.82 0 012.754 1.159l1.43 1.467 1.433-1.467A3.818 3.818 0 0114.186 2C16.289 2 18 3.677 18 5.739a3.673 3.673 0 01-1.16 2.678M9.986 18l.014-.014.014.014 8.223-8.116-.018-.019a5.678 5.678 0 001.78-4.126C20 2.569 17.398 0 14.187 0A5.829 5.829 0 0010 1.762 5.827 5.827 0 005.815 0C2.604 0 0 2.569 0 5.739a5.68 5.68 0 001.782 4.126" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li class="scroll-to-section">
                    <a href="{{route('cart')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                            <g fill="currentColor" fill-rule="evenodd">
                                <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="scroll-to-section">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: white; border:none; float:right">
                        <svg width="20" height="20" style="margin-bottom: 3px;" viewBox="0 0 20 22" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="Icon__StyledSVG-sc-lm07h6-0 kBnuCw UtilityBarstyles__AccountIcon-sc-1uwh8t8-5 KHcEY">
                            <g transform="translate(1 1)" fill-rule="nonzero" fill="none">
                                <rect stroke="#2C2C2C" stroke-width="1.5" fill="#FFCF00" x="4.875" width="8.25" height="6.038" rx=".729"></rect>
                                <rect stroke="#2C2C2C" stroke-width="1.2" fill="#FFCF00" x="3.75" y="14.34" width="10.5" height="5.66" rx=".729"></rect>
                                <path d="M14.25 17.736H3.75C0 17.736 0 14.717 0 14.717v-8.68S0 3.02 3.75 3.02h10.5C18 3.019 18 6.038 18 6.038v8.679s0 3.019-3.75 3.019z" stroke="#2C2C2C" stroke-width="1.5" fill="#FFCF00"></path>
                                <path d="M7.125 8.868a.94.94 0 00-.938-.943.94.94 0 00-.937.943c0 .52.42.943.938.943a.94.94 0 00.937-.943zm4.688-.943a.94.94 0 00-.938.943c0 .52.42.943.938.943a.94.94 0 00.937-.943.94.94 0 00-.938-.943zm.293 3.86a.452.452 0 00-.649.21c-.005.008-.461.84-2.463.84-1.953 0-2.437-.793-2.462-.84a.446.446 0 00-.638-.234.618.618 0 00-.215.761c.063.147.69 1.446 3.315 1.446s3.25-1.299 3.313-1.446a.609.609 0 00-.201-.738z" fill="#2C2C2C"></path>
                            </g>
                        </svg>
                    </button>

                </li>
                <span style="margin-top: 8px;">|</span>
                <li class="scroll-to-section">
                    <a href="">
                        <img src="assets/images/vip.png" height="20px" alt="">
                        VIP
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Your Order</h5>
                    </div>
                    <div class="modal-body">
                        <a href="{{route('historypurchases')}}">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                                    <g fill="currentColor" fill-rule="evenodd">
                                        <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                        <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                                    </g>
                                </svg>
                            </button>
                        </a>
                        <a href="{{route('logout')}}"> <button type="button" class="btn btn-warning"> <img src="/assets/svg/exit.svg" alt=""></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/LEGO"><i class="fa-brands fa-facebook"></i></i></a></li>
                            <li><a href="https://twitter.com/LEGO_Group"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/lego/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo.png" style="height: 100px; width:100px"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Lego
                            <br>Design: Nguyễn Tuấn Minh
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
    <script>
        function toggle1() {
            var x1 = document.getElementById("infor1");
            var y1 = document.getElementById("btn_hide1");
            if (x1.style.display === "none") {
                x1.style.display = "block";
                y1.textContent = 'Hide';
            } else {
                x1.style.display = "none";
                y1.textContent = 'Show';
            }
        }

        function toggle2() {
            var x1 = document.getElementById("infor2");
            var y1 = document.getElementById("btn_hide2");
            if (x1.style.display === "none") {
                x1.style.display = "block";
                y1.textContent = 'Hide';
            } else {
                x1.style.display = "none";
                y1.textContent = 'Show';
            }
        }

        function toggle3() {
            var x1 = document.getElementById("infor3");
            var y1 = document.getElementById("btn_hide3");
            if (x1.style.display === "none") {
                x1.style.display = "block";
                y1.textContent = 'Hide';
            } else {
                x1.style.display = "none";
                y1.textContent = 'Show';
            }
        }

        function toggle4() {
            var x1 = document.getElementById("infor4");
            var y1 = document.getElementById("btn_hide4");
            if (x1.style.display === "none") {
                x1.style.display = "block";
                y1.textContent = 'Hide';
            } else {
                x1.style.display = "none";
                y1.textContent = 'Show';
            }
        }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>

</html>