@extends('layouts.admin')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseDetailshow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        ol, ul {
            padding-left: 0 !important; 
        }
    </style>
</head>     
<body>
<div class="container">
        <!-- create button here-->
        <!-- <a href="/course/add"><button type="button" class="btn btn-success">+ Create</button></a> -->
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
            @foreach($courseDetails as $courseDetail)
            <tr>
                <td>{{$courseDetail->id}}</td>
                <td>{{$courseDetail->course_id}}</td>
                <td>{{$courseDetail->college_id}}</td>
                <td>{{$courseDetail->description}}</td>

                <td><a href="/coursedetail/delete/{{$courseDetail->id}}" class="btn btn-danger">DELETE</a></td>
                <td><a href="/coursedetail/edit/{{$courseDetail->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
        </table>
    </div>   
</div>
@endsection
