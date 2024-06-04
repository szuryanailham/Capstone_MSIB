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
                    <body>
                        <div class="container">
                            <h1>Tambah Dokter Baru</h1>
                            <form action="{{ route('dokter.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_dokter">Nama Dokter:</label>
                                    <input type="text" class="form-control" id="nama_dokter" name="nama_dokter">
                                </div>
                                <div class="form-group">
                                    <label for="specialist_id">Specialist:</label>
                                    <select class="form-control" id="specialist_id" name="specialist_id">
                                        @foreach($specialists as $specialist)
                                            <option value="{{ $specialist->id }}">{{ $specialist->specialist_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
