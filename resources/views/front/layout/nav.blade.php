<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{ route('home') }}">VCare</a>
        </div>
        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                @auth
                    @if(auth()->user()->role=='admin')
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('dashboard') }}">Dashboard</a>
                @endif
                @endauth

                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('home') }}">Home</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{ route('majors') }}">majors</a>
                <a type="button" class="btn btn-outline-light navigation--button"
                    href="{{ route('doctors') }}">Doctors</a>

                    @if (Auth::check())
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-outline-light navigation--button" >Logout</button>
                    </form>
                    @else
                    <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('login') }}">login</a>
                    @endif

            </div>
        </div>
    </div>
</nav>
