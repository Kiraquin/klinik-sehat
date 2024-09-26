@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Dashboard Admin</h1>

    <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @csrf
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" class="form-control" name="nama_pasien" required>
        </div>

        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control" name="keluhan" required></textarea>
        </div>

        <div class="form-group">
            <label for="diagnosa">Diagnosa</label>
            <textarea class="form-control" name="diagnosa" required></textarea>
        </div>

        <div class="form-group">
            <label for="hasil_periksa">Hasil Pemeriksaan</label>
            <textarea class="form-control" name="hasil_periksa" required></textarea>
        </div>

        <div class="form-group">
            <label for="jenis_pasien">Jenis Pasien</label><br>
            <input type="radio" name="jenis_pasien" value="BPJS" required> BPJS
            <input type="radio" name="jenis_pasien" value="Umum" required> Umum
        </div>

        <div class="form-group">
            <label for="total_pembayaran">Total Pembayaran</label>
            <input type="number" class="form-control" name="total_pembayaran" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto Pasien</label>
            <input type="file" class="form-control" name="foto" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data Pasien</button>
    </form>
</div>

{{-- <div class="container">
    <h2>Dashboard Admin - Perhitungan Pembelian Tiket</h2> --}}

    {{-- <!-- Form Input -->
    <form action="{{ route('admin.calculate') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jenis_pasien">Jenis Pasien</label><br>
            <input type="radio" name="jenis_pasien" value="BPJS" required> BPJS
            <input type="radio" name="jenis_pasien" value="Umum" required> Umum
        </div>

        <div class="form-group">
            <label for="total_pembayaran">Total Pembayaran (Rp)</label>
            <input type="number" name="total_pembayaran" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <!-- Hasil Perhitungan -->
    @if(isset($finalTotal))
    <hr>
    <h4>Hasil Perhitungan:</h4>
    <p><strong>Jenis Pasien:</strong> {{ $jenisPasien }}</p>
    <p><strong>Total Pembayaran:</strong> Rp{{ number_format($totalPembayaran, 0, ',', '.') }}</p>
    <p><strong>Diskon:</strong> Rp{{ number_format($diskon, 0, ',', '.') }}</p>
    <p><strong>Total Akhir:</strong> Rp{{ number_format($finalTotal, 0, ',', '.') }}</p>
    @endif
</div> --}}
<br>
<div class="container">
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
</div>
</div>
@endsection