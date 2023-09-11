<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  @stack('title')
  <meta content="width=device-width, initial-scale=1.0" name="viewport">  
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontassets/lib/animate/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontassets/lib/owlcarousel/assets/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontassets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontassets/css/style.css')}}">
  <link rel="icon" href="{{asset('frontassets/images/favicon.png')}}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
  <!-- preloader end -->

<!-- header -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>College | ITI</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{url('/about')}}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{url('/courses')}}" class="nav-item nav-link {{ request()->is('courses') ? 'active' : ''}}">Courses</a>               
                <a href="{{url('/gallery')}}" class="nav-item nav-link {{ request()->is('gallery') ? 'active' : '' }}">Gallery</a>               
                <a href="{{url('/contact')}}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <!-- <a href="{{url('/join')}}" class="nav-item nav-link" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
            
        </div>
    </nav>