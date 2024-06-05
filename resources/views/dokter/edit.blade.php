<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Edit Dokter</title>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    </head>
                    <body>
                        <div class="container">
                            <h1>Edit Dokter</h1>
                            <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_doktor">Nama Dokter:</label>
                                    <input type="text" class="form-control" id="nama_doktor" name="nama_doktor" value="{{ $dokter->nama_doktor }}">
                                </div>
                                <div class="form-group">
                                    <label for="specialist_id">Specialist:</label>
                                    <select class="form-control" id="specialist_id" name="specialist_id">
                                        @foreach($specialists as $specialist)
                                            <option value="{{ $specialist->id }}" {{ $specialist->id == $dokter->specialist_id ? 'selected' : '' }}>
                                                {{ $specialist->specialist_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
