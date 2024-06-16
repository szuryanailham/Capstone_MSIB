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

        .card-img {
            height: 300px;
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
                    <a class="nav-link active text-light fw-semibold" href="landing-page-user.html">Beranda</a>
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
    <section>
        <a href="/user/regist-user.html"><img class="img-custom object-fit-cover " src="/asset/SubHead.png"
                alt="img"></a>
        <div class="container mt-5 mb-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="/asset/Rectangle 13 (3).png" class="card-img-top" alt="card example" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <a href=""><button type="button" class="btn btn-dark rounded-pill">Read More -></button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/asset/Rectangle 13 (1).png" class="card-img-top" alt="card example" />
                        <div class="card-body">
                            <h5 class="card-title ">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <a href=""><button type="button" class="btn btn-dark rounded-pill">Read More -></button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/asset/Rectangle 13.png" class="card-img-top" alt="card example" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content.</p>
                            <a href=""><button type="button" class="btn btn-dark rounded-pill">Read More -></button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/asset/Rectangle 13 (2).png" class="card-img-top" alt="card example" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <a href=""><button type="button" class="btn btn-dark rounded-pill">Read More -></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <h1 class="text-center mb-4">Contact</h1>
            <div class="row row-cols-1 row-cols-md-4 g-1">
                <div class="col">
                    <div class="card p-3" style="width: 15rem; height: 236px;">
                        <div class="card-body">
                            <img src="/asset/ambulance.png" alt="img" style="width: 50px;" class="mb-3">
                            <p class="fw-semibold">Emergency</p>
                            <p class="lh-base">+628123456789 <br>+628123456789</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3" style="width: 15rem; height: 236px;">
                        <div class="card-body">
                            <img src="/asset/location.png" alt="img" style="width: 50px;" class="mb-3">
                            <p class="fw-semibold">Location</p>
                            <p class="lh-base">Jakarta,selatan</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3" style="width: 15rem; height: 236px;">
                        <div class="card-body">
                            <img src="/asset/email.png" alt="img" style="width: 50px;" class="mb-3">
                            <p class="fw-semibold">Email</p>
                            <p class="lh-base">example@gmail.com <br> example1@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3" style="width: 15rem; height: 236px;">
                        <div class="card-body">
                            <img src="/asset/clock.png" alt="img" style="width: 50px;" class="mb-3">
                            <p class="fw-semibold">Working Hours</p>
                            <p class="lh-base">Mon - Sat <br> 9.20 - 17.00</p>
                        </div>
                    </div>
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