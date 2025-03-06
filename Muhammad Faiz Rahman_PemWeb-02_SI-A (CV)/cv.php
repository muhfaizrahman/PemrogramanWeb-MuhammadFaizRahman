<?php 
include "session.php"; // kode dalam session.php akan dieksekusi seolah olah ada di page ini

$nama = $_SESSION['nama'] ?? '-';
$tempatLahir = $_SESSION['tempat-lahir'] ?? '-';
$tanggalLahir = $_SESSION['tanggal-lahir'] ?? '-';
$pendidikan = $_SESSION['pendidikan'] ?? '-';
$email = $_SESSION['user-email'];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil CV</title>
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
      <main>
         <h2>Hasil CV</h2>
         <div id="cv">
            <div class="row">
               <strong>Nama:</strong> <span><?= $nama ?></span>
            </div>
            <div class="row">
               <strong>Tempat Lahir:</strong> <span><?= $tempatLahir ?></span>
            </div>
            <div class="row">
               <strong>Tanggal Lahir:</strong> <span><?= $tanggalLahir ?></span>
            </div>
            <div class="row">
               <strong>Riwayat Pendidikan:</strong> <span><?= $pendidikan ?></span>
            </div>
            <div class="row">
               <strong>Email:</strong> <span><?= $email ?></span>
            </div>
         </div>
         <button id="btn-logout"><a id="logout" href="logout.php">Log Out</a></button>
      </main>

 </body>
 </html>