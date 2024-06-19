<!-- resources/views/blogs/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Blog Post</h1>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" required>
        </div>

        <div class="form-group">
            <label for="id_doctor">Doctor</label>
            <select class="form-control" name="id_doctor" id="id_doctor" required>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->nama_doktor }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_category">Category</label>
            <select class="form-control" name="id_category" id="id_category" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" required>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="cover">Cover Image</label>
            <input type="file" class="form-control" name="cover" id="cover">
        </div>

        <div class="form-group">
            <label for="kutipan">Kutipan</label>
            <input type="text" class="form-control" name="kutipan" id="kutipan" required>
        </div>

        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="datetime-local" class="form-control" name="release_date" id="release_date" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
