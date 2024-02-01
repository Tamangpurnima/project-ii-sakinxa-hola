@extends('layouts.college')
@section('content')
<div class="container mt-5">
    <h2 class="text-center">Update Inquiry</h2>
    <form action="{{ route('inquiry.update', $inquiry->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <input type="text" class="form-control" id="message" name="message" value="{{ $inquiry->message }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Inquiry</button>
</form>

</div>
@endsection
