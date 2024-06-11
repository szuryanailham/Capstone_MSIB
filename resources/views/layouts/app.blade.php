<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Reservasi Rumah Sakit')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top z-index-1" style="background-color:#212e77;">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link active text-light fw-semibold" href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="{{ route('specialist.index') }}">Specialist</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="{{ route('dokter.index') }}">Dokter</a>
                </li>   
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="{{ route('blogs.index') }}">Kelola Blog</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="{{route('jadwal.index')}}">Jadwal</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="{{route('reservasi.create')}}">Pendaftaran Pasien</a>
                </li>
            </ul>
        </div>
        <div class="btn me-5">
            @if (Auth::check())
                <div class="d-flex align-items-center">
                    <span class="text-light fw-semibold me-3">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary px-4">Logout</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-primary px-4">Login</button>
                </a>
            @endif
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Content -->
    <main>
        @yield('content')
    </main>
    <!-- Content end -->
    <!-- cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
