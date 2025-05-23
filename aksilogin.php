<?php
include "inc_koneksi.php";

// Ambil data dari form secara aman
$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

// Buat prepared statement untuk hindari SQL injection
$stmt = mysqli_prepare($koneksi, "SELECT * FROM login1 WHERE username = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    echo '<script language="javascript">
            alert("Username dan Password Salah! Silakan Login Kembali");
            document.location="login.php";
          </script>';
} else {
    echo '<script language="javascript">
            alert("Anda Berhasil Login");
            document.location="input.php";
          </script>';
}

// Tutup statement dan koneksi (opsional tapi baik)
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
