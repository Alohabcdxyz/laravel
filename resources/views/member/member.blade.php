@extends('master.master')

@section('content')
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>Only the best is good enough</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide.jpg" style="height:fit-content;width:fit-content" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide1.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>We Leave A Delicious Memory For You</h2>
                    </div>
                    <p>The name ‘LEGO’ is an abbreviation of the two Danish words “leg godt”, meaning “play well”. It’s our name and it’s our ideal. <br>
                        The LEGO Group was founded in 1932 by Ole Kirk Kristiansen. The company has passed from father to son and is now owned by Kjeld Kirk Kristiansen, a grandchild of the founder.
                        It has come a long way over the past almost 90 years - from a small carpenter’s workshop to a modern, global enterprise that is now one of the world’s largest manufacturers of toys. <br>
                        The LEGO brick is our most important product. We are proud to have been named “Toy of the Century” twice. Our products have undergone extensive development over the years – but the foundation remains the traditional LEGO brick.
                        The brick in its present form was launched in 1958. The interlocking principle with its tubes makes it unique and offers unlimited building possibilities. It's just a matter of getting the imagination going – and letting a wealth of creative ideas emerge through play.
                    </p>
                    <div class="row">
                        <div class="col-4">
                            <img class="thumbchild" src="assets/images/25000.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="thumbchild" src="assets/images/thumb.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="thumbchild" src="assets/images/thum1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <img src="assets/images/timeline.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Lego</h6>
                    <h2>Our selection of <img src="assets/images/logo.png" style="height:30px; padding-bottom:8px"> with high quality</h2>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; "><img class="tabs-img" src="assets/images/ct.png" alt=""></div>
    <br>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($city as $data)
                <div class="item">
                    <div class='card card1' style="background-image: url('{{('/assets/images/'.$data->image)}}')">
                        <div class="price">
                            <h6>${{$data->price}}</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>{{$data->name}}</h1>
                            <p class='description' style="  white-space: nowrap; height: 50px; overflow: hidden; text-overflow: ellipsis; ">{{$data->description}}</p>
                            <div class="main-text-button" style="display: flex;">
                                <div class="scroll-to-section" style="color: white; margin-right: 20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" style="margin-bottom: 2px;" viewBox="0 0 20 18" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 hhbQvj">
                                                <path d="M16.84 8.417L10 15.204 3.16 8.417A3.67 3.67 0 012 5.739C2 3.677 3.71 2 5.815 2a3.82 3.82 0 012.754 1.159l1.43 1.467 1.433-1.467A3.818 3.818 0 0114.186 2C16.289 2 18 3.677 18 5.739a3.673 3.673 0 01-1.16 2.678M9.986 18l.014-.014.014.014 8.223-8.116-.018-.019a5.678 5.678 0 001.78-4.126C20 2.569 17.398 0 14.187 0A5.829 5.829 0 0010 1.762 5.827 5.827 0 005.815 0C2.604 0 0 2.569 0 5.739a5.68 5.68 0 001.782 4.126" fill="currentColor" fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                                <div class="scroll-to-section" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="{{route('addCart',['product_id' => $data->product_id])}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                                                <g fill="currentColor" fill-rule="evenodd">
                                                    <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                                    <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <br>

    <div style="text-align: center;"><img class="tabs-img" src="assets/images/mv.png" alt=""></div>
    <br>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($marvel as $data)
                <div class="item">
                    <div class='card card1' style="background-image: url('{{('/assets/images/'.$data->image)}}')">
                        <div class="price">
                            <h6>${{$data->price}}</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>{{$data->name}}</h1>
                            <p class='description' style="  white-space: nowrap; height: 50px; overflow: hidden; text-overflow: ellipsis; ">{{$data->description}}</p>
                            <div class="main-text-button" style="display: flex;">
                                <div class="scroll-to-section" style="color: white; margin-right: 20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" style="margin-bottom: 2px;" viewBox="0 0 20 18" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 hhbQvj">
                                                <path d="M16.84 8.417L10 15.204 3.16 8.417A3.67 3.67 0 012 5.739C2 3.677 3.71 2 5.815 2a3.82 3.82 0 012.754 1.159l1.43 1.467 1.433-1.467A3.818 3.818 0 0114.186 2C16.289 2 18 3.677 18 5.739a3.673 3.673 0 01-1.16 2.678M9.986 18l.014-.014.014.014 8.223-8.116-.018-.019a5.678 5.678 0 001.78-4.126C20 2.569 17.398 0 14.187 0A5.829 5.829 0 0010 1.762 5.827 5.827 0 005.815 0C2.604 0 0 2.569 0 5.739a5.68 5.68 0 001.782 4.126" fill="currentColor" fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                                <div class="scroll-to-section" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="{{route('addCart',['product_id' => $data->product_id])}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                                                <g fill="currentColor" fill-rule="evenodd">
                                                    <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                                    <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <br>

    <div style="text-align: center;"><img class="tabs-img" src="assets/images/dc.png" alt=""></div>
    <br>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($dc as $data)
                <div class="item">
                    <div class='card card1' style="background-image: url('{{('/assets/images/'.$data->image)}}')">
                        <div class="price">
                            <h6>${{$data->price}}</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>{{$data->name}}</h1>
                            <p class='description' style="  white-space: nowrap; height: 50px; overflow: hidden; text-overflow: ellipsis; ">{{$data->description}}</p>
                            <div class="main-text-button" style="display: flex;">
                                <div class="scroll-to-section" style="color: white; margin-right: 20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" style="margin-bottom: 2px;" viewBox="0 0 20 18" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 hhbQvj">
                                                <path d="M16.84 8.417L10 15.204 3.16 8.417A3.67 3.67 0 012 5.739C2 3.677 3.71 2 5.815 2a3.82 3.82 0 012.754 1.159l1.43 1.467 1.433-1.467A3.818 3.818 0 0114.186 2C16.289 2 18 3.677 18 5.739a3.673 3.673 0 01-1.16 2.678M9.986 18l.014-.014.014.014 8.223-8.116-.018-.019a5.678 5.678 0 001.78-4.126C20 2.569 17.398 0 14.187 0A5.829 5.829 0 0010 1.762 5.827 5.827 0 005.815 0C2.604 0 0 2.569 0 5.739a5.68 5.68 0 001.782 4.126" fill="currentColor" fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                                <div class="scroll-to-section" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="{{route('addCart',['product_id' => $data->product_id])}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                                                <g fill="currentColor" fill-rule="evenodd">
                                                    <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                                    <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <br>

    <div style="text-align: center;"><img class="tabs-img" src="assets/images/techniclogo.png" alt=""></div>
    <br>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($technic as $data)
                <div class="item">
                    <div class='card card1' style="background-image: url('{{('/assets/images/'.$data->image)}}')">
                        <div class="price">
                            <h6>${{$data->price}}</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>{{$data->name}}</h1>
                            <p class='description' style="  white-space: nowrap; height: 50px; overflow: hidden; text-overflow: ellipsis; ">{{$data->description}}</p>
                            <div class="main-text-button" style="display: flex;">
                                <div class="scroll-to-section" style="color: white; margin-right: 20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" style="margin-bottom: 2px;" viewBox="0 0 20 18" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 hhbQvj">
                                                <path d="M16.84 8.417L10 15.204 3.16 8.417A3.67 3.67 0 012 5.739C2 3.677 3.71 2 5.815 2a3.82 3.82 0 012.754 1.159l1.43 1.467 1.433-1.467A3.818 3.818 0 0114.186 2C16.289 2 18 3.677 18 5.739a3.673 3.673 0 01-1.16 2.678M9.986 18l.014-.014.014.014 8.223-8.116-.018-.019a5.678 5.678 0 001.78-4.126C20 2.569 17.398 0 14.187 0A5.829 5.829 0 0010 1.762 5.827 5.827 0 005.815 0C2.604 0 0 2.569 0 5.739a5.68 5.68 0 001.782 4.126" fill="currentColor" fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                                <div class="scroll-to-section" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="{{route('addCart',['product_id' => $data->product_id])}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                                                <g fill="currentColor" fill-rule="evenodd">
                                                    <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                                    <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <br>

    <div style="text-align: center;"><img class="tabs-img" src="assets/images/icon.jpg" alt="" width="100px"></div>
    <br>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($icon as $data)
                <div class="item">
                    <div class='card card1' style="background-image: url('{{('/assets/images/'.$data->image)}}')">
                        <div class="price">
                            <h6>${{$data->price}}</h6>
                        </div>
                        <div class='info'>
                            <h1 class='title'>{{$data->name}}</h1>
                            <p class='description' style="  white-space: nowrap; height: 50px; overflow: hidden; text-overflow: ellipsis; ">{{$data->description}}</p>
                            <div class="main-text-button" style="display: flex;">
                                <div class="scroll-to-section" style="color: white; margin-right: 20px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" style="margin-bottom: 2px;" viewBox="0 0 20 18" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 hhbQvj">
                                                <path d="M16.84 8.417L10 15.204 3.16 8.417A3.67 3.67 0 012 5.739C2 3.677 3.71 2 5.815 2a3.82 3.82 0 012.754 1.159l1.43 1.467 1.433-1.467A3.818 3.818 0 0114.186 2C16.289 2 18 3.677 18 5.739a3.673 3.673 0 01-1.16 2.678M9.986 18l.014-.014.014.014 8.223-8.116-.018-.019a5.678 5.678 0 001.78-4.126C20 2.569 17.398 0 14.187 0A5.829 5.829 0 0010 1.762 5.827 5.827 0 005.815 0C2.604 0 0 2.569 0 5.739a5.68 5.68 0 001.782 4.126" fill="currentColor" fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                                <div class="scroll-to-section" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <li class="scroll-to-section">
                                        <a href="{{route('addCart',['product_id' => $data->product_id])}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" style="margin-bottom: 2px;" viewBox="0 0 16 20" aria-hidden="true" class="Icon__StyledSVG-sc-lm07h6-0 jRfmwl MainBarstyles__ActionIcon-sc-1cg7sjw-16 kfAPxF">
                                                <g fill="currentColor" fill-rule="evenodd">
                                                    <path d="M4 3.512v5.804c0 .377.349.684.779.684.43 0 .779-.307.779-.684V3.512C5.558 2.33 6.653 1.368 8 1.368c1.347 0 2.442.962 2.442 2.144v5.804c0 .377.35.684.78.684.43 0 .778-.307.778-.684V3.512C12 1.575 10.206 0 8 0S4 1.575 4 3.512z"></path>
                                                    <path d="M2.46 6.33c-.269 0-.489.194-.5.441L1.435 18.19a.436.436 0 00.131.332.52.52 0 00.348.149h12.151c.276 0 .501-.207.501-.462l-.525-11.436c-.011-.248-.23-.442-.5-.442H2.46zM14.448 20l-12.974-.001a1.591 1.591 0 01-1.064-.462 1.357 1.357 0 01-.408-1.03L.56 6.372C.595 5.602 1.277 5 2.11 5h11.78c.835 0 1.516.602 1.551 1.372l.56 12.197c0 .789-.697 1.431-1.553 1.431z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Themes</h6>
                    <h2>Give the best for you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/LEGO"><i class="fa-brands fa-facebook"></i></i></a></li>
                            <li><a href="https://twitter.com/LEGO_Group"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/lego/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/dc.jpg" style="height: 200px; width: 240px" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>DC</h4>
                        <div style="text-align: justify;font-size: 12px" id="infor4">One of the oldest and largest comic book companies, DC Comics, has been creating infamous Super-Villains and Super-Heroes since 1934 - and our LEGO® DC sets let you bring the DC Universe to life. The best gifts for DC lovers and fans of all ages </div>
                        <button id="btn_hide4" onclick="toggle4()">Hide</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/LEGO"><i class="fa-brands fa-facebook"></i></i></a></li>
                            <li><a href="https://twitter.com/LEGO_Group"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/lego/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/city.png" style="height: 200px; width: 240px" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>City</h4>
                        <div style="text-align: justify;font-size: 12px" id="infor1">Playtime hits the big city with LEGO® City sets - the best gifts for birthdays and holidays. Organize emergency services like the LEGO® City police and firefighter teams to arrest crooks and put out fires, or explore the world from the LEGO® City </div>
                        <button id="btn_hide1" onclick="toggle1()">Hide</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/LEGO"><i class="fa-brands fa-facebook"></i></i></a></li>
                            <li><a href="https://twitter.com/LEGO_Group"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/lego/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/marvel.jpg" style="height: 200px; width: 240px" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Marvel</h4>
                        <div style="text-align: justify;font-size: 12px" id="infor2">Build something extraordinary and become your favorite hero with Marvel playsets! Team up with other legendary Marvel characters on daring missions to defeat super villains. Recreate epic movie action scenes or create your own amazing adventures with cool minifigures, vehicles, buildings, gadgets and weapons </div>
                        <button id="btn_hide2" onclick="toggle2()">Hide</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/LEGO"><i class="fa-brands fa-facebook"></i></i></a></li>
                            <li><a href="https://twitter.com/LEGO_Group"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/lego/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                        <img src="assets/images/tech.jpg" style="height: 200px; width: 240px" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>Technic</h4>
                        <div style="text-align: justify;font-size: 12px" id="infor3">We can learn as we play and explore their passion for engineering with detailed LEGO® Technic™ designs. Featuring functioning gearboxes, wheels and axles that kids puts together themselves, each build will help to grow children's understanding of the intricate details that propel the cars, planes, motorbikes and construction vehicles and make them work. </div>
                        <button id="btn_hide3" onclick="toggle3()">Hide</button>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="">0985296959</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="">alohabcd@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number" required="">
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Thank for the comment</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Lego Week</h6>
                    <h2>This Week’s Special Offers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img class="tabs-img" src="assets/images/ct.png" alt="">City</a></li>
                                        <li><a href='#tabs-2'><img class="tabs-img" src="assets/images/mv.png" alt="">Marvel</a></a></li>
                                        <li><a href='#tabs-3'><img class="tabs-img" src="assets/images/dc.png" alt="">DC</a></a></li>
                                        <li><a href='#tabs-4'><img class="tabs-img" src="assets/images/techniclogo.png" alt="">Technic</a></a></li>
                                        <li><a href='#tabs-5'><img class="tabs-img" src="assets/images/icon.jpg" alt="">Icons</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$14</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-4'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-5'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/1.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$10.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('js')
<script>
    function addToCart(event) {
        event.preventDefault();
        let urlcart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function(data) {

            },
            error: function() {

            }
        })
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@stop