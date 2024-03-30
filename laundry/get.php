<?php
require("koneksi.php");

$response = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        
        $perintah = "DELETE FROM tbl_laundry WHERE id = $id";
        $eksekusi = mysqli_query($koneksi, $perintah);
        $cek = mysqli_affected_rows($koneksi);
        
        if ($cek > 0) {
            $response["kode"] = 1;
            $response["pesan"] = "Data Tersedia";
            $response["data"] = array();

            while ($ambil = mysqli_fetch_object($eksekusi)){
                $F["id"] = $ambil->id;
                $F["nama"] = $ambil->nama;
                $F["alamat"] = $ambil->alamat;
                $F["telepon"] = $ambil->telepon;
                array_push($response["data"], $F);
            }
        } else {
            $response["kode"] = 0;
            $response["pesan"] = "Gagal Menghapus Data";
        }
    } else {
        $response["kode"] = 0;
        $response["pesan"] = "Parameter id tidak diterima";
    }
} else {
    $response["kode"] = 0;
    $response["pesan"] = "Metode Request Salah";
}

echo json_encode($response);
?>
