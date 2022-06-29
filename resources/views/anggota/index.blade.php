<!DOCTYPE html>
<html>

<head>
    <title>Input Anggota</title>
</head>

<body>
    <h2>Input Anggota</h2>
    <a href="/anggotas/tambah"> + Tambah Anggota Baru</a>
    <br />
    <br />
    <!-- user_id', 'nim', 'nama', 'tempat_lahir', 'tgl_lahir', 'gender', 'prodi', -->
    <table border="1">
        <tr>
            <th>user_id</th>
            <th>nim</th>
            <th>nama</th>
            <th>tempat_lahir</th>
            <th>tgl_lahir</th>
            <th>gender</th>
            <th>prodi</th>
            <th>Opsi</th>
        </tr>
        @foreach($anggotas as $p)
            <tr>
                <td>{{ $p->user_id }}</td>
                <td>{{ $p->nim }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->tempat_lahir }}</td>
                <td>{{ $p->tgl_lahir }}</td>
                <td>{{ $p->gender }}</td>
                <td>{{ $p->prodi }}</td>
                <td>
                    <a href="/anggotas/hapus/{{ $p->id }}">Hapus</a>
                    |
                    <a href="/anggotas/edit/{{ $p->id }}">Edit</a>
                    |
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>