@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Pengelolaan User</h2>

    <!-- Form Tambah User -->
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" class="form-control" id="role" required>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah User</button>
    </form>

    <!-- Daftar User -->
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <!-- Form Edit Role -->
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <select name="role" required>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                        </select>
                        <button type="submit" class="btn btn-warning">Ubah Role</button>
                    </form>

                    <!-- Form Hapus User -->
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
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
