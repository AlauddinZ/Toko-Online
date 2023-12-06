<?php 
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home - Toko Online</title>
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

        p {
            color: #99aabb; /* Paragraph text color */
        }

        .product {
            background-color: #001f33; /* Dark product background color */
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .product h3 {
            color: #4da6ff; /* Product title color */
        }

        .product p {
            color: #99aabb; /* Product description color */
        }

        a {
            color: #4da6ff; /* Link color */
        }

        a:hover {
            color: #007acc; /* Link hover color */
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
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Toko Online!</h1>
            <p class="lead">Explore our amazing products and enjoy a seamless shopping experience.</p>
            <hr class="my-4">
            <p>Sign in to start shopping or sign up to become a member.</p>
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="signup.php" role="button">Sign Up</a>
        </div>

        <h3>Featured Products</h3>

        <div class="row">
            <div class="col-md-4 product">
                <img src="../toko_online/foto/Hand Bag (contoh).jpg" alt="Hand Bag" width="500px">
                <div class="product-description">
                    <h4>Hand Bag Blacky</h4>
                    <p>Tas yang dibalut dengan kulit hewan purba Leviathan dengan campuran minuman marjan.</p>
                </div>
            </div>

            <div class="col-md-4 product">
                <img src="../toko_online/foto/Sepatu Jordan (contoh).jpg" alt="Shoes" width="500px">
                <div class="product-description">
                    <h4>Jordan Shoes</h4>
                    <p>Sepatu anti kepleset dan anti badai. Dapat digunakan untuk keperluan lomba estafet ataupun lari karena adanya boost tambahan.</p>
                </div>
            </div>

            <div class="col-md-4 product">
                <img src="../toko_online/foto/Topi New York White (contoh).jpg" alt="Product 3" width="500px">
                <div class="product-description">
                    <h4>New York Hat</h4>
                    <p>Topi dengan campuran antara minyak zaitun dengan minyak kayu putih. Produk ini di desain agar saat bersepeda tidak mudah retak dibagian tengkorak.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>