<?php 

//variabel lokal hanya isi di akses dari scope dimana dia di definisikan 
$nama = "guanteng bingitsz";


function halodunia (){
    $nama = "Pak Saiful";
    echo $nama;
}


halodunia(); //objek
echo $nama;

?>