@extends('layouts.app')
@section('content')
<head>
<title>Course - Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('home/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/courses_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/courses_responsive.css')}}">
</head>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Courses</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Courses</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				@foreach($course as $course)
				<div class="col-lg-4 course_box border border-2">
					<div class="card">
						<br/>
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">{{$course->name}}</a></div>
							<div class="card-text">{{$course->stream}}, {{$course->subStream}}</div>
						</div>
						<br/>
						<div class="d-flex justify-content-center">
							<a href="/view/course/description/{{$course->id}}">
								<button class="btn btn-primary">View</button>
							</a>
						</div>
						<br/>
					</div>
				</div>
				@endforeach				
			</div>
		</div>		
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
<script src="{{asset('home/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('home/plugins/easing/easing.js')}}"></script>
<script src="{{asset('home/js/courses_custom.js')}}"></script>

@endsection