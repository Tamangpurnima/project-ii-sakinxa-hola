@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-center">Inquiry</h2>
    <!-- <div class="container"> -->
        <!-- create button here-->
        <!-- <a href="/college/show"><button type="button" class="btn btn-success">+ Create</button></a> -->
    <!-- </div> -->
    <div class="container">
    <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>ID</th>
                <th>Student Id</th>
                <th>CourseDetail Id</th>
                <th>Inquiry Date</th>
                <th>Delete</th>
                <th>Edit</th>

            </tr>
            @foreach($inquiry as $inquiry)
            <tr>
                <td>{{$inquiry->id}}</td>
                <td>{{$inquiry->student_id}}</td>
                <td>{{$inquiry->collegedetail_id}}</td>
                <td>{{$inquiry->inquirydate}}</td>
                <td><a href="/inquiry/delete/{{$inquiry->id}}" class="btn btn-danger">DELETE</a></td>
                <td><a href="/inquiry/edit/{{$inquiry->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
        </table>
    </div>
    </div>   
</div>

@endsection
