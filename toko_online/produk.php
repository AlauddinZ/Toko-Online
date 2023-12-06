<?php 
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products - Toko Online</title>
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

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .col-md-3 {
            width: 23%;
            margin: 10px;
        }

        .card {
            border: 1px solid #446688; /* Border color */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #446688; /* Border color */
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            color: #fff; /* Text color */
            margin-bottom: 10px;
        }

        .card-text {
            color: #99aabb; /* Text color */
        }

        .btn-primary {
            background-color: #4da6ff; /* Button background color */
            color: #001f33; /* Button text color */
            padding: 8px 16px;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #007acc; /* Button hover background color */
        }
    </style>
</head>
<body>
    <header>
        <h1 style="color: #66d9ff;">Daftar Produk</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="produk.php">Barang</a>
            <a href="histori.php">Histori</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="row">
        <?php 
        include "koneksi.php";
        $qry_produk=mysqli_query($koneksi,"select * from produkk");
        while($dt_produk=mysqli_fetch_array($qry_produk)){
            ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="foto/<?=$dt_produk['foro_produk']?>" width="400px">
                    <div class="card-body">
                        <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                        <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>
                        <a href="transaksi.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>