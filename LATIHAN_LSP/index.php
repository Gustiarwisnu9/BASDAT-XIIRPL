<html>
    <head>
        <title>show data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="databuku">
        <h1>DATA BUKU</h1>
        <button><a href="add.php">Tambah Buku</a></button>
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
        include 'koneksi.php';
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
            <td><a href="proses.php?id_buku=<?php echo $row['id_buku'] ?>">Hapus</a></td>
            <?php
        echo "</tr>";
        }
        ?>
    </body>
    </html>