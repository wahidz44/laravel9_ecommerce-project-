@extends('master')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Register Form</div>
                        <div class="card-body">
                            <form action="{{ route('register') }}"method="post">
                                @csrf
                                <div class="row">
                                    <label for="name" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" placeholder="Type Your Name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="email" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" placeholder="Type Your Email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="password" class="col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" placeholder="Type Your Password" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="password" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Register"  class="btn btn-success">
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
