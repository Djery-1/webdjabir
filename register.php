<?php
// Koneksi ke database
$host = 'localhost';
$db   = 'db_toko';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    // Enkripsi password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data ke database
    $stmt = $pdo->prepare('INSERT INTO tb_admin (username, password, nama) VALUES (?, ?, ?)');
    $stmt->execute([$username, $hashedPassword, $nama]);

    echo "Registrasi berhasil! <a href='login.html'>Login di sini</a>.";
}
?>