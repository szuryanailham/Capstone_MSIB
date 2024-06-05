<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Daftar Dokter</title>
                        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                    </head>
                    <body>
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Category</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Tambahkan data kategori  baru.</h6>
                                    <a href="#" class="btn btn-primary mb-3">Create New Category</a>

                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="container mt-5">
                            <h1>Blogs</h1>
                            <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col" width="5%">Title</th>
                                        <th>Doctor ID</th>
                                        <th>Category ID</th>
                                        <th scope="col" width="10%">Slug</th>
                                        <th scope="col" width="10%">Excerpt</th>
                                        <th>Release Date</th>
                                        <th>Actions</th>
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
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
