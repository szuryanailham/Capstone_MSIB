
@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')
<head>
    <title>Specialists</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Specialists</h1>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
        
        @can('admin')
        <a href="{{route('specialist.create')}}" class="btn btn-primary mb-3">Create New Specialist</a>
        @endcan
           
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    @can('admin')
                    <th>Actions</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($specialists as $specialist)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $specialist->specialist_name }}</td>
                        @can('admin')
                        <td>
                           
                            <a href="{{ route('specialist.edit', $specialist->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('specialist.destroy', $specialist->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    
@endsection