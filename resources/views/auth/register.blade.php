@extends('auth.layout')
@section('title', 'Register - MPMK')
@section('style')
<style>
    .bg-register-image {
        background: url("{{ asset('img/sapi.jpg') }}");
        background-position: center;
        background-size: cover;
    }
</style>
@endsection
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>

                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif

                        @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                            @php
                            Session::forget('error');
                            @endphp
                        </div>
                        @endif

                        <!-- Way 1: Display All Error Messages -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <form method="post" action="{{ route('auth.register.perform') }}" class="user">

                        @csrf()
                        <div class="form-group">
                            <input name="name" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button class="btn btn-success btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{ route('auth.login.show') }}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection