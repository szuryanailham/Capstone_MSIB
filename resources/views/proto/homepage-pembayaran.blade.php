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

        .img-jdwl {
            height: 400px;
            width: 90%;
        }

        .img-dctr {
            height: 255px;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-blue sticky-top z-index-1">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link active text-light fw-semibold aria-current=" page"
                        href="landing-page-user.html">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="./regist-user.html">Pendaftaran Pasien</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="#">Dokter</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="#">Berita</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="#">Kontak Kami</a>
                </li>
            </ul>
        </div>
        <div class="me-5">
            <a href="/user/login-user.html"><button type="button" class="btn btn-primary  px-4 py-1">
                    Login
                </button></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section -->
    <section class="hero-section">
        <div class="conatiner">
            <a href="/user/regist-user.html"><img class="img-custom object-fit-cover " src="/asset/SubHead.png"
                    alt=""></a>
            <div class="text-center">
                <img src="/asset/Group 219.png" class="rounded mt-5 img-jdwl" alt="img">
            </div>
            <div class="container text-center mt-5 mb-5">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="/asset/female doctor and male doctor standing together.png" alt="img">
                                <a href="#" class="btn btn-primary mt-2" style="width: 100%;">Reservasi</a>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam,
                                    veritatis! Ex dignissimos magni nihil eveniet quasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="/asset/female doctor and male doctor standing together.png" alt="img">
                                <a href="#" class="btn btn-primary mt-2" style="width: 100%;">Riwayat</a>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam,
                                    veritatis! Ex dignissimos magni nihil eveniet quasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="/asset/female doctor and male doctor standing together.png" " alt=" img">
                                <a href="#" class="btn btn-primary mt-2" style="width: 100%;">Apotik</a>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam,
                                    veritatis! Ex dignissimos magni nihil eveniet quasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5 rounded">
            <div class="col-md-5 p-4 rounded mb-5" style="background-color: #F0DCDC;">
                <div class="text-center mb-3">
                    <h4>Jadwal Reservasi Anda</h4>
                </div>
                <div class="container">
                    <div class="d-flex gap-2">
                        <div>
                            <img class="object-fit-cover img-dctr rounded" src="/asset/Rectangle 21.png" alt="">
                        </div>
                        <div class="flex-fill">
                            <div class="card p-2" style="background-color: #D9D9D9;">
                                <div class="fw-semibold">
                                    <h6>Nama :</h6>
                                    <h6>Alamat :</h6>
                                    <h6>No. HP :</h6>
                                    <h6>Riwayat:</h6>
                                    <h6>Klinik:</h6>
                                    <h6>Tanggal:</h6>
                                </div>
                                <div class="card text-center pt-2 bg-blue text-light rounded">
                                    <p><span class="fw-semibold">Nama Dokter</span> <br> spesialis kulit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <p class="fw-bold">Terimakasih Telah Melakukan Pendaftran Reservasi
                        Di Website RS. Link </p>
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
    <!-- footer -->
    <!-- cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>