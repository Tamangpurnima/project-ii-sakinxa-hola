@extends('layouts.app')
@section('content')
<div class="container">
    @if (!empty($courseDetails) && count($courseDetails) > 0)
        <!-- Display course details when there are records -->
        <ul>
            @foreach ($courseDetails as $detail)
                <div class="col-lg-4 course_box border border-2">
					<div class="card">
						<br/>
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">{{$detail->college->name}}</a></div>
							<div class="card-text">{{$detail->college->stream}}, {{$detail->college->subStream}}</div>
						</div>
						<br/>
						<div class="d-flex justify-content-center">
							<a href="/college/detail/course/description/{{$detail->id}}">
								<button class="btn btn-primary">View</button>
							</a>
						</div>
						<br/>
					</div>
				</div>
            @endforeach
        </ul>
    @else
        <!-- Display a "No data" message when there are no records -->
        <p>No data available.</p>
    @endif
</div>
@endsection
