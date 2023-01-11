<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <center>
        <h1 class="judul">Selamat Datang di Index</h1>
        <div class="kotak">
        <div class="kotak2">
        <h3>Halaman Anggota</h3>

        
        <!-- cek halaman apakah sudah login atau belum -->
        
        <?php
            session_start();
            if($_SESSION['status']!='login'){
                header("location:login.php?pesan=belum_login");
            }
            ?>
            
        <!-- END -->
        
        <h4>Welcome <?php 
        
        include '../koneksi_db.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'");
        foreach($anggota as $nama){
            echo $nama['nama'];
        }
        ?> anda telah login</h4>

        <button><a href="update-anggota.php?id_anggota=<?php  echo $nama['id_anggota']?>">Customize</a></button>
        
        <table border="1">
            <tr>
            <th>id_buku</th>
            <th>id katalog</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Aksi</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php
        include '../koneksi_db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
        
        ?>

        <td><a href="keranjang.php?id_buku=<?php echo $row['id_buku'] ?>">Add to Cart</a></td>
        
        <?php
        echo "</tr>";
        }
        ?>
        </table>
        <br>
        <a href="../logout.php">Logout</a>  
        </div>
        </center>
    </body>
</html>