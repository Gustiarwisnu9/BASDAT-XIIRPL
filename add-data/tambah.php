<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h1>Menambahkan Data</h1>
        <form action="proses.php" method="post">
            <label>Masukkan Nama</label>
            <input type="text" name="nama">
            <br>
            <label>Masukkan no telp</label>
            <input type="number" name="no_telp">
            <br>
            <label>Masukkan Alamat</label>
            <input type="text" name="alamat">
            <br>            
            <label>Masukkan Email</label>
            <input type="text" name="email">
            <br>
            <input type="submit" value="submit">
            <br>
            <input type="reset" value="cancel">
        </form>
    </body>
</html>