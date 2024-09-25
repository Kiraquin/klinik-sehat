<!DOCTYPE html>
<html>
<head>
    <title>Tentang Kami - Klinik Sehat</title>
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
    <h1 class="text-center mt-5">Tentang Klinik Sehat</h1>
    <p class="text-center mt-5">Klinik Sehat adalah fasilitas kesehatan yang didedikasikan untuk memberikan perawatan kesehatan berkualitas bagi masyarakat.</p>

    <div class="text-center mt-5">
        <a href="/" class="btn btn-primary">kembali</a>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <!-- Copyright -->
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Klinik Sehat - Jalan Maju Jaya No 1 Surabaya
    </div>
</footer>
</body>
</html>
