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
    </style>
</head>

<body>
    <!-- section -->
    <section>
        <div class="container">
            <a href="/user/regist-user.html"><img class="img-custom" src="/asset/SubHead.png" alt=""></a>
        </div>
        <div class="row justify-content-center mt-5 rounded">
            <div class="col-md-4 border p-4 rounded mb-5 bg-pink">
                <div class="text-center mb-5">
                    <h4>Pendaftaran Pasien Reservasi</h4>
                </div>
                <form action="{{ route('payments.store') }}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    <input type="hidden" name="reservasi_id" value="{{ $reservasis->id }}">
                    <div class="mb-2">
                        <label class="form-label fw-semibold">Metode Pembayaran</label>
                        <input type="text" name="metode_pembayaran" class="form-control clr-input" placeholder="pilih metode pembayaran" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label fw-semibold">No. Rekening Tujuan</label>
                        <input type="text" name="no_rekening_tujuan" class="form-control clr-input" placeholder="No Rekening harus diisi" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label fw-semibold">No. Rekening Anda</label>
                        <input type="text" name="no_rekening_anda" class="form-control clr-input" placeholder="No Rekening harus diisi" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label fw-semibold">Masukan Bukti Pembayaran</label>
                        <input type="file" name="bukti_pembayaran" class="form-control clr-input" placeholder="Upload bukti pembayaran" required>
                    </div>
                    <div class="form-text text-danger fw-semibold mb-2">*) Wajib diisi</div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary py-1">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- footer -->
    <footer class="footer pt-3 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-light">
                    <h4>Reservasi Rumah Sakit</h4>
                </div>
                <div class="col-md-3 text-light">
                    <h5>Tentang Kami</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate cum molestiae aliquam illo
                        provident id.</p>
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
