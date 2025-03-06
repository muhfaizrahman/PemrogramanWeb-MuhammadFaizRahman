<?php 
include "session.php"; // kode dalam session.php akan dieksekusi seolah olah ada di page ini

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['tempat-lahir'] = $_POST['tempat-lahir'];
    $_SESSION['tanggal-lahir'] = $_POST['tanggal-lahir'];
    $_SESSION['pendidikan'] = $_POST['pendidikan'];

    header("Location: cv.php");
    exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main style="justify-content: center;">
        <h2>Isi Data CV</h2>
        <form action="" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br>

            <label for="tempat-lahir">Tempat Lahir:</label>
            <input type="text" name="tempat-lahir" id="tempat-lahir" required><br>

            <label for="tanggal-lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal-lahir" id="tanggal-lahir" required><br>

            <label for="pendidikan">Riwayat Pendidikan:</label>
            <input type="text" name="pendidikan" id="pendidikan" required><br>

            <button type="submit">Simpan</button>
        </form>
    </main>
    
</body>
</html>