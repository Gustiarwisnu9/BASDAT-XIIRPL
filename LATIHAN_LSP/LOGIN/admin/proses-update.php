<?php
// include koneksi
include '../koneksi_db.php';

// menangkap data yang ada di form
$id_buku = $_POST['id_buku'];
$katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

// menginput database
$input = mysqli_query($koneksi, "update buku set id_katalog='$katalog', judul_buku='$judul_buku', pengarang='$pengarang', thn_terbit='$thn_terbit', penerbit='$penerbit' where id_buku='$id_buku'");

// Mengembalikan ke halaman awal
if ($input) {
?>
    <script>
        alert('data berhasil Dirubah!!');
        window.location = "index.php";
    </script>
    }else{
    <script>
        alert('data gagal Dirubah');
        window.location = "index.php";
    </script>
<?php
}
?>