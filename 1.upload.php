<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Pilih file:</label>
        <input type="file" name="file" id="file" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/"; // Folder untuk menyimpan file
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah folder "uploads" ada, jika tidak, buat folder
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    // Periksa ukuran file (contoh: maksimum 5MB)
    // ... (kode untuk memeriksa ukuran file)

    // Periksa tipe file yang diunggah (contoh: hanya izinkan gambar)
    // ... (kode untuk memeriksa tipe file)

    // Jika semua pemeriksaan lolos, maka upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "File " . basename($_FILES["file"]["name"]) . " berhasil diupload.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
        }
    } else {
        echo "Upload tidak berhasil. Periksa kembali tipe file dan ukuran file.";
    }
}