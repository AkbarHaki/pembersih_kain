<?php
include('config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO orders (user_id, product_id, name, email, quantity) VALUES ('$user_id', '$product_id', '$name', '$email', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        header("Location: https://wa.me/081937736753");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

$product_id = $_GET['product_id'];
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
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
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 255, 0.1);
            margin-top: 50px;
        }
        .blue{
           color: #08a0e9;

        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .form-group label {
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


    <div class="container">
        <h2>Checkout</h2>
        <form method="post" action="">
            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Proceed to Checkout</button>
        </form>
    </div>

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
