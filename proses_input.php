<?php
// Koneksi ke MySQL Server
$host = 'localhost';
$user = 'root';
$password = '';
$db = '2106081_muhamadridwanf';

$koneksi = new mysqli($host, $user, $password, $db);

if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
}

// Menangkap data yang dikirim melalui formulir
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$jml_pinjaman = $_POST['jml_pinjaman'];

// Memasukkan data ke database
$query = "INSERT INTO pinjaman (nama, no_telp, alamat, jml_pinjaman) VALUES ('$nama', '$no_telp', '$alamat', '$jml_pinjaman')";

if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Menutup koneksi
$koneksi->close();
?>