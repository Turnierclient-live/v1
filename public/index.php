<?php
// index.php

$pageTitle = "Willkommen beim Tischtennis-Turniermanager!";
$liveTournaments = 5; // Beispielwert für aktive Turniere
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Verwalte und organisiere Tischtennis-Turniere einfach und effizient.">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #343a40;
        }
        .main-header {
            background-color: #007bff;
            color: #fff;
            padding: 1rem 0;
        }
        .main-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        .logo a {
            text-decoration: none;
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-links {
            list-style: none;
            display: flex;
            gap: 1rem;
        }
        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .btn-login {
            background-color: #fff;
            color: #007bff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-login:hover {
            color: #0056b3;
            background-color: #e6e6e6;
        }
        .hero-section {
            text-align: center;
            padding: 3rem 1rem;
            background-color: #e9ecef;
        }
        .hero-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .btn-primary {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 1rem;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .features {
            padding: 2rem 1rem;
        }
        .features h3 {
            text-align: center;
            margin-bottom: 2rem;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
        .feature {
            background-color: #fff;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .testimonials {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 2rem 1rem;
        }
        .testimonial {
            margin-bottom: 1.5rem;
        }
        .cta {
            text-align: center;
            padding: 3rem 1rem;
            background-color: #f1f3f5;
        }
        .cta h3 {
            font-size: 1.5rem;
        }
        .main-footer {
            background-color: #343a40;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        .main-footer nav ul {
            list-style: none;
            padding: 0;
            margin: 0.5rem 0 0;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .main-footer nav a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1 class="logo"><a href="index.php">TurnierManager</a></h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="live-tournaments.php">Live-Turniere</a></li>
                    <li><a href="about.php">Über uns</a></li>
                    <li><a href="login.php" class="btn-login" style="background-color: orange;">Login</a></li>
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

    <section class="testimonials">
        <div class="container">
            <h3>Was unsere Nutzer sagen</h3>
            <div class="testimonial">
                <p>"Der beste Turniermanager, den wir je genutzt haben!"</p>
                <p>- TTC Beispiel</p>
            </div>
            <div class="testimonial">
                <p>"Intuitiv und leistungsstark – einfach perfekt für unseren Verein."</p>
                <p>- TTV Muster</p>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h3>Bist du bereit, dein nächstes Turnier zu planen?</h3>
            <a href="register.php" class="btn-primary">Jetzt starten</a>
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
