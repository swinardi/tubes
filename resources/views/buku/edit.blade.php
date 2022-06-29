<!DOCTYPE html>
<html>
<body>
    <h3>Edit Buku</h3>
    <a href="/books"> Kembali</a>
    <br />
    <br />
    @foreach($books as $p)
        <form action="/books/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br />
            judul <input type="text" name="judul" required="required" value="{{ $p->judul }}"> <br />
            penulis <input type="text" name="penulis" required="required" value="{{ $p->penulis }}"> <br />
            penerbit <input type="text" name="penerbit" required="required" value="{{ $p->penerbit }}"> <br />
            tahun_terbit <input type="number" name="tahun_terbit" required="required" value="{{ $p->tahun_terbit }}">
            <br />
            deskripsi <textarea required="required" name="deskripsi">{{ $p->deskripsi }}</textarea> <br />
            jumlah_buku <input type="number" name="jumlah_buku" required="required" value="{{ $p->jumlah_buku }}">
            <br />
            lokasi <select class="form-control" name="lokasi" required="">
                <option value="rak1"
                    {{ $p->lokasi === "rak1" ? "selected" : "" }}>
                    Rak 1</option>
                <option value="rak2"
                    {{ $p->lokasi === "rak2" ? "selected" : "" }}>
                    Rak 2</option>
                <option value="rak3"
                    {{ $p->lokasi === "rak3" ? "selected" : "" }}>
                    Rak 3</option>
            </select><br />
            cover <textarea required="required" name="cover">{{ $p->cover }}</textarea> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
</body>

</html>