@extends('layouts.app')

@section('title', 'Profile Dokter')

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
        <a href="/user/regist-user.html"><img class="img-custom object-fit-cover " src="/asset/SubHead.png" alt=""></a>
        <div class="container mt-5 mb-5">
            <div class="d-flex flex-row justify-content-center">
                <div class="card">
                    <img src="{{ $dokter->image_url ?? '/asset/Rectangle 20.png' }}" alt="img">
                </div>
                <div class="card ms-3 px-3 py-3 text-center" style="background-color: #D9D9D9; width: 30%;">
                    <br><br><br>
                    <h5>{{ $dokter->nama_doktor }}</h5>
                    <p>{{ $dokter->specialist->specialist_name ?? 'No Specialist' }}</p>
                    <h6>Jadwal Praktik</h6>
                    <p class="lh-base">
                        @foreach($dokter->jadwals as $jadwal)
                            {{ $jadwal->hari }} : {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}<br>
                        @endforeach
                    </p>
                    <br>
                    <a href="{{ route('dokter.index') }}"><button type="button" class="btn btn-danger w-100">Kembali</button></a>
                </div>
            </div>
        </div>
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
    <!-- footer end -->
    <!-- cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection
