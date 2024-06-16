@extends('layouts.app')

@section('title', 'Reservation Details')

@section('content')
    <div class="container">
        <!-- Reservation Details -->
        <div class="card mb-5 mt-5">
            <div class="card-header">
                <h2>Reservation Details</h2>
            </div>
            <div class="card-body">
                <p><strong>Nama Pasien:</strong> {{ $reservasi->nama_pasien }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $reservasi->jenis_kelamin }}</p>
                <p><strong>Alamat:</strong> {{ $reservasi->alamat }}</p>
                <p><strong>No. HP:</strong> {{ $reservasi->no_hp }}</p>
                <p><strong>Specialist:</strong> {{ $reservasi->specialist->specialist_name }}</p>
                <p><strong>Dokter:</strong> {{ $reservasi->dokter->nama_doktor }}</p>
                <p><strong>Tanggal Reservasi:</strong> {{ $reservasi->created_at }}</p>
                <p><strong>Keluhan:</strong> {{ $reservasi->keluhan }}</p>
            </div>
        </div>

        <!-- Payment Details -->
        <div class="card mb-3">
            <div class="card-header">
                <h2>Payment Details</h2>
            </div>
            <div class="card-body">
                @if($reservasi->payment)
                    <p><strong>Payment ID:</strong> {{ $reservasi->payment->id }}</p>
                    <p><strong>Metode Pembayaran:</strong> {{ $reservasi->payment->metode_pembayaran }}</p>
                    <p><strong>No Rekening Tujuan:</strong> {{ $reservasi->payment->no_rekening_tujuan }}</p>
                    <p><strong>No Rekening anda:</strong> {{ $reservasi->payment->no_rekening_anda }}</p>
                    
                @else
                    <p>No payment information available.</p>
                @endif
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('reservasi.history') }}" class="btn btn-primary">Back to Reservations</a>
    </div>
@endsection
