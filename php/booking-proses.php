<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $where = $_POST['where'];
    $number = $_POST['number'];
    $arrival = $_POST['arrival'];
    $leave = $_POST['leaving'];
    $data = "Tujuan : " . $where . "\nJumlah : " . $number . "\nArrival : " . $arrival . "\nLeave : " . $leave . "\n-------------------------------------------------------\n";
    $file = '../txt/bookingdatabase.txt';

    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        $message = "DATA BERHASIL DISIMPAN";
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