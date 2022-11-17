<?php 
//statis adalah mempertahankan nlai aslinya 

function test(){
   $yar = "Saya Adalah Siswa XII RPL"; //mendefinisikan variabel
    // variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
    //static mempertahankan nilainya diluar scope
    echo  "{$yar} <br> ";
    $yar++; //menambahkan fungsi increment
}

test();

?>