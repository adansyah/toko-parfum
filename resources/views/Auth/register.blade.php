@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Register</h2>
                @if ($success = Session::get('success'))
                    <div class="alert alert-success">
                        <ul class="mb-0">
                            <li>{{ $success }}</li>
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('register.form') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" name="name" class="form-control" required
                            value="{{ old('name') }}">
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" name="email" class="form-control" required
                            value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="{{ route('login') }}" class="btn btn-link">Already have an account?</a>
                </form>
            </div>
        </div>
    </div>
@endsection
