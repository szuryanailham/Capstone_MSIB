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
        <div class="conatiner">
            <a href="/user/regist-user.html"><img class="img-custom" src="/asset/SubHead.png" alt=""></a>
        </div>

        <div class="row justify-content-center mt-5 rounded">
            <div class="col-md-4 border p-4 rounded mb-5 bg-pink">
                <div class="text-center">
                    <h4>Pendaftaran Pasien Reservasi</h4>
                </div>
                <p class="fw-semibold">*Isikan data pasien sesuai dengan kebutuhan yang sudah ada agar tidak terjadi kesalahan saat dilakukan proses oleh data.</p>
                <form action="{{ route('reservasi.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control clr-input" id="namapasien" placeholder="masukan nama pasien" value="{{ old('nama_pasien') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jenis Kelamin</label>
                        <br>
                        <input class="clr-input" type="radio" name="jenis_kelamin" value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}> L
                        <input class="clr-input" type="radio" name="jenis_kelamin" value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}> P
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat Lengkap</label>
                        <input type="text" name="alamat" class="form-control clr-input" id="alamat" placeholder="masukan alamat anda" value="{{ old('alamat') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">No. HP</label>
                        <input type="text" name="no_hp" class="form-control clr-input" id="no_hp" placeholder="masukan no hp" value="{{ old('no_hp') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Spesialis</label>
                        <select name="specialist_id" class="form-control clr-input" id="specialist_id" required>
                            <option value="">Pilih Spesialis</option>
                            @foreach($specialists as $specialist)
                                <option value="{{ $specialist->id }}">{{ $specialist->specialist_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Dokter</label>
                        <select name="id_doctor" class="form-control clr-input" id="id_doctor" required>
                            <option value="">Pilih Dokter</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control clr-input" id="keluhan" placeholder="masukan keluhan anda" value="{{ old('keluhan') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pilih Jadwal</label>
                        <select name="id_jadwal" class="form-control clr-input" id="id_jadwal" required>
                            <option value="">Pilih Tanggal</option>
                        </select>
                    </div>
                    <div class="form-text text-danger fw-semibold mb-2">*) Wajib diisi</div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary py-1">Kirim</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('specialist_id').addEventListener('change', function () {
            var specialistId = this.value;
            console.log('ID spesialis yang dipilih:', specialistId); // Log untuk debugging
            fetch('/reservasi/getDoctorsBySpecialist?specialist_id=' + specialistId)
                .then(response => response.json())
                .then(data => {
                    console.log('Dokter yang diambil:', data); // Log untuk debugging
                    var doctorSelect = document.getElementById('id_doctor');
                    doctorSelect.innerHTML = '<option value="">Pilih Dokter</option>';
                    for (var id in data) {
                        var option = document.createElement('option');
                        option.value = id;
                        option.text = data[id];
                        doctorSelect.appendChild(option);
                    }
                })
                .catch(error => {
                    console.error('Kesalahan saat mengambil dokter:', error); // Log untuk debugging
                });
        });

        document.getElementById('id_doctor').addEventListener('change', function () {
            var doctorId = this.value;
            console.log('ID dokter yang dipilih:', doctorId); // Log untuk debugging
            fetch('/reservasi/getJadwalByDoctor?id_doctor=' + doctorId)
                .then(response => response.json())
                .then(data => {
                    console.log('Jadwal yang diambil:', data); // Log untuk debugging
                    var jadwalSelect = document.getElementById('id_jadwal');
                    jadwalSelect.innerHTML = '<option value="">Pilih Tanggal</option>';
                    data.forEach(function(jadwal) {
                        var hari = jadwal.hari;
                        var jamMulai = jadwal.jam_mulai;
                        var jamSelesai = jadwal.jam_selesai;

                        var currentDate = new Date();
                        var currentDay = currentDate.getDay(); // Sunday - Saturday : 0 - 6
                        var targetDay = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"].indexOf(hari);

                        // Calculate the difference in days
                        var dayDifference = (targetDay + 7 - currentDay) % 7;
                        if (dayDifference === 0) {
                            dayDifference = 7; // Set to next week if the same day
                        }

                        var optionDate = new Date(currentDate);
                        optionDate.setDate(currentDate.getDate() + dayDifference);

                        var option = document.createElement('option');
                        option.value = jadwal.id;
                        option.text = `${hari}, ${optionDate.toLocaleDateString()} ${jamMulai} - ${jamSelesai}`;
                        jadwalSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Kesalahan saat mengambil jadwal:', error); // Log untuk debugging
                });
        });
    </script>
</html>
@endsection
