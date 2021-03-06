@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="card grey lighten-3 chat-room">
                            <div class="card-body">

                                <!-- Grid row -->
                                <div class="row px-lg-2 px-2">

                                    <!-- Grid column -->
                                    <div class="col-md-6 col-xl-4 px-0">

                                        <h6 class="font-weight-bold mb-3 text-center text-lg-left">Member</h6>
                                        <div class="white z-depth-1 px-3 pt-3 pb-0">
                                            <ul class="list-unstyled friend-list">

                                                @foreach($users as $user)
                                                <li class="active grey lighten-3 p-2">
                                                    <a href="#" class="d-flex justify-content-between">
                                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                                        <div class="text-small">
                                                            <strong>{{$user->name}}</strong>
                                                            <p class="last-message text-muted">Lorem</p>
                                                        </div>
                                                        <div class="chat-footer">
                                                            <p class="text-smaller text-muted mb-0">Just now</p>
                                                            <span class="badge badge-danger float-right">{{rand(0,4)}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">

                                        <div class="chat-message">

                                            <ul class="list-unstyled chat">
                                                <li class="d-flex justify-content-between mb-4">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                                        <div class="header">
                                                            <strong class="primary-font">Brad Pitt</strong>
                                                            <small class="pull-right text-muted"><i class="far fa-clock"></i> 12 mins ago</small>
                                                        </div>
                                                        <hr class="w-100">
                                                        <p class="mb-0">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                            labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between mb-4">
                                                    <div class="chat-body white p-3 z-depth-1">
                                                        <div class="header">
                                                            <strong class="primary-font">Lara Croft</strong>
                                                            <small class="pull-right text-muted"><i class="far fa-clock"></i> 13 mins ago</small>
                                                        </div>
                                                        <hr class="w-100">
                                                        <p class="mb-0">
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                            laudantium.
                                                        </p>
                                                    </div>
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="avatar" class="avatar rounded-circle mr-0 ml-3 z-depth-1">
                                                </li>
                                                <li class="d-flex justify-content-between mb-4 pb-3">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6.jpg" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                                        <div class="header">
                                                            <strong class="primary-font">Brad Pitt</strong>
                                                            <small class="pull-right text-muted"><i class="far fa-clock"></i> 12 mins ago</small>
                                                        </div>
                                                        <hr class="w-100">
                                                        <p class="mb-0">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                            labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="white">
                                                    <div class="form-group basic-textarea">
                                                        <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..."></textarea>
                                                    </div>
                                                </li>
                                                <button type="button" class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right">Send</button>
                                            </ul>

                                        </div>

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
