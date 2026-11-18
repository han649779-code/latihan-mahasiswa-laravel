<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/daftar/mahasiswa">Daftar Mahasiswa</a>
        <a href="/kalkulator/segitiga">Kalkulator Segitiga</a>
    </nav>

    <main class="card">
        @yield('content')
    </main>
</body>
</html>