@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

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

        .bg-pink {
            background-color: #F0DCDC;
        }

        .clr-input {
            background-color: #C8B6B6;
        }

        .img-dctr {
            height: 172px;
            width: 120px;
        }
    </style>
</head>

<body>
    <!-- section -->
    <section>
        <div class="container">
            <a href="/user/regist-user.html"><img class="img-custom" src="/asset/SubHead.png" alt=""></a>
        </div>

        <div class="row justify-content-center mt-5 rounded">
            <div class="col-md-5 p-4 rounded mb-5 bg-pink">
                <div class="text-center mb-5">
                    <h4>Hasil Reservasi Pasien</h4>
                </div>
                <div class="container">
                    <div class="d-flex gap-2">
                        <div>
                            <img class="object-fit-cover img-dctr rounded" src="/asset/Rectangle 21.png" alt="">
                        </div>
                        <div class="flex-fill">
                            <div class="card p-1 w-auto">
                                <div class="fw-semibold">
                                    <h6>Nama: {{ $reservasi->nama_pasien }}</h6>
                                    <h6>Alamat: {{ $reservasi->alamat }}</h6>
                                    <h6>No. HP: {{ $reservasi->no_hp }}</h6>
                                    <h6>Keluhan: {{ $reservasi->keluhan }}</h6>
                                    <h6>Spesialis: {{ $reservasi->specialist->specialist_name }}</h6>
                                    <h6>Jadwal: {{ $reservasi->jadwal->hari }}, {{ \Carbon\Carbon::parse($reservasi->jadwal->jam_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($reservasi->jadwal->jam_selesai)->format('H:i') }} WIB</h6>


                                </div>
                                <div class="card text-center pt-2 bg-blue text-light rounded-pill">
                                    <p><span class="fw-semibold">{{ $reservasi->dokter->nama_doktor }}</span><br>{{ $reservasi->specialist->specialist_name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('reservasi.create') }}"> <button type="button"
                            class="btn btn-danger py-1 ">Kembali</button></a>
                    <a href="{{ route('reservasi.create') }}"><button type="button" class="btn btn-primary py-1 ">Selesai</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- footer -->
    <footer class="footer pt-3 bg-blue ">
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
