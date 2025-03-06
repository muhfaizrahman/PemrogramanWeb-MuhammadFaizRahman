<?php 
session_start(); // Memulai atau melanjutkan session agar bisa menggunakan $_SESSION.
if (isset($_SESSION['user-email'])) { 
    header("Location: form.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") { // $_SERVER menyimpan informasi server dan request dari browser | metode http request yang digunakan adalah POST
    $email = $_POST['email']; // Ngambil nilai dari input form dengan name="email"
    $password = $_POST['password'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // filter_var = memfilter/validasi input | param 1 = data yg ingin difilter/dicek, param 2 = jenis filter yang digunakan | FILTER_VALIDATE_EMAIL = filter untuk email bawaan dari php
        list(, $domain) = explode('@', $email); // list() = membongkar array jadi variabel terpisah | param 1 = , (kosong) karena gak dipake dan gak disimpen, param 2 = $domain = variabel yang bakal disimpan. explode() = membagi string menjadi array | param 1 = '@' = pemisah, param 2 = $email -> string yang akan dipecah. | Contoh: nama@gmail.com -> ["nama", "gmail.com"] 

        if ($password === $domain) {
            $_SESSION['user-email'] = $email; // $_SESSION = variabel global yang bisa disimpan dan diakses di semua halaman (disimpan di server) | param 1 = 'user-email' = nama variabel yang disimpan, yang mana value dari user-email = $email
            header("Location: form.php"); // Mengirim header HTTP ke browser | (Salah satu fungsinya) Mengalihkan / redirect pengguna ke halaman lain, dalam hal ini ke form.php
            exit(); // Wajib ditambahkan setelah header() agar kode setelah header berhenti dijalankan
        } else {
            $error = "Password salah! Gunakan domain dari email sebagai password.";
        }
    } else {
        $error = "Format email tidak valid!";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h2>Login Page</h2>
        <form action="" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            
            <button type="submit">Login</button>
        </form>
        <?php if(isset($error)) echo "<p style ='color:red; text-align: center; margin-block: 50px'>$error</p>"; ?>
    </main>
        
</body>
</html>