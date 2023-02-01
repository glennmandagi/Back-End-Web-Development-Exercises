<?php

$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "Selamat datang Pak!";
    } else{
        echo "Selamat datang wahai Pemuda";
    }
} else{
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
}
?>