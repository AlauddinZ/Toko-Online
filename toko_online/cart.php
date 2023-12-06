<?php 
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Buku di Keranjang - Toko Online</title>
    <style>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #fff; /* Table text color */
        }

        th, td {
            border: 1px solid #446688; /* Border color */
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4da6ff; /* Header background color */
            color: #001f33; /* Header text color */
        }

        td {
            background-color: #001f33; /* Table cell background color */
            color: #99aabb; /* Table cell text color */
        }

        .btn-danger {
            background-color: #ff4d4d; /* Button background color */
            color: #001f33; /* Button text color */
            padding: 8px 16px;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-danger:hover {
            background-color: #ff1a1a; /* Button hover background color */
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

        .center {
            padding: 20px 0px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Daftar Barang di Keranjang</h2>
    <table>
        <thead>
            <tr>
                <th>NO</th><th>Nama Produk</th><th>Jumlah Barang</th><th>Total</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['cart'] as $key_produk => $val_produk): ?>
                <tr>
                    <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_produk']?></td><td><?=$val_produk['qty']?></td><td><?=$val_produk['subtotal']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="center">
        <a href="checkout.php" class="btn btn-primary">Check Out</a>
        <a href="produk.php" class="btn btn-primary">Tambah Produk</a>
    </div>
</body>
</html>