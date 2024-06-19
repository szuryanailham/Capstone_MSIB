@extends('layouts.app')

@section('title', 'Blog Details')

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
        <a href="/user/regist-user.html"><img class="img-custom object-fit-cover " src="/asset/SubHead.png"
                alt="img"></a>
        <div class="container mt-5 mb-5" style="width: 50%;">
            <div class="img">
                @if($blog->cover)
                <img src="{{ $blog->cover ? Storage::url($blog->cover) : asset('default-cover.jpg') }}" class="card-img-top" alt="{{ $blog->judul }}">
                @else
                <img src="/asset/Rectangle 13 (3).png" class="card-img-top" alt="Default Image" />
                @endif
                <div class="card-body">
                    <h1>{{ $blog->judul }}</h1>
                    <h5 class="card-title">Doctor: {{ $blog->dokter ? $blog->dokter->nama_doktor : 'N/A' }}</h5>
                    <h5 class="card-title">Category: {{ $blog->category ? $blog->category->name : 'N/A' }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Slug: {{ $blog->slug }}</h6>
                    <p class="card-text mt-3">{{ $blog->body }}</p>
                    <p class="card-text"><small class="text-muted">Release Date: {{ $blog->release_date }}</small></p>
                    <p class="card-text">Excerpt: {{ $blog->kutipan }}</p>
                    <div class="text-center mb-5 mt-4">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value=""
                            aria-label="..." checked />
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2" value=""
                            aria-label="..." />
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2" value=""
                            aria-label="..." />
                    </div>
                    <div class="text-center">
                        <a href="{{ route('blogs.index') }}"><button type="button" class="btn btn-danger rounded-pill"
                                style="width: 50%;">Kembali</button></a>
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
@endsection
