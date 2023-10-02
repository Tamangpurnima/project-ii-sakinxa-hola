@extends('layouts.admin')
@section('content')
<div class="container">
<div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>Stream</th>
                <th>Sub Stream</th>
                <th>Name</th>
                <th>Short Name</th>
                <th>Description</th>
                <th>GPA</th>
                <th>Duration</th>
            </tr>
            @foreach($course as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->stream}}</td>
                <td>{{$course->subStream}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->shortName}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->gpa_limit}}</td>
                <td>{{$course->duration}}</td>

            
                <td> <a href="/admin/course/view/{{$course->id}}"><button type="button" class="btn btn-success">View</button></a></td>
            </tr>
        

            </tr>
            @endforeach
        </table>
    </div>   
</div>
@endsection