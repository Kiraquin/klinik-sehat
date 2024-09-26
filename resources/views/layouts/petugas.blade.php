<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/petugas">Klinik Sehat</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('petugas.pemeriksaans.index') }}">Pemeriksaan</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')  <!-- Bagian ini akan diisi oleh konten halaman -->
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="text-center p-3 bg-dark text-white">
                © 2024 Klinik Sehat - All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
