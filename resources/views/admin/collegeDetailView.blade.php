@extends('layouts.admin')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap JavaScript (Popper.js is required) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include Custom CSS for Styling -->
    <link rel="stylesheet" href="styles.css">

    <!-- Custom CSS to add borders -->
    <style>
        .bordered {
            border: 1px solid #000;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>


    <div class="container">
        <div class="row bordered">
            <div class="col-4 text-center">
                <img src="..." class="img-thumbnail" alt="...">
            </div>
            <div class="col-4 text-center">
                {{$college->name}}
            </div>
            <div class="col-4 text-center">
                {{$college->contact}}
            </div>
        </div>
        <div class="row bordered">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://th.bing.com/th/id/OIP.m_ncGuXHF9HfzdjWHtAYYQHaEo?w=258&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://th.bing.com/th/id/OIP.ZKoPeUj28P3qRK-bS3YeNwHaFS?w=276&h=197&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://th.bing.com/th/id/OIP.Zld3KqnAhmd4447g63G1GQHaE8?w=274&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row bordered">
            <div class="col-12">
                <div class="row">
				    <div class="col">
                        <div class="section_title text-center">
                            <h1>Description</h1>
                        </div>
				    </div>
			    </div>
                <p>{{$college->description}}</p>
            </div>
        </div>
        <div class="row bordered">
            <div class="col-12">
                <div class="row">
				    <div class="col">
                        <div class="section_title text-center">
                            <h1>Courses</h1>
                        </div>
				    </div>
			    </div>
                <div class="row course_boxes">
                    @foreach ($college->courseDetails as $courseDetail)
                        <div class="col-lg-4 course_box border border-2">
                            <div class="card">
                                <br/>
                                <div class="card-body text-center">
                                    <div class="card-title"><a href="courses.html">{{$courseDetail->course->name}}</a></div>
                                    <div class="card-text">{{$courseDetail->course->stream}}, {{$courseDetail->course->subStream}}</div>
                                </div>
                                <br/>
                                <div class="d-flex justify-content-center">
                                    <a href="/view/course/description/{{$courseDetail->course->id}}">
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
</body>
@endsection