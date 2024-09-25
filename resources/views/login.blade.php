<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
    <h1 class="text-center mt-5">Login Klinik Sehat</h1>
    <form method="POST" action="{{ route('login') }}" class="text-center mt-5">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        @if ($errors->has('error'))
            <p>{{ $errors->first('error') }}</p>
        @endif
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

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
