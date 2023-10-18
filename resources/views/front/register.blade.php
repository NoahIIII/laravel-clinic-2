@extends('front.layout.app')
@section('title','Register')
@section('content')
<div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
    <form class="form" method="POST" action="{{ route('register.create') }}" enctype="multipart/form-data">
        @csrf

        {{-- displaying the errors to every input --}}


        <div class="form-items">
            <div class="mb-3">
                <label class="form-label required-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone" required>
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
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
            <div class="mb-3">
                <label class="form-label required-label" for="image">Profile Image</label>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <input type="file" class="form-control" name="image" id="image" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
    <div class="d-flex justify-content-center gap-2">
        <span>already have an account?</span><a class="link" href="{{ route('login') }}"> login</a>
    </div>
</div>


</div>
</div>
@endsection
