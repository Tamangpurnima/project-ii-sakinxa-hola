@extends('layouts.admin')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Include Bootstrap JavaScript (Popper.js is required) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Include Custom CSS for Styling -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- Custom CSS to align content to the left -->
    <style>
        .text-left {
            text-align: left;
        }
    </style>
</head>
    <div class="container">
        <div class="row border">
            <div class="col-12 text-center">
                <img src="your-image.jpg" alt="Your Image" class="img-fluid rounded-circle">
            </div>
        </div>
        <div class="row mt-4 border">
            <div class="col-12">
                <h2>Personal Details</h2>
                <p class="text-left"><strong>Name:</strong> Purnima Tamang</p>
                <p class="text-left"><strong>Email:</strong> Pur@gmail.com</p>
                <p class="text-left"><strong>Contact:</strong> 9815678765</p>
            </div>
        </div>
        <div class="row mt-4 border">
            <div class="col-12">
                <h2>Academic Detail</h2>
                <p class="text-left"><strong>Passed Year:</strong> 2073</p>
                <p class="text-left"><strong>Previous School/College:</strong> Everest College</p>
                <p class="text-left"><strong>GPA:</strong> 3.0</p>
            </div>
        </div>
        <div class="row mt-4 border">
            <div class="col-12">
                <h2>Interest</h2>
                <p class="text-left">I am mainly interested in Programming</p>
            </div>
        </div>
        <div class="row mt-4 border">
            <div class="col-12">
                <h2>Goal</h2>
                <p class="text-left">My goal is to be a successful programmer</p>
            </div>
        </div>
    </div> 
@endsection

