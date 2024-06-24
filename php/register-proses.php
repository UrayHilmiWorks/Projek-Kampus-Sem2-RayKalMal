<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $data = "\nNama: " . $name . "\nEmail: " . $email . "\nPassword: " . $password . "\nConfirm Password : " . $password2 . "\n------------------------------------------------\n";
    $file = '../txt/register.txt';
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        $message = "Data Pendaftar Disimpan";
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