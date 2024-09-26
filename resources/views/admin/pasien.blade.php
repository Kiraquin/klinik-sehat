@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Pasien</h1>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pasien</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Hasil Pemeriksaan</th>
                <th>Jenis Pasien</th>
                <th>Total Pembayaran</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
            <tr>
                <td>{{ $pasien->nama_pasien }}</td>
                <td>{{ $pasien->keluhan }}</td>
                <td>{{ $pasien->diagnosa }}</td>
                <td>{{ $pasien->hasil_periksa }}</td>
                <td>{{ $pasien->jenis_pasien }}</td>
                <td>Rp{{ number_format($pasien->total_pembayaran, 0, ',', '.') }}</td>
                <td>
                    @if($pasien->foto)
                        <img src="{{ asset('pasien/foto/' . $pasien->foto) }}" alt="Foto Pasien" width="100px">
                    @else
                        Tidak ada foto
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
