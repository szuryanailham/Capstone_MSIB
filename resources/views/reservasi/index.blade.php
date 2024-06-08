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

        .bg-pink {
            background-color: #F0DCDC;
        }

        .clr-input {
            background-color: #C8B6B6;
        }
    </style>
</head>
<body>
    
    <section>
        <div class="container">
            <a href="/user/regist-user.html"><img class="img-custom" src="/asset/SubHead.png" alt=""></a>
        </div>

        <div class="row justify-content-center mt-5 rounded">
            <div class="col-md-4 border p-4 rounded mb-5 bg-pink">
                <div class="text-center mb-5">
                    <h4>Pendaftaran Pasien Reservasi</h4>
                </div>

                <form method="POST" class="form" action="{{ route('reservasi.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Pasien</label>
                        <input type="text" class="form-control clr-input" id="namapasien"
                            placeholder="Masukkan nama pasien">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jenis Kelamin</label>
                        <br>
                        <input class="clr-input" type="radio" name="gender" value="L"> L
                        <input class="clr-input" type="radio" name="gender" value="P"> P
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat Lengkap</label>
                        <input type="textarea" class="form-control clr-input" id="alamat" placeholder="Masukkan alamat anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">No. HP</label>
                        <input type="text" class="form-control clr-input" id="no_hp" placeholder="Masukkan nomor HP">
                    </div>

                    <div class="form-group">
                        <label for="specialist_id">Specialist:</label>
                        <select class="form-control" id="specialist_id" name="specialist_id">
                            <option value="">Pilih Specialist</option>
                            @foreach($specialists as $specialist)
                            <option value="{{ $specialist->id }}">{{ $specialist->specialist_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_doctor">Doctor:</label>
                        <select class="form-control" id="id_doctor" name="id_doctor">
                            <option value="">Pilih Dokter</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Periksa</label>
                        <input type="date" class="form-control clr-input" id="tanggal_periksa"
                            placeholder="Masukkan tanggal periksa">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Keluhan </label>
                        <input type="text" class="form-control clr-input" id="poliklinik"
                            placeholder="Masukkan keluhan anda">
                    </div>

                    <div class="form-text text-danger fw-semibold mb-2">*) Wajib diisi</div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger py-1 ">Kembali</button>
                        <button type="submit" class="btn btn-primary py-1 ">Selanjutnya</button>
                    </div>
                </form>
            </div>
            <!-- form section end -->
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#specialist_id').change(function () {
                var specialistId = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/get-doctors-by-specialist",
                    data: { specialist_id: specialistId },
                    success: function (response) {
                        $('#id_doctor').empty();
                        $.each(response, function (key, value) {
                            $('#id_doctor').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            });
        });
    </script>

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

@endsection