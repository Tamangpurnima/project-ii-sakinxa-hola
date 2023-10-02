@extends('layouts.admin')
@section('content')

<div class="container">
    <h2 class="text-center">Contact</h2>
    <div class="container">
    <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Message</th>
                <th>Status</th>
                <th>Delete</th>
                <th>Read</th>

            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>
                    <a href="mailto:{{$contact->email}}" target="_blank">
                        {{$contact->email}}
                    </a>
                </td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->status}}</td>
                <td><a href="/contact/delete/{{$contact->id}}" class="btn btn-danger">DELETE</a></td>
                <td>
                    @if ($contact->status == 'pending')
                        <a href="/contact/update-status/{{$contact->id}}" class="btn btn-success">READ</a>
                    @endif
                </td>

            </tr>
            @endforeach
        </table>
    </div>
    </div>   
</div>

@endsection
