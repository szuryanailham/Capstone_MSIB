@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <h1>Daftar Pasien</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Tanggal Reservasi</th>
              
        </thead>
        <tbody>
            @foreach($reservasis as $reservasi)
                <tr>
                    <td>{{ $reservasi->nama_pasien }}</td>
                    <td>{{ $reservasi->jenis_kelamin }}</td>
                    <td>{{ $reservasi->alamat }}</td>
                    <td>{{ $reservasi->no_hp }}</td>
                    <td>{{ $reservasi->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
