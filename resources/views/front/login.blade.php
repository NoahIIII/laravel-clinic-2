@extends('front.layout.app')
@section('title','login')
@section('content')
<div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
    <form class="form" action="{{ route('verifylogin') }}">
@csrf
        <div class="mb-3">
            <label class="form-label required-label" for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label required-label" for="password">password</label>
            <input type="password" class="form-control" name="password" id="password" required>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
        <span>don't have an account?</span><a class="link" href="{{ route('register') }}">create account</a>
    </div>
</div>

</div>
</div>
@endsection
