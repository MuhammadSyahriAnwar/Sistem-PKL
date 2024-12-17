<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKL</title>
    <!-- Link ke file CSS, bisa Anda sesuaikan -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Navbar atau header Anda bisa diletakkan di sini -->
    <nav>
        <!-- Navbar Code -->
    </nav>

    <div class="container">
        <!-- Konten utama akan diletakkan di sini -->
        @yield('content') <!-- Menampilkan konten spesifik dari setiap halaman -->
    </div>

    <!-- Footer atau JavaScript Anda bisa diletakkan di sini -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
