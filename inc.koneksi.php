<?php
$host           = "localhost";
$user           = "root";
$pass           = "";
$db             = "project1";

$koneksi        = mysqli_connect($host,$user,$pass,$db); 
if(!$koneksi){
    die("gagal terkoneksi");
}else{
    echo "Koneksi berhasil";
}
