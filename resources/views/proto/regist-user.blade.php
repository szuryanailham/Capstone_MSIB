<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reservasi Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top z-index-1" style="background-color: #212e77;">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link active text-light fw-semibold" href="/homepage/homepage.html">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold " href="regist-user.html">Pendaftaran Pasien</a>
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
        <div class="btn me-5">
            <a href="login-user.html"></a> <button type="button" class="btn btn-primary px-4">
                Login
            </button>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- form section -->
    <div class="mt-5 text-center">
        <h1>Selamat Datang</h1>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border p-4 rounded mb-5">
            <form method="POST" class="form">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        placeholder="masukan username anda">
                    <div id="emailHelp" class="form-text text-danger">username harus diisi</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        placeholder="masukan username anda">
                    <div id="emailHelp" class="form-text text-danger">Nama Lengkap harus diisi</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">No.Handphone</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="masukan no.hp anda">
                    <div id="emailHelp" class="form-text text-danger">No Handphone harus diisi</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="masukan email anda">
                    <div id="emailHelp" class="form-text text-danger">Email harus diisi</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="masukan password anda">
                    <div id="passworhelp" class="form-text text-danger">Password harus diisi</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="masukan username anda">
                    <div id="passworhelp" class="form-text text-danger">Password harus diisi</div>
                </div>
                <button type="button" class="btn btn-primary w-100">Daftar</button>
                <div id="passworhelp" class="form-text fw-semibold ">Sudah punya akun? <a href="/user/login-user.html"
                        class="text-primary">Silahkan Masuk</a></div>
            </form>
        </div>
        <!-- form section end -->


        <!-- footer -->
        <footer class="footer p-5" style="background-color: #212e77;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-light">
                        <h4>Reservasi Rumah Sakit</h4>
                    </div>
                    <div class="col-md-3 text-light">
                        <h5>Tentang Kami</h5>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate cum molestiae aliquam
                            illo provident
                            id.
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
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
</body>

</html>