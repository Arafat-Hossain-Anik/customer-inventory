@extends('Layouts.app')
@push('title')
    <title>Register</title>
@endpush
@section('content')
<div class="container my-5" style="height: 60vh">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    <h2>Give Your Credentials</h2>
                    @if (Session::has('error'))
                        <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif
                    @if (Session::has('success'))
                        <p class="text-success">{{ Session::get('success') }}</p>
                    @endif

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" />
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="row my-3">
                            <div class="col-8 text-left">
                                <a href="/register" class="btn btn-link">New User</a>
                            </div>
                            <div class="col-4 text-right">
                                <input type="submit" class="btn btn-primary" value=" Login " />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection