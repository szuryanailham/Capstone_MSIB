@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')

    <head>
        <title>Edit Specialist</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <h1 class="mb-4">Edit Specialist</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('specialist.update', $specialist->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="specialist_name">Specialist Name:</label>
                    <input type="text" class="form-control" name="specialist_name" id="specialist_name"
                        value="{{ $specialist->specialist_name }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('specialist.index') }}" class="btn btn-secondary">Back to list</a>
            </form>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
@endsection
