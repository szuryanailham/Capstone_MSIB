@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Dokter</h1>
        @can('admin')
        <a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>    
        @endcan
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Dokter</th>
                    <th>Specialist</th>
                    @can('admin')
                    <th>Actions</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach($dokters as $dokter)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dokter->nama_doktor }}</td>
                        <td>{{ $dokter->specialist->specialist_name }}</td>
                        @can('admin')
                        <td>
                            <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</button>
                            </form>
                        </td>
                        @endcan
                
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

@endsection
                    
  