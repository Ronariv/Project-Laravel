@extends('template.template')
@section('content')
<div class="p-5">
    <h2 class="mt-4 text-center">Register</h2>

    <form action="{{route('register')}}" method="post" class="w-25 m-auto">
        @csrf
        <div class="form-group">
            <p>Name</p>
            <input value = "{{old('name')}}" type="name" name="name" class="form-control"
                placeholder="">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <p>Email</p>
            <input value = "{{old('email')}}" type="email" name="email" class="form-control"
                placeholder="">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <p>Password</p>
            <input value = "{{old('password')}}" type="password" name="password" class="form-control" placeholder="">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <p>Confirm Password</p>
            <input value = "{{old('password_confirmation')}}" type="password_confirmation" name="password_confirmation" class="form-control" placeholder="">
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        <div class="d-flex flex-column justify-content-center mt-3">
            <button type="submit" class="btn btn-outline-warning">Register</button>
        </div>
    </form>
    <p class="text-center mt-2">Already had an account?<a href="{{ route('gotoLogin') }}">Login</a></p>


</div>
@endsection
