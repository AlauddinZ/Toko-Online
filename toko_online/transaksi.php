<?php 
    include "koneksi.php";
    $qry_detail_produk=mysqli_query($koneksi,"select * from produkk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<?php 
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction - Toko Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #001f33; /* Dark background color */
            margin: 0;
            padding: 0;
            color: #fff; /* Text color */
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #002f4f; /* Slightly lighter background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #66d9ff; /* Highlight color for headings */
        }

        .product-details {
            text-align: center;
            margin-bottom: 20px;
        }

        .product-details img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #99aabb; /* Label text color */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #446688; /* Input border color */
            border-radius: 4px;
            background-color: #001f33; /* Dark input background color */
            color: #99aabb; /* Input text color */
        }

        button {
            background-color: #4da6ff; /* Button background color */
            color: #001f33; /* Button text color */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #007acc; /* Button hover background color */
        }
    </style>
</head>
<body>
    <form action="proses_transaksi.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
        <div class="container">
            <h2>Transaction Details</h2>
            <div class="product-details">
                <img src="foto/<?=$dt_produk['foro_produk']?>" alt="Purchased Product Image">
            </div>
            <label for="nama_produk">Nama Produk :</label>
            <?=$dt_produk['nama_produk']?>
            <br><br>
            <label for="deskripsi">Deskripsi :</label>
            <?=$dt_produk['deskripsi']?>
            <br><br>
            <label for="harga">Harga :</label>
            <?=$dt_produk['harga']?>
            <br><br>
            <label for="qty">Jumlah Barang :</label>
            <input type="number" id="qty" name="qty" required>

            <button type="submit">Complete Transaction</button>
        </div>
    </form>
</body>
</html>