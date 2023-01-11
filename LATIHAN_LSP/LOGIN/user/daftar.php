<html>
    <head>
        <title>Register</title>
    </head>
    <center>
    <body>
        <div class="container">
        <h1>Register your account</h1>

        <form action="../admin/proses-tambah-anggota.php" method="post">
            <label>Nama</label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>No Telepon</label>
            <br>
            <input type="number" name="no_telp">
            <br>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat">
            <br>
            <label>Email</label>
            <br>
            <input type="text" name="email">
            <br>
            <label>Password</label>
            <br>
            <input type="text" name="password">
            <br>
            </br>
            <input type="submit" value="submit">
            <td>
            </td>
             <input type="reset" value="cancel">
        </form>
        </div>
        </center>
    </body>
</html>
