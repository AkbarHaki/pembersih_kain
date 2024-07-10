<?php
include('config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembersih Kain</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 10px 20px;
        }
        .navbar-brand i {
            color: #08a0e9;
            font-size: 2rem;
        }
        .navbarnav {
            list-style: none;
            padding: 0;
            display: flex;
            margin: 0;
        }
        .navitem {
            margin-left: 15px;
        }
        .navlink {
            text-decoration: none;
            color: #000;
            font-weight: 600;
        }
        .navbartoggler {
            display: none;
            font-size: 1.5rem;
            background: none;
            border: none;
        }
        .navbar-brand i {
            color: #08a0e9;
            font-size: 2rem;
        }
        @media (max-width: 768px) {
            .navbarnav {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
            }
            .navbarnav.show {
                display: flex;
            }
            .navbartoggler {
                display: block;
            }
        }
        #about {
            text-align: center;
            margin-bottom: 50px;
        }
        #about h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        #products .card {
            margin-bottom: 30px;
        }
        #products .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #08a0e9;
            padding: 10px 0;
        }
        .navbar-nav .nav-link {
            font-weight: 600;
        }
        .card-title {
            font-weight: 600;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .txth2 {
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
<nav class="navbar">
        <a class="navbar-brand" href="index.php"><i class="fas fa-handshake"></i></a>
        <button class="navbartoggler" type="button" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="navbarnav" id="navbarNav">
            <li class="navitem">
                <a class="navlink" href="#about">About</a>
            </li>
            <li class="navitem">
                <a class="navlink" href="#products">Products</a>
            </li>
            <li class="navitem">
                <a class="navlink" href="https://wa.me/081937736753">Contact</a>
            </li>
            <li class="navitem">
                <a class="navlink" href="myprofil.php">My Profile</a>
            </li>
            <li class="navitem">
                <a class="navlink" href="login.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        <section id="about">
            <h1>Unitop Fast Cleaner</h1>
            <p>Unitop Fast Cleaner efektif menghilangkan noda membandel tanpa merusak serat pakaian dan warna karena formula tidak mengandung Klorin. Gunakan selalu Unitop Fast Cleaner bersama deterjen pilihan anda.</p>
        </section>

        <section id="products" class="mt-5">
            <h2 class="txth2">Products</h2>
            <div class="row">
                <?php 
                $prices = [75000, 100000, 150000];
                $index = 0;
                while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="images/1.jpg" alt="<?= $row['name'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['name'] ?></h5>
                                <p class="card-text"><?= $row['description'] ?></p>
                                <p class="card-text"><strong>Price: Rp<?= number_format($prices[$index % 3], 0, ',', '.') ?></strong></p>
                                <a href="checkout.php?product_id=<?= $row['id'] ?>" class="btn btn-primary">Checkout</a>
                            </div>
                        </div>
                    </div>
                <?php 
                $index++;
                endwhile; ?>
            </div>
        </section>
    </div>

    <footer class="text-center">
        <p>© 2024 Unitop Fast Cleaner</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function toggleMenu() {
            var navbar = document.getElementById('navbarNav');
            if (navbar.classList.contains('show')) {
                navbar.classList.remove('show');
            } else {
                navbar.classList.add('show');
            }
        }
    </script>
</body>
</html>
