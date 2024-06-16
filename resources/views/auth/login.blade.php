<!-- resources/views/auth/login.blade.php -->
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
    <nav class="navbar navbar-expand-lg sticky-top z-index-1" style="background-color: #212e77">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link active text-light fw-semibold" aria-current="page"
                        href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="{{ route('reservasi.create') }}">Pendaftaran
                        Pasien</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="#">Dokter</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="#">Berita</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="#">Kontak Kami</a>
                </li>
            </ul>
        </div>
        <div class="btn me-5">
            <a href="./login-user.html"><button type="button" class="btn btn-primary px-4">
                    Login
                </button></a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- form section -->
    <div class="mt-5 text-center">
        <h1>Selamat Datang Kembali</h1>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border p-4 rounded mb-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    @error('email')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @error('password')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <div class="form-text fw-semibold mt-2">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar Disini</a>
                </div>
            </form>
        </div>
    </div>
    <!-- form section end -->

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
        </div>
    </footer>
    <!-- footer end -->
    <!-- cdn js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
