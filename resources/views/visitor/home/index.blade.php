@extends('website.master')
@section('title','My Dashboard')
@section('body')
<section class="py-5 ">
    <div class="contaier">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                <li><a href="{{route('my-dashboard')}}" class="list-group-item">My Dashboard</a></li>
                <li><a href="{{route('my-profile')}}" class="list-group-item">My Profile</a></li>
                <li><a href="{{route('my-comment')}}" class="list-group-item">My Comment</a></li>
                <li><a href="{{route('change-password')}}" class="list-group-item">Change Password</a></li>
                <li><a href="" class="list-group-item">Log out</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <h1>My Dashboard</h1>
            </div>
        </div>
    </div>
</section>

@endsection
