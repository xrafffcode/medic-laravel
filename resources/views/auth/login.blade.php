@extends('layouts.auth')

@section('content')
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                    Login Medic
                </h1>
            </div>
            <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Password" name="password" required autocomplete="current-password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                            Me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection
