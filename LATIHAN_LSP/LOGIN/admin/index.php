<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <center>
        <h1 id="#">SELAMAT DATANG DI INDEX</h1>
        <h3>ADMIN PAGE</h3>
        
        <!-- cek halaman apakah sudah login atau belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }
        ?>
        <!-- end -->
        <h4>WELCOME <?php echo  $_SESSION['admin']?> ANDA TELAH LOGIN </h4>
        <div class="table">
            <h2>DATA BUKU</h2>
            <button><a href="add.php">Tambah Buku</a></button>
            <button><a href="add_anggota.php">Tambah Anggota</a></button>
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
                </div>
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
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td><a href="update.php?id_buku=<?php echo $row['id_buku'] ?>">EDIT</a>
            <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku'] ?>">HAPUS</a></td>
            <?php
        echo "</tr>";
    }
    ?>
    </table>
    <br>
    <button><a href="../logout.php">LOGOUT</a></button>
    </center>
</body>
</html>