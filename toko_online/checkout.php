<?php 
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    
    if (count($cart) > 0) {
        $lama_kurir=2; //satuan hari
        $tgl_sampai=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_kurir),date('Y')));
        mysqli_query($koneksi,"insert into transaksi (id_petugas, tanggal_transaksi, tanggal_sampai) value('".$_SESSION['id_petugas']."','".date('Y-m-d')."','".$tgl_sampai."')");
        $id=mysqli_insert_id($koneksi);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($koneksi,"insert into detail_transaksi (id_transaksi, id_produk, qty, subtotal) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."', '".$val_produk['subtotal']."')");
        }

        unset($_SESSION['cart']);
        echo '<script>alert("Transaksi berhasil");location.href="histori.php"</script>';
    }
?>