<!DOCTYPE html>
<html>
<head>
    <title>Beranda Klinik Sehat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS untuk Flexbox Layout */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        /* Konten Utama Harus Flex dan Grow */
        .content {
            flex: 1 0 auto;
        }

        /* Footer berada di bagian bawah */
        footer {
            flex-shrink: 0;
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Menu Navigasi -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('beranda') }}">Klinik Sehat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('hubungi.kami') }}">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang.kami') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pemeriksaan') }}">Pemeriksaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Konten Utama Halaman Beranda -->
        <div class="text-center mt-5">
            <h1>Selamat Datang di Klinik Sehat</h1>
            <p>Kami menyediakan layanan kesehatan terbaik untuk Anda.</p>
        </div>

        <!-- Informasi Klinik -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Kesehatan</h5>
                        <p class="card-text">Klinik Sehat menyediakan berbagai layanan kesehatan mulai dari konsultasi hingga perawatan intensif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jam Operasional</h5>
                        <p class="card-text">Senin - Jumat: 08:00 - 20:00<br>Sabtu: 08:00 - 14:00<br>Minggu: Tutup</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hubungi Kami</h5>
                        <p class="card-text">Telepon: 021-12345678<br>Email: info@kliniksehat.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Login -->
        <div class="text-center mt-5">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>


    <footer class="bg-light text-center text-lg-start mt-5">
        <!-- Copyright -->
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Klinik Sehat - Jalan Maju Jaya No 1 Surabaya
    </div>
</footer>
</body>
</html>
