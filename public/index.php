<?php
// index.php

// Beispiel für dynamische Inhalte
$pageTitle = "Willkommen beim Tischtennis-Turniermanager!";
$liveTournaments = 5; // Beispielwert für aktive Turniere

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Verwalte und organisiere Tischtennis-Turniere einfach und effizient.">
    <link rel="stylesheet" href="css/styles.css">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1 class="logo"><a href="index.php">TurnierManager</a></h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="live-tournaments.php">Live-Turniere</a></li>
                    <li><a href="about.php">Über uns</a></li>
                    <li><a href="login.php" class="btn-login">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="hero-section">
        <div class="container">
            <h2><?= htmlspecialchars($pageTitle) ?></h2>
            <p>Plane, verwalte und verfolge Tischtennis-Turniere in Echtzeit. Perfekt für Vereine und Turnierleiter.</p>
            <a href="register.php" class="btn-primary">Jetzt registrieren</a>
        </div>
    </main>

    <section class="features">
        <div class="container">
            <h3>Unsere Funktionen</h3>
            <div class="features-grid">
                <div class="feature">
                    <h4>Live-Tracking</h4>
                    <p>Verfolge die Ergebnisse in Echtzeit, ob auf dem Fernseher oder über QR-Codes.</p>
                </div>
                <div class="feature">
                    <h4>Einfache Verwaltung</h4>
                    <p>Konfiguriere alles, von Spielklassen bis hin zu Turniermodi, in wenigen Klicks.</p>
                </div>
                <div class="feature">
                    <h4>Dynamische Turniere</h4>
                    <p>Erstelle Turniere, lade Spieler ein und überlasse den Rest unserer Plattform.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?= date("Y") ?> TurnierManager. Alle Rechte vorbehalten.</p>
            <nav>
                <ul>
                    <li><a href="impressum.php">Impressum</a></li>
                    <li><a href="datenschutz.php">Datenschutz</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>
