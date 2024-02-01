<!DOCTYPE html>
<html lang="en">
<head>
<title>OAS</title>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

<div class="super_container">

<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="{{asset('home/images/logoo.png')}}" height="100px" width="100px" alt="">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="/">Home</a></li>
						@auth('student')
						<li class="main_nav_item"><a href="/recommend">Recommend Me</a></li>
				
						@else
						<li class="main_nav_item"><a href="/login">Recommend Me</a></li>
						
						@endauth

						<li class="main_nav_item"><a href="courses">Courses</a></li>
						<li class="main_nav_item"><a href="college">College</a></li>
						<li class="main_nav_item"><a href="aboutus">About Us</a></li>
						<li class="main_nav_item"><a href="contact">Contact</a></li>
						
					</ul>
				</div>
			</nav>
		</div>
		
		<div class="header_side d-flex flex-row justify-content-center align-items-center">

			@auth('student')
				<!-- Display student-specific dropdown menu -->
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::guard('student')->user()->name }}
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="myprofile">My Profile</a></li>
						<li><a class="dropdown-item" href="inquiry">My Inquiry</a></li>
						<li><a class="dropdown-item" href="changepassword">Change Password</a></li>
						<li><a class="dropdown-item" href="/student/logout">Logout</a></li>
					</ul>
				</div>
				@else
					@if (Route::has('login'))
						<a href="/login">
							<button type="button" class="btn btn-primary mr-2">Login</button>
						</a>
					@endif
					@if (Route::has('register'))
						<a href="/register">
							<button type="button" class="btn btn-primary">Sign up</button>
						</a>
					@endif
			@endauth
		
		<!-- @guest
			@if (Route::has('login'))
				<a href="/login">
					<button type="button" class="btn btn-primary">Login</button>
				</a>
			@endif

			@if (Route::has('register'))
				<a href="/register">
					<button type="button" class="btn btn-primary">Sign up</button>
				</a>
			@endif
		@else
			
		@endguest -->



		</div>
		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>

    <div class="container" style="margin-top: 200px; min-height: 100vh">
    @yield('content')
	</div>
    <x-footer/>

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

</body>
</html>