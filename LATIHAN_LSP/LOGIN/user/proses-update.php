<?php
// include koneksi
include '../koneksi_db.php';

// variabel yang menyambungkan dari update ke mysqli query
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

// menginput database
$input = mysqli_query($koneksi, "UPDATE anggota set nama='$nama', no_telp='$no_telp', alamat='$alamat' WHERE id_anggota='$id'");

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