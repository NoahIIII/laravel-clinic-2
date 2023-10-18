@extends('front.layout.app')
@section('title','Majors')
           @section('content')


           <div class="majors-grid">
            @forelse ( $majors as $major )

            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('front') }}/assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $major->title }}</h4>
                    <form action="{{ route('major',$major->id) }}" method="get">
                        <button class="btn btn-outline-primary card-button"> Browse Doctors </button>
                    </form>
                </div>
            </div>
            @empty
            <h1>No Majors Found</h1>
            @endforelse
        </div>

            {{ $majors->links() }}
    </div>
</div>

@endsection

</html>
