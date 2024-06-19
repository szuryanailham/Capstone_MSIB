@extends('layouts.app')
@section('title', 'Riwayat Reservasi')
@section('content')
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Riwayat Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Riwayat Reservasi</h4>
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. HP</th>
                                <th>Specialist</th>
                                <th>Dokter</th>
                                <th>Tanggal Reservasi</th>
                                <th>Keluhan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservasis as $reservasi)
                                <tr>
                                    <td>{{ $reservasi->nama_pasien }}</td>
                                    <td>{{ $reservasi->jenis_kelamin }}</td>
                                    <td>{{ $reservasi->alamat }}</td>
                                    <td>{{ $reservasi->no_hp }}</td>
                                    <td>{{ $reservasi->specialist->specialist_name ?? 'N/A' }}</td>
                                    <td>{{ $reservasi->dokter->nama_doktor ?? 'N/A' }}</td>
                                    <td>{{ $reservasi->created_at }}</td>
                                    <td>{{ $reservasi->keluhan }}</td>
                                    <td>
                                        <a href="{{ route('reservasi.detail', $reservasi->id) }}" class="btn btn-primary">View Details</a>
                                        <a href="{{ route('reservasi.pdf', $reservasi->id) }}" class="btn btn-primary">Download PDF</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
