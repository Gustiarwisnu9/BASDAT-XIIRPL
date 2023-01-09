<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <center>
        <h1>Selamat Datang Di Index</h1>
        <h3>Halaman Anggota</h3>

        <!-- cek halaman apakah sudah login atau belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <h4>Welcome <?php
         include '../koneksi_db.php';
         $email = $_SESSION['email'];
         $anggota = mysqli_query($koneksi, "select * from anggota where email = '$email'" );
         foreach($anggota as $nama){
            echo $nama ['nama'];
         }
         ?> anda telah login </h4>

         <!-- end -->
        <html>
    <head>
        <title>show data</title>
    </head>
        <div class="databuku">
        <h1>DATA BUKU</h1>
        <table border="1">
                
            <tr>
            <th>id_buku</th>
            <th>id katalog</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
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
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
    <br>
        <a href="../logout.php">LOGOUT</a>
        </center>
    </body>
</html>