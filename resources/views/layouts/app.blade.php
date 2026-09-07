<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pemberdayaan Masyarakat Jakarta Barat')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-brand">
                <div class="logo-box">LOGO</div>
                <span>Pemberdayaan Masyarakat</span>
            </div>
            <div class="nav-links">
                <a href="{{ url('/') }}" class="nav-item">Beranda</a>
                <a href="{{ url('/program') }}" class="nav-item">Program Pelatihan</a>
                <a href="{{ url('/login') }}" class="btn-login-nav">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- KONTEN DINAMIS -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; Pemkot Administrasi Jakarta Barat - Sistem Informasi Terpadu</p>
    </footer>

</body>
</html>