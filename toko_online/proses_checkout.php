<?php
session_start();
include "koneksi.php";

// ... (proses validasi dan perhitungan total)

// Simpan data pembelian ke dalam database
$id_siswa = $_SESSION['user_id']; // Sesuaikan dengan kolom yang sesuai
$tgl_pembelian = date('Y-m-d H:i:s');
$total_pembelian = $total; // Sesuaikan dengan variabel total yang sesuai

mysqli_query($koneksi, "INSERT INTO pembelian (id_siswa, tgl_pembelian, total_pembelian) VALUES ('$id_siswa', '$tgl_pembelian', '$total_pembelian')");

// Simpan detail pembelian ke dalam database
$id_pembelian = mysqli_insert_id($koneksi);

foreach ($_SESSION['cart'] as $val_produk) {
    $id_produk = $val_produk['id_produk'];
    $qty = $val_produk['qty'];
    $subtotal = $val_produk['subtotal'];

    mysqli_query($koneksi, "INSERT INTO detail_pembelian (id_pembelian, id_produk, qty, subtotal) VALUES ('$id_pembelian', '$id_produk', '$qty', '$subtotal')");
}

// Hapus data keranjang setelah checkout
unset($_SESSION['cart']);

header('location: histori.php');
?>