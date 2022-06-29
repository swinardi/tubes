<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>
    <h3>Data books</h3>
    <a href="/books"> Kembali</a>
    <br />
    <br />
    <form action="/books/store" method="post">
        {{ csrf_field() }}
        judul <input type="text" name="judul" required="required"> <br />
        penulis <input type="text" name="penulis" required="required"> <br />
        penerbit <input type="text" name="penerbit" required="required"> <br />
        tahun_terbit <input type="number" name="tahun_terbit" required="required"> <br />
        deskripsi <textarea name="deskripsi" required="required"></textarea> <br />
        jumlah_buku <input type="number" name="jumlah_buku" required="required"> <br />
        lokasi <select class="form-control" name="lokasi" required="">
            <option value=""></option>
            <option value="rak1">Rak 1</option>
            <option value="rak2">Rak 2</option>
            <option value="rak3">Rak 3</option>
        </select> <br />
        cover <textarea name="cover"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>