<?php 
include "session.php"; 

$nama = $_SESSION['nama'] ?? '-';
$tempatLahir = $_SESSION['tempat-lahir'] ?? '-';
$tanggalLahir = $_SESSION['tanggal-lahir'] ?? '-';
$pendidikan = $_SESSION['pendidikan'] ?? '-';
$email = $_SESSION['user-email'];
$photo = $_SESSION["photo"] ?? "default.jpg";

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
      <main id="main-cv">
         <h2>Hasil CV</h2>
         <div id="cv">
            <div class="profile">
               <img src="<?php echo $photo; ?>" alt="Foto CV" width="150">
            </div>
            <strong>Nama:</strong> 
            <div class="kotak">
               <span><?= $nama ?></span>
            </div>
            <strong>Tempat Lahir:</strong> 
            <div class="kotak">
               <span><?= $tempatLahir ?></span>
            </div>
            <strong>Tanggal Lahir:</strong> 
            <div class="kotak">
               <span><?= $tanggalLahir ?></span>
            </div>
            <strong>Riwayat Pendidikan:</strong> 
            <div class="kotak">
               <span><?= $pendidikan ?></span>
            </div>
            <strong>Email:</strong> 
            <div class="kotak">
               <span><?= $email ?></span>
            </div>
         </div>
         <button id="btn-logout"><a id="logout" href="logout.php">Log Out</a></button>
      </main>

 </body>
 </html>