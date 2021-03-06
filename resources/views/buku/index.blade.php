<!DOCTYPE html>
<html>

<head>
    <title>Input Buku</title>
</head>

<body>
    <h2>Input Buku</h2>
    <a href="/books/tambah"> + Tambah Buku Baru</a>
    <br />
    <br />
    <!-- judul', 'penulis', 'penerbit', 'tahun_terbit', 'jumlah_buku', 'deskripsi', 'lokasi', 'cover' -->
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Buku</th>
            <th>Deskripsi</th>
            <th>lokasi</th>
            <th>Cover</th>
            <th>Opsi</th>
        </tr>
        @foreach($books as $p)
            <tr>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->penulis }}</td>
                <td>{{ $p->penerbit }}</td>
                <td>{{ $p->tahun_terbit }}</td>
                <td>{{ $p->jumlah_buku }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->lokasi }}</td>
                <td>{{ $p->cover }}</td>
                <td>
                    <a href="/books/hapus/{{ $p->id }}">Hapus</a>
                    |
                    <a href="/books/edit/{{ $p->id }}">Edit</a>
                    |
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>