@extends('layouts.app')
@section('content')
<head><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
    <div class="container" style="margin-top: 200px, height: 100px">
    <div class="container form-container" style="margin-top: 200px">
   
        <h2 class="text-center">College Form</h2>
        <form id="Collegeform" method="POST" action="{{ route('college.store') }}" enctype="multipart/form-data">
        @csrf    
        <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control"  name="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="tel" class="form-control" name="address" placeholder="Enter Address" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="contact" class="form-control" name="contact" placeholder="Enter Contact" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="file" class="form-control-file" name="logo">
            </div>
            <div class="form-group gallery-container">
                <label for="gallery">Gallery:</label>
                <input type="file" class="form-control-file gallery-input" name="gallery[]">
                <button type="button" class="remove-gallery">Remove</button>
            </div>
            <button type="button" class="add-gallery">Add More</button>
            <br/>
            <button type="submit">Submit</button>

            @include('partials.errors')
        </form>
        <script>
            $(document).ready(function() {
                // Add More button click event
                $(".add-gallery").click(function() {
                    // Clone the gallery input element
                    var clonedInput = $(".gallery-container:first input.gallery-input").eq(0).clone();
                    
                    // Clear the value of the cloned input
                    clonedInput.val("");
                    
                    // Create a Remove button
                    var removeButton = '<button type="button" class="remove-gallery">Remove</button>';
                    
                    // Create a new div to hold the cloned input and Remove button
                    var newContainer = $('<div class="form-group gallery-container"></div>');
                    
                    // Append the cloned input and Remove button to the new container
                    newContainer.append(clonedInput, removeButton);
                    
                    // Append the new container to the form
                    $(".gallery-container:last").after(newContainer);
                });

                // Remove button click event (delegated)
                $(document).on("click", ".remove-gallery", function() {
                    // Remove the container that holds the input and Remove button
                    $(this).closest(".gallery-container").remove();
                });
            });
        </script>

    </div>
@endsection