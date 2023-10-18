@extends('front.layout.app')
@section('title', 'Book')
@section('content')
    <?php use App\Models\Major; ?>
    <div class="d-flex flex-column gap-3 details-card doctor-details">
        <div class="details d-flex gap-2 align-items-center">
            <img src="{{ asset('front') }}/assets/images/major.jpg" alt="doctor" class="img-fluid rounded-circle"
                height="150" width="150" />
            <div class="details-info d-flex flex-column gap-3">
                <?php $major = Major::find($doctor['major_id']); ?>
                <h4 class="card-title fw-bold">{{ $doctor['name'] }}</h4>
                <h6 class="card-title fw-bold">{{ $major->title }}</h6>
                <h5 class="card-title fw-bold"> {{ $doctor['bio'] }}</h5>
            </div>
        </div>
        <hr />
        <form class="form" method="POST" action="{{ route('confirmbooking') }}">
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="name" id="name" @auth value="{{ auth()->user()->name }}" @endauth required />
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="tel" class="form-control" name="phone" id="phone" @auth value="{{ auth()->user()->phone }}" @endauth required />
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" class="form-control" name="email" id="email" @auth value="{{ auth()->user()->email }}" @endauth required />
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="date">Date</label>
                    @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <input type="date" class="form-control" name="date"id="date" required />
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <input type="hidden" name="status" value="pending">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
    </div>
@endsection
