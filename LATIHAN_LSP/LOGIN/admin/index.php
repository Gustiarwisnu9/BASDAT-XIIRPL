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

        include '../koneksi_db.php';
        // ambil data semua dari table buku
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        
        // Jumlahkan data yang ada di table
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);

        ?>
        <!-- end -->
        <h4>WELCOME <?php echo  $_SESSION['admin']?> ANDA TELAH LOGIN </h4>
        <div class="table">
            <hr>
            <h2>DATA BUKU</h2>
            <h3>TOTAL BUKU TERSEDIA : <?php echo $jumlah_buku; ?></h3>
            <button><a href="add.php">Tambah Buku</a></button>
            <table border="1">
                
                <tr>
                    <th>id_buku</th>
                    <th>id katalog</th>
                    <th>judul</th>
                    <th>pengarang</th>
                    <th>tahun terbit</th>
                    <th>penerbit</th>
                    <th>Harga</th>
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
            echo "<td>".$harga = $row['harga']."</td>";
            ?>
            <td><a href="update.php?id_buku=<?php echo $row['id_buku'] ?>">EDIT</a>
            <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku'] ?>">HAPUS</a></td>
            <?php
        echo "</tr>";
    }
    ?>
    </table>
    <br>
    <h3>TOTAL HARGA :  
    <?php 
    $db = mysqli_query($koneksi, "SELECT * FROM buku");
    while($r = mysqli_fetch_array($db)){
        $totalharga[] = $r['harga'];
    }
    $total = array_sum($totalharga);
    echo "Rp. ".number_format($total)." ,-";
    ?>
    </h3>
    <hr>
        <h2>DATA ANGGOTA</h2>
        <h3>TOTAL ANGOTA TERSEDIA : <?php echo $jumlah_anggota; ?></h3>
         <button><a href="add_anggota.php">Tambah Anggota</a></button>
            <table border="1">
                
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                </div>
                <!-- menampilkan data buku -->
                <?php
        include '../koneksi_db.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        
        foreach ($anggota as $rou){
            echo "<tr>";
            echo "<td>". $rou['id_anggota']."</td>";
            echo "<td>". $rou['nama']."</td>";
            echo "<td>". $rou['no_telp']."</td>";
            echo "<td>". $rou['alamat']."</td>";
            echo "<td>". $rou['email']."</td>";
            echo "<td>". $rou['password']."</td>";
            ?>
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