@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="hero">
    <div class="bg-image" style="background-image: url('/asset/Group\ 94\ \(1\).png'); height: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="margin-top: 150px;">
                    <h1>Kesembuhan Anda,Kebahagiaan Kami</h1>
                    <p>
                        jogja health care berkomitmen untuk memberikan pelayanan terbaik
                        kepada semua orang. Semua tenaga medis kami sudah terlatih dan
                        siap untuk memberikan pelayanan maksimal
                    </p>
                    <button class="btn btn-primary">Daftarkan Pasien</button>
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- hero section end -->

<!-- footer -->
<footer class="footer p-5" style="background-color: #212e77">
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
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


@endsection
