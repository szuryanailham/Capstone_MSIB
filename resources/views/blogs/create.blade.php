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
                        <h1>Create New Blog</h1>
                        <form action="{{ route('blogs.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Title:</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="form-group">
                                <label for="id_doctor">Doctor:</label>
                                <select class="form-control" id="id_doctor" name="id_doctor">
                                    <option value="">Select Doctor</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->nama_doktor }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_category">Category:</label>
                                <select class="form-control" id="id_category" name="id_category">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <input type="text" class="form-control" id="slug" name="slug">
                            </div>
                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="img">Image:</label>
                                <input type="file" class="form-control" id="img" name="img">
                            </div>
                            <div class="form-group">
                                <label for="kutipan">Kutipan:</label>
                                <input type="text" class="form-control" id="kutipan" name="kutipan">
                            </div>
                            <div class="form-group">
                                <label for="release_date">Release Date:</label>
                                <input type="datetime-local" class="form-control" id="release_date" name="release_date">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
