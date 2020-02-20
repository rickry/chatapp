@extends('emails.layout')

@section('content')
    <div class="title">
        Nieuwe updates
    </div>
    <div class="inhoud">
        <h1>Message</h1>
        <p>{{$mailMessage}}</p>
        <small>{{$title}}</small>
    </div>
    <div class="footer">
        © 2020 ChatApp | Alle rechten voorbehouden.
    </div>
@endsection
