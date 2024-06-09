@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reservasi Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        .bg-blue {
            background-color: #212e77;
        }

        .img-custom {
            margin-top: 0px;
            height: 170px;
            width: 100%;
        }

        .bg-pink {
            background-color: #F0DCDC;
        }

        .clr-input {
            background-color: #C8B6B6;
        }
    </style>
</head>
<section>
    <div class="conatiner">
        <a href="/user/regist-user.html"><img class="img-custom" src="/asset/SubHead.png" alt=""></a>
    </div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Pembayaran untuk Reservasi #{{ $reservasis->id }}</div>
                <div class="card-body">
                    <form action="{{ route('payments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="reservasi_id" value="{{ $reservasis->id }}">
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <input type="text" name="metode_pembayaran" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Rekening Tujuan</label>
                            <input type="text" name="no_rekening_tujuan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Rekening Anda</label>
                            <input type="text" name="no_rekening_anda" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Bayar</button>
                        {{-- <a href="{{ route('reservasi.index') }}" class="btn btn-danger">Batal</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
