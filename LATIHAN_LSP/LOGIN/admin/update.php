<html>
    <head>
        <title>EDIT DATA BUKU</title>
        <style>

            body {
                text-align: center;
                justify-content: center;
                align-items: center;
                margin:230px;
            }

            h1 {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
       <div class="form">
           <h1>EDIT DATA BUKU</h1>

           <?php
           include'../koneksi_db.php';
           $id_buku = $_GET['id_buku'];
           $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
          //data yang sudah di cocokan dengan id_buku, di MELEDAK menggunakan fetch array sehingga bisa di taro satu satu di formnya
           while($meledak = mysqli_fetch_array($data)){
           ?>

           <form action="proses-update.php" method="post">
            <!-- ID BUKU -->
            <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku']; ?>">
            <!-- ID BUKU -->
            <table style="width: 10px;">
            <div class="tambah">
            <label>ID Katalog</label>
            <br>
            <input type="number" name="id_katalog" >
            <br>
            <label>Judul Buku</label>
            <br>
            <input type="text" name="judul_buku" value="<?php echo $meledak['judul_buku']; ?>">
            <br>
            <label>Pengarang</label>
            <br>
            <input type="text" name="pengarang" value="<?php echo $meledak['pengarang']; ?>">
            <br>
            <label>Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit" value="<?php echo $meledak['thn_terbit']; ?>">
            <br>
            <label>Penerbit</label>
            <br>
            <input type="text" name="penerbit" value="<?php echo $meledak['penerbit']; ?>">
            <br>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            </div>
            </table>
        </form>
        <?php
           }
        ?>
        </div>
        </form>
    </body>
</html>
