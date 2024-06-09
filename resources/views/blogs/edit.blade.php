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
                        <h1>Edit Blog</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $blog->judul }}">
                            </div>
                            <div class="mb-3">
                                <label for="id_doctor" class="form-label">Doctor</label>
                                <select class="form-control" id="id_doctor" name="id_doctor">
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}" {{ $doctor->id == $blog->id_doctor ? 'selected' : '' }}>{{ $doctor->nama_doktor }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_category" class="form-label">Category</label>
                                <select class="form-control" id="id_category" name="id_category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $blog->id_category ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="3">{{ $blog->body }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label">Image</label>
                                <input type="file" class="form-control" id="img" name="img" value="{{ $blog->img }}">
                            </div>
                            <div class="mb-3">
                                <label for="kutipan" class="form-label">Kutipan</label>
                                <input type="text" class="form-control" id="kutipan" name="kutipan" value="{{ $blog->kutipan }}">
                            </div>
                            <div class="mb-3">
                                <label for="release_date" class="form-label">Release Date</label>
                                <input type="datetime-local" class="form-control" id="release_date" name="release_date" value="{{ \Carbon\Carbon::parse($blog->release_date)->format('Y-m-d\TH:i') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

@endsection
