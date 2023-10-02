@extends('layouts.college')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
@auth('college')
    <p>Welcome, {{ Auth::guard('college')->user()->id }}</p>
@endauth
<div class="container">
    <h2>Edit Course Detail</h2>
    <form id="editForm" action="{{ route('college-coursedetail.update', $courseDetail->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for update -->
        <div class="form-group">
            <label for="courseid">Select Course:</label>
            <select id="courseid" name="course_id" required>
                <option value="" disabled>Select a course</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $course->id == $courseDetail->course_id ? 'selected' : '' }}>{{ $course->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required>{{ $courseDetail->description }}</textarea>
        </div>
        <input type="text" id="collegeid" name="college_id" value="{{ Auth::guard('college')->user()->id }}" hidden>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
