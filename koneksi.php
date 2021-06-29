<?php

$server ="localhost"; //local server / host
$user ="root"; //user pada database
$password =""; //password (isi jika database di password)
$database = "materi_web2"; //nama dari database di phpmyadmin

//buat variabel  $conet untuk memudahkan pemanggilan koneksi
$conect = mysqli_connect($server,$user,$password,$database) or die("Error Connection!");
//buat ujicoba koneksi berhasil 
if(!conect){ //jika tidak koneksi,
     echo "koneksi error"; //munculkan tampilan koneksi error 
}
//jika blank maka koneksi berhasil
?>
