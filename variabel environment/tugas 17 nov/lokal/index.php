<?php 

//variabel lokal hanya isi di akses dari scope dimana dia di definisikan 
$nama = " dan desain";


function halodunia (){
    $nama = "Saya bisa coding";
    echo $nama;
}


halodunia(); //objek
echo $nama;

?>