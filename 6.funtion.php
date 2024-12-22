<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latian Funtion</title>
</head>
<body>
    <h1>
        <?php echo salam("Datang", "Devita"); ?>
    </h1>
 <body>
</html>