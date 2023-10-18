@extends('front.layout.app')
@section('title','Doctors')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="../index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">doctors</li>
        </ol>
    </nav>
    <div class="doctors-grid">
        @forelse ($doctors as $doctor )


        <div class="card p-2" style="width: 18rem;">
            <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                <h6 class="card-title fw-bold text-center">{{ $doctor->major_title }}</h6>
                <form action="{{ route('doctor',$doctor->id) }}" method="get">
                    <button  class="btn btn-outline-primary card-button">Book an appointment </button>
                </form>
            </div>
        </div>
        @empty
            <h1>No Doctors Found</h1>
        @endforelse
    </div>


    </div>
   {{ $doctors->links() }}
</div>

@endsection
