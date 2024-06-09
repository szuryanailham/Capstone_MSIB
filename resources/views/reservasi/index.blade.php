{{-- <!-- resources/views/reservasi/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reservation List</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Specialist</th>
                <th>Dokter</th>
                <th>Keluhan</th>
                <th>Tanggal Periksa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservasis as $reservasi)
                <tr>
                    <td>{{ $reservasi->nama_pasien }}</td>
                    <td>{{ $reservasi->jenis_kelamin }}</td>
                    <td>{{ $reservasi->alamat }}</td>
                    <td>{{ $reservasi->no_hp }}</td>
                    <td>{{ $reservasi->specialist->specialist_name }}</td>
                    <td>{{ $reservasi->dokter->nama_doktor }}</td>
                    <td>{{ $reservasi->keluhan }}</td>
                    <td>{{ $reservasi->tanggal_periksa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}
