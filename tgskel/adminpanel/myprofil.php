<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
           
        }
*{
    outline: none;
  border: none;
  text-decoration: none;
}
        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .footer {
            padding: 20px 0;
            background-color: #08a0e9;
        }

        .profile-info {
            margin-top: 15px;
            padding: 20px;
            background-color: #fff;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
        }

        .profile-info h2 {
            margin-top: 15px;
        }

        .profile-info p {
            font-size: 1rem;
        }

        .project-section {
            margin-top: 40px;
        }

        .project-section h3 {
            font-weight: 600;
        }

        footer {
            padding: 10px 0;
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
            border: none;
            list-style-type: none;
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
    </style>
</head>

<body>

    <!-- Navbar -->
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
                <a class="navlink" href="#contact">Contact</a>
            </li>
            <li class="navitem">
                <a class="navlink" href="myprofile.php">My Profile</a>
            </li>
            <li class="navitem">
                <a class="navlink" href="login.php">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Profile Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="images/2.jpg" class="img-fluid rounded-circle profile-pic" alt="Fitrah Maulana Malik">
                <div class="profile-info">
                    <h2>Fitrah Maulana Malik</h2>
                    <p>As a developer, I am focused on creating dynamic and efficient web applications. Currently, I am
                        working on the web pembersih kain project.</p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="images/3.jpg" class="img-fluid rounded-circle profile-pic" alt="Muhammad Akbar Imamulhaq">
                <div class="profile-info">
                    <h2>Muhammad Akbar Imamulhaq</h2>
                    <p>As the mastermind behind our projects, I focus on the business and marketing strategies.
                        Currently, I am working on selling pembersih kain products.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section -->
    <div class="container project-section ">
        <h3 class="text-center">Our Project</h3>
        <p class="text-center profile-info">We're developing a web pembersih kain, which is an ongoing project. Fitrah
            is the main programmer and Akbar is handling the sales of the pembersih kain.</p>
        <p class="text-center profile-info">Thanks to Dosen Aan Risdiana M.Kom for teaching and guiding us.</p>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Fitrah Maulana Malik & Muhammad Akbar Imanulhaq</p>
        </div>
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