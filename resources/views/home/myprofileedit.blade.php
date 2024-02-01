@extends('layouts.app')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* .form-section{
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
        } */

        .form-group {
            margin-bottom: 15px;
            padding: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 18px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
		<div class="container">
            <h2>SignUp Form</h2>
            <form id="userForm" method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
            @csrf
            <!-- User Information Section -->
            <div class="form-section">
                <h3>User</h3>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" value="{{ $student->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email Address" value="{{ $student->email }}" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number:</label>
                    <input type="tel" id="contact" name="contact" placeholder="Enter Contact Number" value="{{ $student->contact }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image">
                </div>
            </div>

            <!-- Academic Details Section -->
            <div class="form-section">
                <h3>Academic Details</h3>
                <div class="form-group">
                    <label for="educationLevel">Education Level:</label>
                    <select id="educationLevel" name="educationLevel" required>
                        <option value="SEE" @if($student->educationLevel === 'SEE') selected @endif>SEE</option>
                        <option value="+2" @if($student->educationLevel === '+2') selected @endif>+2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="passedYear">Passed year:</label>
                    <input type="text" id="passedYear" name="passedyear" placeholder="Enter Passed Year" value="{{ $student->passedyear }}" required>
                </div>
                <div class="form-group">
                    <label for="previouscollege">Previous College/School:</label>
                    <input type="text" id="previousschool" name="previousschool" placeholder="Enter Previous College/School" value="{{ $student->previousschool }}" required>
                </div>
                <div class="form-group">
                    <label for="gpa">GPA:</label>
                    <input type="text" id="gpa" name="gpa" placeholder="Enter GPA" value="{{ $student->gpa }}" required>
                </div>
            </div>

            <!-- Interests Section -->
            <div class="form-group">
                <label for="interests"><h3>Interests:</h3></label>
                <textarea id="interests" name="interest" rows="3" placeholder="Enter Interests" required>{{ $student->interest }}</textarea>
            </div>

            <!-- Goals Section -->
            <div class="form-group">
                <label for="goals"><h3>Goals:</h3></label>
                <textarea id="goals" name="goal" rows="3" placeholder="Enter Goals" required>{{ $student->goal }}</textarea>
            </div>
            <button type="submit">Update</button>
        </form>

        </div>
        
@endsection
