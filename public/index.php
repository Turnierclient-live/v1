<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tischtennis-Turniermanager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .hero {
            background: url('path/to/your/background-image.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 5rem 1rem;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 3rem;
            margin: 0;
        }
        .hero p {
            font-size: 1.5rem;
            margin: 0.5rem 0;
        }
        .section {
            padding: 2rem 1rem;
            text-align: center;
        }
        .section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .section p {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .feature {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 1rem;
            padding: 1rem;
            width: 250px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .feature i {
            font-size: 2rem;
            color: #007BFF;
            margin-bottom: 0.5rem;
        }
        .testimonials {
            background-color: #f9f9f9;
        }
        .testimonial {
            margin: 1rem 0;
        }
        .testimonial img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1><i class="fas fa-table-tennis"></i> Tischtennis-Turniermanager</h1>
    </header>
    <div class="hero">
        <div class="hero-content">
            <h1>Willkommen beim Tischtennis-Turniermanager!</h1>
            <p>Plane, verwalte und verfolge Tischtennis-Turniere in Echtzeit. Perfekt für Vereine und Turnierleiter.</p>
        </div>
    </div>
    <section class="section">
        <h2>Funktionen</h2>
        <div class="features">
            <div class="feature">
                <i class="fas fa-clock"></i>
                <h3>Echtzeit-Updates</h3>
                <p>Erhalten Sie sofortige Benachrichtigungen und Updates zu Ihren Turnieren.</p>
            </div>
            <div class="feature">
                <i class="fas fa-calendar-alt"></i>
                <h3>Automatische Planung</h3>
                <p>Erstellen Sie automatisch Spielpläne und Turnierzeiten.</p>
            </div>
            <div class="feature">
                <i class="fas fa-chart-line"></i>
                <h3>Statistiken</h3>
                <p>Analysieren Sie die Leistung der Spieler mit detaillierten Statistiken.</p>
            </div>
            <div class="feature">
                <i class="fas fa-users"></i>
                <h3>Teilnehmerverwaltung</h3>
                <p>Verwalten Sie die Anmeldungen und Informationen Ihrer Teilnehmer online.</p>
            </div>
        </div>
    </section>
    <section class="testimonials section">
        <h2>Erfahrungsberichte</h2>
        <div class="testimonial">
            <img src="path/to/profile-placeholder.jpg" alt="Benutzerprofilbild">
            <p>"Der Turniermanager hat unser Vereinsleben revolutioniert!"</p>
            <p>- Max Mustermann, TTC Beispiel</p>
        </div>
        <div class="testimonial">
            <img src="path/to/profile-placeholder.jpg" alt="Benutzerprofilbild">
            <p>"Ein unverzichtbares Tool für Turnierleiter."</p>
            <p>- Anna Musterfrau, TTC Beispiel</p>
        </div>
    </section>
    <section class="section">
        <h2>Vorteile</h2>
        <p>Erleben Sie die Vorteile unseres Turniermanagers:</p>
        <ul>
            <li>Effizienzsteigerung bei der Turnierplanung</li>
            <li>Verbesserte Kommunikation mit Teilnehmern</li>
            <li>Transparente und nachvollziehbare Ergebnisse</li>
            <li>Erhöhte Zufriedenheit bei Spielern und Zuschauern</li>
        </ul>
    </section>
    <section class="section">
        <h2>Kontakt & Anmeldung</h2>
        <p>Melden Sie sich noch heute an und nutzen Sie die Vorteile unseres Tischtennis-Turniermanagers!</p>
        <a href="register.php" class="cta-button">Jetzt Registrieren</a>
    </section>
    <footer>
        <p>© 2025 Tischtennis-Turniermanager. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>