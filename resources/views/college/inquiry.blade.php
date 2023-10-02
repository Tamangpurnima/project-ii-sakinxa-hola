@extends('layouts.college')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inquiry Form</title>
</head>
<div class="container">
        <div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>Course Id</th>
                <th>College Id</th>
                <th>Description</th>
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
                <td><a href="/college/inquiry/edit/{{$inquiry->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
            <tr>
                <td> <a href="/college/inquiry/givedate"><button type="button" class="btn btn-success">Give Date</button></a></td>
            </tr>
        </table>
    </div>  


        
</div>
    
@endsection