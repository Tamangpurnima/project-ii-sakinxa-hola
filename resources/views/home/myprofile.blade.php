<!DOCTYPE html>
<html lang="en">
<head>
<title>My-Profile</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
        body {
            font-family: Arial, sans-serif;
        }

        .profile {
            text-align: center;
            padding: 20px;
        }

        .profile img {
            max-width: 150px;
            border-radius: 50%;
        }

        .profile h2 {
            margin: 10px 0;
        }

        .section {
            margin: 20px 0;
        }

        .section h3 {
            margin-bottom: 10px;
        }

        .section p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="super_container">

    <x-navbar/>

    <div class="container" style="margin-top: 200px">
    <div class="profile">
        <img src="{{ asset('storage/uploads/' . $student->image) }}" alt="Student Image" style="height: 100px; width: 100px; margin-top: 10px; border: 2px solid black;">
        <h2>{{$student->name}}</h2>
        <p>Email: {{$student->email}}</p>
        <p>Contact: {{$student->contact}}</p>
    </div>


    <div class="section">
        <h3>Academic Information</h3>
        <p>Education Level:{{$student->educationLevel}}</p>
        <p>Passed Year: {{$student->passedyear}}</p>
        <p>Previous School/College: {{$student->previousschool}}</p>
        <p>GPA: {{$student->gpa}}</p>
    </div>

    <div class="section">
        <h3>Interests</h3>
        {{$student->interest}}
    </div>

    <div class="section">
        <h3>Goals</h3>
        {{$student->goal}}
    </div>
	<div class="col-md-4">
                <div class="text-center">
                    <a  href="/myprofile-edit">
                    <button class="btn btn-primary mt-4">Edit Profile</button>
                    </a>
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
<script src="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('home/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('home/plugins/easing/easing.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>

</body>
</html>