@extends('website.master')

@section('title', 'Register Page')

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Registration Form</div>
                    <h4 class="text-center text-success">{{session('message') }}</h4>
                    <div class="card-body">
                        <form action="{{route('user-register')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Register"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
