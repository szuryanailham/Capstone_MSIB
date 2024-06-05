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
                        <title>Tambah Dokter Baru</title>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    </head>
                    <div class="container mt-5">
                        <h1>Blog Details</h1>
                        <div class="card">
                            <div class="card-header">
                                {{ $blog->judul }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Doctor: {{ $blog->doctor ? $blog->doctor->nama_doktor : 'N/A' }}</h5>
                                <h5 class="card-title">Category: {{ $blog->category ? $blog->category->name : 'N/A' }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Slug: {{ $blog->slug }}</h6>
                                <p class="card-text">{{ $blog->body }}</p>
                                @if($blog->img)
                                    <img src="{{ $blog->img }}" class="img-fluid" alt="{{ $blog->judul }}">
                                @endif
                                <p class="card-text"><small class="text-muted">Release Date: {{ $blog->release_date }}</small></p>
                                <p class="card-text">Excerpt: {{ $blog->kutipan }}</p>
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back to Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
