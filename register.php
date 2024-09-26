<?php
session_start();
include 'db.php'; // Verbind met de database

if (isset($_POST['submit'])) {
    $naam = $_POST['naam'];
    $voornaam = $_POST['voornaam'];
    $straat = $_POST['straat'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO tblgebruiker (naam, voornaam, straat, huisnummer, postcode, plaats, telefoonnummer, wachtwoord, typebezoeker, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'bezoeker', ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssssssss", $naam, $voornaam, $straat, $huisnummer, $postcode, $plaats, $telefoonnummer, $wachtwoord, $email);
    
    if ($stmt->execute()) {
        header("Location: myprofile.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <title>Registreren</title>
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
            </li>
        </ul>
    </nav>
</header>

    <form method="POST" action="">
        <input type="text" name="naam" placeholder="Naam" required>
        <input type="text" name="voornaam" placeholder="Voornaam" required>
        <input type="text" name="straat" placeholder="Straat" required>
        <input type="text" name="huisnummer" placeholder="Huisnummer" required>
        <input type="text" name="postcode" placeholder="Postcode" required>
        <input type="text" name="plaats" placeholder="Plaats" required>
        <input type="text" name="telefoonnummer" placeholder="Telefoonnummer" required>
        <input type="email" name="email" placeholder="E-mailadres" required>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
        <button type="submit" name="submit">Registreren</button>
    </form>
    <footer>
        <p>&copy; 2024 NeedForCarDetailing.</p>
    </footer>

</body>
</html>
