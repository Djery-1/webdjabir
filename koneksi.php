<?php
    $username = "root"; // Sesuaikan dengan user database Anda
    $password = ""; // Sesuaikan jika ada password
    $localhost = "localhost";
    try {
        $pdo = new PDO("mysql:host=$localhost;dbname=db_toko", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){ 
    die("Tidak Berhasil". $e->getMessage());
}
?>