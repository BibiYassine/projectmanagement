<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over NFCD</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="over.css">
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

    <main>
        <section class="about-section">
            <div class="about-content">
                <img src="images/over.png" alt="NFCD Detail Service" class="about-image">
                <div class="text-content">
                    <h1>Waarom NFCD?</h1>
                    <p>Bij NFCD zijn we toegewijd aan het leveren van de hoogste kwaliteit dieptereiniging en detailing voor uw voertuig. Onze motiverende detailers gebruiken alleen de beste producten en technieken om ervoor te zorgen dat uw auto er als nieuw uitziet.</p>
                    <p>Onze dieptereinigingsdiensten zijn ontworpen om elk detail van uw voertuig grondig te reinigen, van het interieur tot het exterieur. Wij begrijpen dat uw auto een waardevol bezit is en behandelen elk voertuig met de grootste zorg en aandacht.</p>
                    <p>Onze detailing diensten zorgen ervoor dat elk aspect van uw auto wordt verzorgd, van interieur tot het exterieur. We gebruiken geavanceerde methoden en hoogwaardige producten om ervoor te zorgen dat uw voertuig in topconditie blijft.</p>
                    <p>NFCD is de juiste keuze voor iedereen die streeft naar perfectie en een langdurig resultaat. Kies voor ons en ervaar de kunst van dieptereiniging en detailing zoals nooit tevoren.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 NeedForCarDetailing.</p>
    </footer>
    
    <script>
        // JavaScript voor hamburger menu
        const menuToggle = document.getElementById('menu-toggle');
        const navbar = document.getElementById('navbar');

        menuToggle.addEventListener('click', () => {
            navbar.classList.toggle('active');
        });
    </script>
</body>
</html>
