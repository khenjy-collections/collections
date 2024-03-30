<?php
require("koneksi.php");

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["nama"]) && isset($_POST["alamat"]) && isset($_POST["telepon"])) {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
        
        $perintah = "INSERT INTO tbl_laundry (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
        $eksekusi = mysqli_query($koneksi, $perintah);
        
        if ($eksekusi) {
            $response["kode"] = 1;
            $response["pesan"] = "Data Berhasil Ditambahkan";
        } else {
            $response["kode"] = 0;
            $response["pesan"] = "Gagal Menambahkan Data";
        }
    } else {
        $response["kode"] = 0;
        $response["pesan"] = "Data tidak lengkap";
    }
} else {
    $response["kode"] = 0;
    $response["pesan"] = "Metode request tidak valid";
}

echo json_encode($response);
mysqli_close($koneksi);
?>
