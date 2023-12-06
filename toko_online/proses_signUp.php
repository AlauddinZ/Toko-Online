<?php
if ($_POST) {
    $nama_petugas = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $level = 'M';

    if(empty($nama_petugas)) {
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='signUp.php';</script>";
    }
    else if(empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='signUp.php';</script>";
    }
    else if(empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='signUp.php';</script>";
    }
    else if($password != $confirm_password) {
        echo "<script>alert('password tidak sama');location.href='signUp.php';</script>";
    }
    else if(empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='signUp.php';</script>";
    }
    else if(empty($telp)) {
        echo "<script>alert('telp tidak boleh kosong');location.href='signUp.php';</script>";
    }
    else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi, "insert into petugas (nama_petugas, username, password, level, alamat, telp) values ('".$nama_petugas."','".$username."','".md5($password)."','".$alamat."','".$telp."','".$level."')") or die(mysqli_error($koneksi));
        if($insert) {
            echo "<script>alert('Sukses sign-up');location.href='login.php';</script>";
        }
        else {
            echo "<script>alert('Gagal sign-up');location.href='signUp.php';</script>";
        }
    }
}
?>

