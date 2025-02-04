<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku yang masuk</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
<nav>
    <a href="{{ route('buku.create') }}">
        <i class="fas fa-add"></i> Tambah buku
    </a>
</nav>

    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Tahun Terbit</th>
                <th>Tanggal Masuk</th>
                <th>Terakhir Modifikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->tahun }}</td>
                    <td>{{ $buku->created_at }}</td>
                    <td>{{ $buku->updated_at }}</td>
                    <td>
                        <a href="{{ route('buku.edit',$buku->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('buku.delete',$buku->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $bukus->links() }}
    </div>
</body>
</html>