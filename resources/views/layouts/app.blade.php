<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Perpustakaan')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Optional: Add additional CSS or JavaScript libraries here -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Aplikasi Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item {{ Request::is('bukus*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('bukus.index') }}">Daftar Buku</a>
                </li>
                <li class="nav-item {{ Request::is('penuliss*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('penuliss.index') }}">Daftar Penulis</a>
                </li>
                <li class="nav-item {{ Request::is('raks*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('raks.index') }}">Daftar Rak</a>
                </li>
                <li class="nav-item {{ Request::is('anggotas*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('anggotas.index') }}">Daftar Anggota</a>
                </li>
                <li class="nav-item {{ Request::is('peminjamans*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('peminjamans.index') }}">Daftar Peminjaman</a>
                </li>
                <li class="nav-item {{ Request::is('sanksis*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('sanksis.index') }}">Daftar Sanksi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-Gp/ZiZljOVb7pTE5o6O1aHvN1TKjpTKv/0JzF+g9lB5L2n8gqSrrzZwvmf8WH+Uz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+YF2hPz65R8eHQibvLF70+P3RvW0E2p/U5J" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Optional: Add additional JavaScript libraries here -->
</body>
</html>
