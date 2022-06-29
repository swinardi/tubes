<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>
    <h3>Data anggotas</h3>
    <a href="/anggotas"> Kembali</a>
    <br />
    <br />
    <form action="/anggotas/store" method="post">
        {{ csrf_field() }}
        user_id <input type="text" name="user_id" required="required"> <br />
        nim <input type="text" name="nim" required="required"> <br />
        nama <input type="text" name="nama" required="required"> <br />
        tempat_lahir <input type="text" name="tempat_lahir" required="required"> <br />
        tgl_lahir <input type="date" name="tgl_lahir" required="required"> <br />
        gender <select class="form-control" name="gender" required="">
            <option value=""></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select> <br />
        prodi <input type="text" name="prodi" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>