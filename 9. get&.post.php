<?php
// Ambil data dari method GET
var_dump($_GET);

$mahasiswa = [
    [
        "nama" => "vita",
        "nrp" => "0888666777",
        "email" => "devitaaja09@gmail.com",
        "jurusan" => "Reakayasa Perangkat Lunak",
        "gambar" => "foto1.jpg",
    ],
    [
        "nama" => "rara",
        "nrp" => "0099555444",
        "email" => "amaliaradisti50@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "foto2.jpg",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
</body>
</html>