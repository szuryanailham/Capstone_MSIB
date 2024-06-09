@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Reservasi</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Pasien</th>
                            <td>{{ $reservasi->nama_pasien }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $reservasi->alamat }}</td>
                        </tr>
                        <tr>
                            <th>No. HP</th>
                            <td>{{ $reservasi->no_hp }}</td>
                        </tr>
                        <tr>
                            <th>Keluhan</th>
                            <td>{{ $reservasi->keluhan }}</td>
                        </tr>
                        <tr>
                            <th>Spesialis</th>
                            <td>{{ $reservasi->specialist->specialist_name }}</td>
                        </tr>
                        <tr>
                            <th>Nama Dokter</th>
                            <td>{{ $reservasi->dokter->nama_doktor }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Periksa</th>
                            <td>{{ $reservasi->tanggal_periksa }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('reservasi.create') }}" class="btn btn-primary">Kembali ke Daftar Reservasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
