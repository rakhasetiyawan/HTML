<?php

$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "project1"; 

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = "INSERT INTO input (nama_depan, nama_belakang, password, email)
        VALUES ('$nama_depan', '$nama_belakang', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
