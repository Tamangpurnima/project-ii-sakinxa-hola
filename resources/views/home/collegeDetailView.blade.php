@extends('layouts.app')
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
            <img src="{{ asset('storage/' . $college->logo) }}" alt="College Logo" style="height: 100px; width:100px;">

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
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($college->images as $gallery)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/'. $gallery->path) }}" alt="Gallery Image" style="height: 100px; width:100px;">
                        </div>
                    @endforeach
                </div>
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
                                    <a href="/college/detail/course/description/{{$courseDetail->id}}">
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