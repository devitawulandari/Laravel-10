<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nama_database";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pengaturan 1  pagination
$limit = 10; // Jumlah data per halaman

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit;

// Query untuk mengambil data dengan pagination
$sql = "SELECT * FROM tabel_data LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

?>