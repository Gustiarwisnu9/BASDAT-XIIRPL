<?php 
// global
require 'global.php';

// statis
function statis(){
    static $var = " saya adalah siswa XII RPL";
    echo $var;
    $var++;
}
statis();

//lokal
$skill = " desain";
function lokal(){
    $skill = " saya bisa coding dan";
    echo "$skill";
}
lokal();
echo $skill;

?>