@extends('template.template')
@section('content')
<div class="p-5">
    <h2 class="mt-4 text-center">Login</h2>

    <form action="" method="post" class="w-25 m-auto">
        @csrf
        <div class="form-group">
            <p>Email</p>
            <input value = "{{Cookie::get('email')}}" type="email" name="email" class="form-control"
                placeholder="">
        </div>
        <div class="form-group">
            <p>Password</p>
            <input value = "{{Cookie::get('password')}}" type="password" name="password" class="form-control" placeholder="">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="remember_me" class="form-check-input">
            <p>Remember me</p>
        </div>
        @if ($errors->any())
        <div class="text-center bg-danger">
            <p class="text-white text-center">{{$errors->first()}}</p>
        </div>
        @endif
        <div class="d-flex flex-column justify-content-center">
            <button type="submit" class="btn btn-outline-warning">Login</button>
        </div>
    </form>
    <p class="text-center mt-2">No Account?<a href="{{ route('gotoRegister') }}">Register</a></p>


</div>
@endsection
