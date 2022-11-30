<?php
$files = $_FILES;
$folder_upload = "./assets/uploads";
 
// periksa apakah folder sudah ada 
if (!is_dir($folder_upload)){
    // jika tidak ada maka folder harus dibuat terlebih dahulu
    mkdir($folder_upload, 0777, $rekursif = true);
}

// simpan masing masing file ke dalam variabel
// simpan ke dalam array dan ubah menjadi objek
$fileFoto = (object) @$_FILES['foto'];
$filektp = (object) @$_FILES['ktp'];

// Mulai upload file 
$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);


$uploadFotoktpSukses = move_uploaded_file(
    $filektp->tmp_name, "{$folder_upload}/{$filektp->name}"
);

// menampilkan link file yang terupload

if ($uploadFotoSukses) {
    $link ="{$folder_upload}/{$fileFoto->name}";
    echo "Sukses Upload Foto : <a href = '{$link}'>{$fileFoto->name}</a>";
    echo "<br>";
}

if ($uploadFotoktpSukses) {
    $link ="{$folder_upload}/{$filektp->name}";
    echo "Sukses Upload ktp : <a href = '{$link}'>{$filektp->name}</a>";
    echo "<br>";
}

// batas ukuran file ukuran yang diupload 
if ($fileFoto->size > 1000 * 2000){
    die("File tidak boleh lebih dari 2MB");
}

// Jenis gambar apa yang bisa di upload 
if ($filektp->type !== 'image/jpg'){
    die("Foto Harus berformat jpg");
}



// echo "<pre>";
// print_r($files);
// echo "</pre>";

?>