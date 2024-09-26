<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFCD</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="myprofile.css">
</head>
<body>
<header>
    <nav>
        <div class="menu-toggle" id="menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navbar" id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="over.php">Over Ons</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li>
                <a href="myprofile.php">
                    <img src="images/profile.png" alt="My Profile" class="navbar-logo">
                </a>
            </li>
        </ul>
    </nav>
</header>
<footer>
        <p>&copy; 2024 NeedForCarDetailing.</p>
    </footer>

</body>
<script>
        const menuToggle = document.getElementById('menu-toggle');
        const navbar = document.getElementById('navbar');
    
        menuToggle.addEventListener('click', () => {
            navbar.classList.toggle('active');
        });
    </script>

</html>
