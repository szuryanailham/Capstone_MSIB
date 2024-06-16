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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #212e77;">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item me-2">
                    <a class="nav-link active text-light fw-semibold" href="/homepage/homepage.html">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-light fw-semibold" href="regist-user.html">Pendaftaran Pasien</a>
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
            <div class="btn me-5">
                <a href="login-user.html"></a>
                <button type="button" class="btn btn-primary px-4">Login</button>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Registration Form Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Selamat Datang</h1>
                <div class="card p-4 border rounded mb-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" class="form-control" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name">
                            <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email"
                                :value="old('email')" required autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" class="form-control" type="password" name="password" required
                                autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a class="text-decoration-underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit" class="btn btn-primary ms-4">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Form Section end -->

    <!-- Footer -->
    <footer class="footer p-5" style="background-color: #212e77;">
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
                    <h5>Kontak</h5>
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
    <!-- Footer end -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
