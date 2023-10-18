@extends('front.layout.app')
@section(
    'title','content'
)
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        @if(session('suc'))
        <div class="alert alert-success">
            {{ session('suc') }}
        </div>
    @endif
        <form class="form" action="{{ route('new_contact') }}" method="post">
            @csrf
            <div class="form-items">
                <div class="mb-3">

                    <label class="form-label required-label" for="name">Name</label>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <input type="text" class="form-control" name="name" id="name" @auth value="{{ auth()->user()->name }}" @endauth required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <input type="tel" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="subject">subject</label>
                    @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <textarea class="form-control" name="message" id="message" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

</div>
@endsection
