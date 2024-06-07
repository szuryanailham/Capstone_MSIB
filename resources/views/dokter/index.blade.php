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
                        <div class="container">
                            <h1>Daftar Dokter</h1>
                            <a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Dokter</th>
                                        <th>Specialist</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dokters as $dokter)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dokter->nama_doktor }}</td>
                                            <td>{{ $dokter->specialist->specialist_name }}</td>
                                            <td>
                                                <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</button>
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
