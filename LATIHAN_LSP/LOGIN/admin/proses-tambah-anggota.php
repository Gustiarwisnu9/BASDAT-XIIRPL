<?php
// include koneksi
include '../koneksi_db.php';

// menangkap data yang ada di form
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

// menginput database
$input = mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','$password')");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil ditambahkan');
        window.location = "index.php";
    </script>
    <?php
}else{
    ?>
    <script>
         alert('data gagal ditambahkan');
        window.location = "index.php";
    </script>
    <?php
}

// mengalhkan ke tampilan awal yah
header("location:index.php"); 
?>