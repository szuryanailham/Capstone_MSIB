@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Dokter Baru</h1>
        <form action="{{ route('dokter.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_doktor">Nama Dokter:</label>
                <input type="text" class="form-control" id="nama_doktor" name="nama_doktor">
            </div>
            <div class="form-group">
                <label for="specialist_id">Specialist:</label>
                <select class="form-control" id="specialist_id" name="specialist_id">
                    @foreach($specialists as $specialist)
                        <option value="{{ $specialist->id }}">{{ $specialist->specialist_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
                
@endsection
