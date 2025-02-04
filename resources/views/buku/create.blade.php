<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah buku</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('buku.index') }}">
            <i class="fas fa-home"></i>
        </a>
    </nav>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <h3>Tambah Buku Baru</h3>
        @if (session('success'))
            <i class="fas fa-check"></i> {{ session('success') }}
        @endif
        <label for="judul">Judul buku</label>
        <input type="text" name="judul" id="judul">

        <label for="penulis">Penulis buku</label>
        <input type="text" name="penulis" id="penulis">

        <label for="tahun">Tahun terbit</label>
        <input type="text" name="tahun" id="tahun">

        <button type="submit">Tambah</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>