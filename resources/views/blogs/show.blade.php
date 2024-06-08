@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')
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
                                <img src="{{ asset('storage/images/' . $blog->img) }}" alt="Blog Image">
                                @endif
                                <p class="card-text"><small class="text-muted">Release Date: {{ $blog->release_date }}</small></p>
                                <p class="card-text">Excerpt: {{ $blog->kutipan }}</p>
                                <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back to Blogs</a>
                            </div>
                        </div>
                    </div>
     @endsection
