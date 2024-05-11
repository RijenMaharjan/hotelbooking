<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link rel="stylesheet" href="{{asset('bootstrap-5.3.2-dist/css/bootstrap.css')}}" /> --}}
{{-- ------------------------------------------------------------ --}}
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/144a91ca19.js" crossorigin="anonymous"></script>
 
{{-- ----------------------------------------------------------- --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <title>Home Page</title>
</head>
<body>
   {{-- ------ HEADER ---------- --}}
  <!-- navbar -->
<nav class="header sticky ">
  <div class="logo-container">
    <a href="#"><img src="images/logo/logo3.png" alt=""></a>
    </div>
    <ul class="nav-links">
      <li><a href="{{url('/')}}">Home</a></li>
      <li><a href="{{url('room')}}">Rooms</a></li>
      <li><a href="facility.php">Facilities</a></li>
      <li><a href="{{url('page/contact-us')}}">Contact us</a></li>
      @if(Session::has('customerlogin'))
      <li><a href="{{url('booking')}}">Booking</a></li>
      {{-- @if(Session::has('customerlogin')&& count(session('data')) > 0) --}}
      <li><a href="{{url('customer/add-testimonial')}}">Testimonials</a></li>
        @else
        @endif

    </ul>
    <div class="nav-btns-container">
    <div class="nav-btns">

        {{-- <a href=""><button class="btn admin"><i class="fa-solid fa-crown"></i></button></a> --}}
        {{-- @if(Session::has('customerlogin')&& count(session('data')) > 0)
         --}}
         @if(Session::has('customerlogin'))
          <button id="logoutBtn" class="btn secondary-btn">{{ session('data')[0]->full_name }}</button>
          <button id="logoutBtn" class="btn secondary-btn"> <a href="{{url('logout')}}"> Logout</a></button>
        @else
          <button id="loginBtn" class="btn secondary-btn show-login-form">Login</button>
          <button id="registerBtn" class="btn Register show-register-form "> Register</button>
        @endif 
    </div>
    </div>

    <div class="burger-menu">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
  </nav>

  <div class="modal-container">
  <div class="modal-content">
    @include('frontlogin')
    @include('register')
  </div>
</div> 