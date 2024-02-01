@extends('layouts.app')
@section('content')
<head>
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{asset('home/styles/bootstrap4/bootstrap.min.css')}}">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css'">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/responsive.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<div class="super_container">

    <div class="container">
    <p>
OAS (Online Academic Search) is an educational web portal that aims to enhance higher education. It's designed to serve as an interactive and user-friendly platform for various stakeholders, including students, academic institutions, scholars, parents, and others seeking information about higher education. OAS's primary mission is to promote and enhance higher education by consolidating all relevant information into a convenient one-stop portal.

OAS has integrated various features on the web portal such as Course recommend according to the interest and goal of the student, College and Course Shortlist, add college, dashboard management, apply now and provide the visitation date. 

The key objectives of OAS are to bring students and academic institutions together on the best educational platform and to support students in making informed decisions that simplify their lives and save them time.
</p>
	</div>

</div>

<script src="{{asset('home/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('home/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('home/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('home/plugins/easing/easing.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>
@endsection