<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        $qry_get_produk=mysqli_query($koneksi,"select * from produkk where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);

        $subtotal = $_POST['qty'] * $dt_produk['harga'];

        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_produk['id_produk'],
            'nama_produk'=>$dt_produk['nama_produk'],
            'qty'=>$_POST['qty'],
            'subtotal'=> $subtotal
        );
    }
    header('location: cart.php');
?>