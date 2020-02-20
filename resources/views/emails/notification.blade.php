@extends('emails.layout')

@section('content')
    <div class="title">
        Contact via de website
    </div>
    <div class="inhoud">
        <h1>Message</h1>
        <p>{{$mailMessage}}</p>
        <table>
            <tr>
                <th>Name</th>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$email}}</td>
            </tr>
        </table>
    </div>
    <div class="footer">
        © 2020 ChatApp | Alle rechten voorbehouden.
    </div>

@endsection
