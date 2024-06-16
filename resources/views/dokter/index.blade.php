@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reservasi Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        .bg-blue {
            background-color: #212e77;
        }

        .img-custom {
            margin-top: 0px;
            height: 170px;
            width: 100%;
        }

        .img-jdwl {
            height: 400px;
            width: 90%;
        }

        .card-img {
            height: 300px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- hero section -->
    
    <section>
        <div class="conatiner">
            <a href="/user/regist-user.html"><img class="img-custom object-fit-cover" src="/asset/SubHead.png"
                    alt=""></a>
                   
            <div class="container mt-5 mb-5">
                @can('admin')
                <a href="{{ route('dokter.admin') }}" class="btn btn-primary mb-3">Manage admin</a>    
                @endcan
                @if($dokters->isEmpty())
                    <p>No doctors available.</p>
                @else
                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        @foreach($dokters as $dokter)
                            <div class="card m-2" style="width: 18rem;">
                                <img src="{{ $dokter->image_url ?? '/asset/Rectangle 20.png' }}" class="card-img-top card-img" alt="card">
                                <div class="card-body" style="background-color: #BFD2F8;">
                                    <h5 class="card-title">{{ $dokter->nama_doktor }}</h5>
                                    <p class="card-text">{{ $dokter->specialist->specialist_name ?? 'No Specialist' }}</p>
                                    <a href="{{ route('dokter.profile', ['id' => $dokter->id]) }}" class="btn btn-primary w-100 bg-blue">View Profile</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        {{-- <div>
            <img src="/asset/Group 220.png" class="" alt="">
        </div> --}}
    </section>
    <!-- hero section end -->

    <!-- footer -->
    <footer class="footer p-5 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-light">
                    <h4>Reservasi Rumah Sakit</h4>
                </div>
                <div class="col-md-3 text-light">
                    <h5>Tentang Kami</h5>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate cum molestiae aliquam illo
                        provident id.
                    </p>
                </div>
                <div class="col-md-3 text-light">
                    <h5>Kontak </h5>
                    <ul class="list-unstyled">
                        <li>Email: info@example.com</li>
                        <li>Phone: +1233567890</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center text-light">
                    <p>&copy; 2024 Reservasi Rumah Sakit.</p>
                </div>
            </div>
    </footer>
    <!-- footer -->
    <!-- cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection