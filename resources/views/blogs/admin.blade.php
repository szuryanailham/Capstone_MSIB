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
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tambahkan data kategori baru.</h6>
                        <a href="#" class="btn btn-primary mb-3">Create New Category</a>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="mt-4">Blogs</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>
        <a href="{{ route('blogs.index') }}" class="btn btn-primary mb-3">kembali Ke Blog</a>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" width="1%">No</th>
                    <th scope="col" width="15%">Title</th>
                    <th scope="col" width="10%">Doctor ID</th>
                    <th scope="col" width="15%">Category ID</th>
                    <th scope="col" width="10%">Slug</th>
                    <th scope="col" width="20%">Excerpt</th>
                    <th scope="col" width="10%">Release Date</th>
                    <th scope="col" width="25%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->judul }}</td>
                        <td>{{ $blog->dokter->nama_doktor }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>{{ $blog->slug }}</td>
                        <td>{{ $blog->kutipan }}</td>
                        <td>{{ $blog->release_date }}</td>
                        <td>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
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
@endsection
