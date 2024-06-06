<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Jadwal Dokter') }}
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
                    <div class="container">
                        <h1>Tambah Jadwal Dokter</h1>
                        <form action="{{ route('jadwal.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="id_doctor">Dokter:</label>
                                <select class="form-control" id="id_doctor" name="id_doctor">
                                    @foreach($dokters as $dokter)
                                        <option value="{{ $dokter->id }}">{{ $dokter->nama_doktor }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari:</label>
                                <select class="form-control" id="hari" name="hari">
                                    <option value="Senin" {{ old('hari', $jadwal->hari ?? '') == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ old('hari', $jadwal->hari ?? '') == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ old('hari', $jadwal->hari ?? '') == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ old('hari', $jadwal->hari ?? '') == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ old('hari', $jadwal->hari ?? '') == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                    <option value="Sabtu" {{ old('hari', $jadwal->hari ?? '') == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jam_mulai">Jam Mulai:</label>
                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai">
                            </div>
                            <div class="form-group">
                                <label for="jam_selesai">Jam Selesai:</label>
                                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
