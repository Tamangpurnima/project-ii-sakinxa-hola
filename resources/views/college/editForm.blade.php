@extends('layouts.college')

@section('content')
<head><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <h2 class="text-center">Update College</h2>
    <form method="POST" action="{{ route('college.update', $college) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $college->name) }}" required>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $college->email) }}" readonly>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address" value="{{ old('address', $college->address) }}" required>
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="contact" class="form-control" name="contact" placeholder="Enter Contact" value="{{ old('contact', $college->contact) }}" required>
            @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('contact') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" rows="3" required>{{ old('description', $college->description) }}</textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="logo">Logo:</label>
            <br>
            <img src="{{ asset('storage/' . $college->logo) }}" alt="College Logo" style="height: 100px; width:100px;">

            <input type="file" class="form-control-file" name="logo">
            @if ($errors->has('logo'))
                <span class="text-danger">{{ $errors->first('logo') }}</span>
            @endif
        </div>
        

        <div class="form-group">
            <label for="gallery">Gallery:</label>
            @foreach($college->images as $gallery)
                <div class="gallery-item">
                    <img src="{{ asset('storage/'. $gallery->path) }}" alt="Gallery Image" style="height: 100px; width:100px;">
                    <input type="checkbox" name="remove_gallery[]" value="{{ $gallery->id }}"> Remove
                </div>
            @endforeach
        </div>

        <div class="form-group gallery-container">
            <label for="gallery">Gallery:</label>
            <br><br>
            <input type="file" class="form-control-file gallery-input" name="gallery[]">
            <button type="button" class="remove-gallery">Remove</button>
        </div>
        <button type="button" class="add-gallery">Add More</button>
        <br/>
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

        <!-- Add more fields if needed -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
 
@endsection
