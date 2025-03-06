<?php 
session_start();
if (!isset($_SESSION['user-email'])) { // isset() buat ngecek apakah parameter sudah didefinisikan atau isinya BUKAN null -> outputnya true/false
    header("Location: index.php");
    exit();
} ?>