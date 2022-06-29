<!DOCTYPE html>
<html>
<body>
    <h3>Edit Anggota</h3>
    <a href="/anggotas"> Kembali</a>
    <br />
    <br />
    @foreach($anggotas as $p)
        <form action="/anggotas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br />
            user_id <input type="text" name="user_id" required="required" value="{{ $p->user_id }}"> <br />
            nim <input type="text" name="nim" required="required" value="{{ $p->nim }}"> <br />
            nama <input type="text" name="nama" required="required" value="{{ $p->nama }}"> <br />
            tempat_lahir <input type="text" name="tempat_lahir" required="required" value="{{ $p->tempat_lahir }}">
            <br />
            tgl_lahir <input type="date" required="required" name="tgl_lahir" value="{{ $p->tgl_lahir }}"> <br />
            gender <select class="form-control" name="gender" required="">
                <option value="L"
                    {{ $p->gender === "L" ? "selected" : "" }}>
                    Laki-laki</option>
                <option value="P"
                    {{ $p->gender === "P" ? "selected" : "" }}>
                    Perempuan</option>
            </select><br />
            prodi <input type="text" required="required" name="prodi" value="{{ $p->prodi }}"> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach
</body>

</html>