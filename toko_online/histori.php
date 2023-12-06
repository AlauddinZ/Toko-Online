<?php 
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Histori - Toko Online</title>
    <style>
        header {
            background-color: #001f33; /* Dark header background color */
            padding: 15px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        nav a {
            color: #4da6ff; /* Navigation link color */
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            color: #007acc; /* Navigation link hover color */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #001f33; /* Dark background color */
            margin: 0;
            padding: 0;
            color: #fff; /* Text color */
        }

        h2 {
            text-align: center;
            color: #66d9ff; /* Highlight color for headings */
            margin-top: 30px;
        }

        .table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #002f4f; /* Slightly lighter background color */
        }

        .table th,
        .table td {
            border: 1px solid #446688; /* Border color */
            padding: 10px;
            text-align: left;
            color: #fff; /* Table text color */
        }

        .table th {
            background-color: #4da6ff; /* Header background color */
            color: #001f33; /* Header text color */
        }

        .table tbody td {
            background-color: #001f33; /* Table cell background color */
        }

        .table tbody td ol {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .table tbody td ol li {
            margin-bottom: 5px;
        }

        /* Tambahkan gaya tombol kembali jika diperlukan */
        .button_kembali {
            background-color: #ff4d4d; /* Button background color */
            color: #001f33; /* Button text color */
            padding: 8px 16px;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .button_kembali:hover {
            background-color: #ff1a1a; /* Button hover background color */
        }
    </style>
</head>
<body>
    <header>
        <h1 style="color: #66d9ff;">Toko Online</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="produk.php">Barang</a>
            <a href="histori.php">Histori</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <h2>Histori Belanja Di Toko Sheva</h2>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th><th>Tanggal Pembelian</th><th>Nama Barang</th>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_histori=mysqli_query($koneksi,"select * from transaksi order by id_transaksi desc");
            $no=0;
            while($dt_histori=mysqli_fetch_array($qry_histori)){
                $no++;
                $produk_dibeli="<ol>";
                $qry_produk=mysqli_query($koneksi,"select * from  detail_transaksi join produkk on produkk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");
                while($dt_produk=mysqli_fetch_array($qry_produk)){
                    $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
                }
                $produk_dibeli.="</ol>";
            ?>
                <tr>
                    <td><?=$no?></td><td><?=$dt_histori['tanggal_transaksi']?></td><td><?=$produk_dibeli?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>