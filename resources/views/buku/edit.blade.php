<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Buku</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('buku.index') }}">
            <i class="fas fa-home"></i> Data buku
        </a>
    </nav>
    <form action="{{ route('buku.update',$bukus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3>Edit Data Buku</h3>
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" id="judul" value="{{ $bukus->judul }}">
        
        <label for="penulis">Penulis Buku</label>
        <input type="text" name="penulis" id="penulis" value="{{ $bukus->penulis }}">

        <label for="tahun">Tahun Terbit</label>
        <input type="text" name="tahun" id="tahun" value="{{ $bukus->tahun }}">

        <button type="submit">Update</button>
    </form>
</body>
</html>