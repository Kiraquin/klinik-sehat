@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Jenis Pemeriksaan</h2>


    <!-- Form Tambah Jenis Pemeriksaan -->
    <form action="{{ route('admin.pemeriksaans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pemeriksaan</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Pemeriksaan</button>
    </form>

    <!-- Daftar Pemeriksaan -->
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemeriksaans as $pemeriksaan)
            <tr>
                <td>{{ $pemeriksaan->nama }}</td>
                <td>
                    <!-- Form Edit Pemeriksaan -->
                    <form action="{{ route('admin.pemeriksaans.update', $pemeriksaan->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="nama" value="{{ $pemeriksaan->nama }}" required>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </form>

                    <!-- Form Hapus Pemeriksaan -->
                    <form action="{{ route('admin.pemeriksaans.destroy', $pemeriksaan->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
