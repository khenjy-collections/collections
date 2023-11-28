<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "college_3_pweb_inventory";

$db = mysqli_connect($host, $user, $pass, $database);

if (!$db) {
    echo "Koneksi ke Database Gagal/Database tidak ditemukan";
} else {
    echo "Koneksi Berhasil";
}
