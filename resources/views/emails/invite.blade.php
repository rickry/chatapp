@extends('emails.layout')

@section('content')
    <div class="title">
        Contact via de website
    </div>
    <div class="inhoud">
        <h1>Message</h1>
        <p><a href="{{env('APP_URL') . "/" . $token}}">Rond hier uw registratie af</a></p>
        <small>{{$name}}</small>
    </div>
    <div class="footer">
        © 2020 ChatApp | Alle rechten voorbehouden.
    </div>
@endsection
