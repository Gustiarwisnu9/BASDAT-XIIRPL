<html>
    <head>
        <title>tambah data buku</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="container">
        <h1>TAMBAH DATA BUKU</h1>
        <form action="proses.php" method="post">
            <label>ID Katalog</label>
            <br>
            <input type="number" name="id_katalog">
            <br>
            <label>Judul Buku</label>
            <br>
            <input type="text" name="judul_buku">
            <br>
            <label>Pengarang</label>
            <br>
            <input type="text" name="pengarang">
            <br>
            <label>Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit">
            <br>
            <label>Penerbit</label>
            <br>
            <input type="text" name="penerbit">
            <br>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
        </form>
        </div>
    </body>
</html>
