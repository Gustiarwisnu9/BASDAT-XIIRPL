<html>
    <head>
        <title>UPDATE ANGGOTA</title>
    </head>
    <body>
       <div class="form">
           <h1>Customize Profile</h1>

           <?php
           include'../koneksi_db.php';
           // ambil dari tombol Customize   
           $id = $_GET['id_anggota'];
           $data = mysqli_query($koneksi, "select * from anggota where id_anggota = '$id'");
          //data yang sudah di cocokan dengan id_buku, di MELEDAK menggunakan fetch array sehingga bisa di taro satu satu di formnya
           while($meledak = mysqli_fetch_array($data)){
           ?>

           <form action="proses-update.php" method="post">
            <!-- ID ANGGOTA -->
            <input type="hidden" name="id" id="id" value="<?php echo $meledak['id_anggota']; ?>">
            <!-- ID ANGGOTA -->
            <table style="width: 10px;">
            <div class="tambah">
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $meledak['nama']; ?>">
            <br>
            <br>
            <label>No Telepon</label>
            <input type="number" name="no_telp" value="<?php echo $meledak['no_telp']; ?>">
            <br>
            <br>
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo $meledak['alamat']; ?>">
            <br>
            <br>
            <br>
            <label>Password</label>
            <input type="text" name="pass" value="<?php echo $meledak['password']; ?>" disabled>
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
