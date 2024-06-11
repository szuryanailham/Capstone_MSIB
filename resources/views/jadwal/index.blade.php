@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container mt-5">
    <h1>Jadwal Dokter</h1>
    @can('admin')
    <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
    @endcan
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Dokter</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                @can('admin')
                <th>Actions</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals as $jadwal)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jadwal->dokter->nama_doktor }}</td>
                    <td>{{ $jadwal->hari }}</td>
                    <td>{{ $jadwal->jam_mulai }}</td>
                    <td>{{ $jadwal->jam_selesai }}</td>
                    @can('admin')
                    <td>
                        <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                        </form>
                    </td>a
                    @endcan
                 
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection