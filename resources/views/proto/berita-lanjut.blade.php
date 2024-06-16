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
        <div class="container mt-5 mb-5" style="width: 50%;">
            <div class="img">
                <img src="/asset/Rectangle 13 (3).png" class="card-img-top"" alt=" card example" />
                <div class="card-body">
                    <p class="card-text mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum placeat rem
                        quaerat aliquid? Ullam eveniet totam nostrum temporibus tempore in, nisi voluptatum obcaecati
                        qui id voluptate perferendis, dolores ad. Minus eveniet labore soluta, inventore excepturi
                        dolor. Est ipsa saepe ab voluptatem, architecto illo beatae corrupti fuga porro esse similique
                        neque sunt quo minus aliquid commodi reprehenderit hic perferendis quas quam enim consequuntur
                        iusto quos! Id asperiores vero dolore sit accusamus, vel consectetur rerum molestias
                        praesentium, eveniet quas necessitatibus, autem ipsa facilis tenetur illum corporis animi.
                        Possimus quidem laudantium neque id nisi eaque eveniet repellat, unde reprehenderit! Quos quidem
                        ea incidunt, error sunt ab molestiae hic modi accusantium veritatis. Pariatur dolor, voluptates
                        veniam enim praesentium ex. Fugit vitae repudiandae nam eius vero sequi veritatis, voluptatum
                        minima incidunt non quis. Expedita itaque quae perspiciatis reiciendis nesciunt repellat velit
                        vero possimus quo porro laudantium aut ipsa sint quaerat asperiores similique, quibusdam vitae
                        blanditiis. Veritatis rem quos odit eos, molestias eius ab saepe odio accusamus nam explicabo
                        atque labore. Beatae, sequi quidem dolore perferendis delectus dolorem ratione tenetur, quas
                        praesentium atque odit. A eaque sequi repellat, cupiditate rem cumque ullam porro beatae
                        corporis quibusdam quos, magnam velit voluptatum doloremque nihil provident incidunt consequatur
                        aspernatur. Itaque nisi, nostrum mollitia tempora laborum vero ipsa sint, voluptatem fugiat
                        atque at? Aliquam magnam quidem modi aspernatur quaerat. Explicabo, iste! Asperiores vitae alias
                        facere deserunt quidem mollitia suscipit nobis facilis accusantium ipsa necessitatibus, tenetur,
                        consectetur quod? Officia sint sapiente magnam temporibus itaque atque minus distinctio natus
                        quasi, adipisci ad.</p>
                    <div class="text-center mb-5 mt-4">
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value=""
                            aria-label="..." checked />
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2" value=""
                            aria-label="..." />
                        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2" value=""
                            aria-label="..." />
                    </div>
                    <div class="text-center">
                        <a href=""><button type="button" class="btn btn-danger rounded-pill"
                                style="width: 50%;">kembali</button></a>
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