@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        @if($success)
                            Thanks for signing up, {{$user->name}}!
                        @else
                            Email has already been verified
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
