<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact NFCD</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="contact.css">
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
        <section class="contact-section">
            <div class="contact-info">
                <h1>Contactgegevens</h1>
                <p><strong>Locatie:</strong> Regio Mechelen (Zie kaart)</p>
                <p><strong>Telefoon:</strong> +32 499 91 21 81</p>
                <p><strong>Email:</strong> <a href="mailto:needforcardetailing@gmail.com">needforcardetailing@gmail.com</a></p>
            </div>

            <div class="contact-info">
                <h2>Locatie</h2>
                <div class="location-container">
                    <img src="images/locatie.png" alt="Locatie" class="location-thumbnail" onclick="openLightbox()">
                </div>
            </div>

            <div class="contact-form">
                <h2>Stuur ons een bericht</h2>
                <form action="mailto:needforcardetailing@gmail.com" method="post" enctype="text/plain">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Bericht:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Verstuur</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Lightbox voor de afbeelding -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <img src="images/locatie.png" alt="Locatie Vergroot" class="lightbox-image">
    </div>

    <footer>
        <p>&copy; 2024 NeedForCarDetailing.</p>
    </footer>

    <script>
        // Toggle hamburger menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('navbar').classList.toggle('active');
        });

        // Open lightbox
        function openLightbox() {
            document.getElementById('lightbox').style.display = 'flex';
        }

        // Close lightbox
        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
        }
    </script>
</body>

</html>
