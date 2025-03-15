<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"], $_POST['nama'], $_POST['tempat-lahir'], $_POST['tanggal-lahir'], $_POST['pendidikan'])) {
    // Input handling
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['tempat-lahir'] = $_POST['tempat-lahir'];
    $_SESSION['tanggal-lahir'] = $_POST['tanggal-lahir'];
    $_SESSION['pendidikan'] = $_POST['pendidikan'];

    // Input handling file
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["photo"]["name"]);
    $target_file = $target_dir . uniqid() . "_" . $file_name;
    $upload_ok = true;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi tipe file
    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if(!in_array($image_file_type, $allowed_types)) {
        echo "Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
        $upload_ok = false;
    }

    // Pindahkan file jika valid
    if ($upload_ok && move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) { // Memindahkan file ke folder uploads/ (Lokasi sementara file yang diupload)
        $_SESSION['photo'] = $target_file; // Simpan path di session agar bisa diakses di cv.php
        header("Location: cv.php");
        exit();
    } else {
        echo "UPLOAD GAGAL!";
    }
}
?>