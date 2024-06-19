<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #f2f2f2;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .card-body {
            padding: 20px;
        }
        h2 {
            margin-top: 0;
        }
        p {
            margin: 5px 0;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Reservation Details -->
        <div class="card">
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
                <p><strong>Tanggal Reservasi:</strong> {{ $reservasi->created_at->format('d/m/Y H:i:s') }}</p>
                <p><strong>Keluhan:</strong> {{ $reservasi->keluhan }}</p>
            </div>
        </div>

        <!-- Payment Details -->
        <div class="card">
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
    </div>
</body>
</html>
