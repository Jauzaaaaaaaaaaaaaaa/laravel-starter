<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Starter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;800;900&family=Red+Hat+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('atelier/atelier.css') }}">
    <link rel="stylesheet" href="{{ asset('atelier/theme.css') }}">
    <script src="{{ asset('atelier/theme.js') }}"></script>
    <script src="{{ asset('atelier/atelier.js') }}"></script>
</head>
<body>
    <header class="st-top at-top"><b>Laravel Starter</b><span>Lembar A1, skala 1:1</span></header>
    <main class="st-main">
        <p class="st-note" data-at>Fondasi proyek</p>
        <h1 data-at-split>Fondasi <em>siap</em> dibangun</h1>
        <p class="st-lead" data-at>Kerangka Laravel yang bersih, titik awal untuk aplikasi berikutnya.</p>
        <section class="st-specs" data-at-stagger>
            <div><span>Laravel</span><b>v{{ Illuminate\Foundation\Application::VERSION }}</b></div>
            <div><span>PHP</span><b>v{{ PHP_VERSION }}</b></div>
            <div><span>Lingkungan</span><b>{{ app()->environment() }}</b></div>
        </section>
        <section class="st-links" data-at-stagger>
            <a href="https://laravel.com/docs" target="_blank" rel="noopener"><span>01</span>Dokumentasi</a>
            <a href="https://laracasts.com" target="_blank" rel="noopener"><span>02</span>Laracasts</a>
            <a href="https://laravel-news.com" target="_blank" rel="noopener"><span>03</span>Laravel News</a>
            <a href="https://github.com/laravel/laravel" target="_blank" rel="noopener"><span>04</span>Kode sumber</a>
        </section>
    </main>
</body>
</html>
