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
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007BFF;
            color: #fff;
            padding: 1rem 2rem;
        }
        header nav {
            display: flex;
            gap: 1rem;
        }
        header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
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
        .features, .benefits, .feedbacks, .testimonials {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .feature, .benefit, .feedback, .testimonial {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 1rem;
            padding: 1rem;
            width: 250px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .feature i, .benefit i, .feedback i, .testimonial i {
            font-size: 2rem;
            color: #007BFF;
            margin-bottom: 0.5rem;
        }
        .testimonial img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 0.5rem;
        }
        .divider {
            height: 2px;
            background-color: #007BFF;
            margin: 2rem 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 2rem 1rem;
        }
        footer .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1rem;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer .social-media {
            margin-top: 1rem;
        }
        footer .social-media a {
            margin: 0 0.5rem;
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
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }
        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-form button {
            width: 100%;
            padding: 1rem;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1><i class="fas fa-table-tennis"></i> Tischtennis-Turniermanager</h1>
        </div>
        <nav>
            <a href="#about">About Page</a>
            <a href="#tournaments">Turniere</a>
        </nav>
        <div>
            <a href="login.php">Login</a>
        </div>
    </header>
    <div class="hero">
        <div class="hero-content">
            <h1>Willkommen beim Tischtennis-Turniermanager!</h1>
            <p>Plane, verwalte und verfolge Tischtennis-Turniere in Echtzeit. Perfekt für Vereine und Turnierleiter.</p>
        </div>
    </div>
    <section class="section" id="about">
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
    <div class="divider"></div>
    <section class="section">
        <h2>Vorteile</h2>
        <div class="benefits">
            <div class="benefit">
                <i class="fas fa-clock"></i>
                <h3>Echtzeit-Planung und -Verwaltung</h3>
                <p>Der Turniermanager ermöglicht es, Tischtennis-Turniere in Echtzeit zu planen, zu verwalten und zu verfolgen.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-people-arrows"></i>
                <h3>Perfekt für Vereine und Turnierleiter</h3>
                <p>Das System ist speziell auf die Bedürfnisse von Vereinen und Turnierleitern zugeschnitten, um Turniere effizient zu organisieren.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-tv"></i>
                <h3>Live-Ansicht für Fernseher</h3>
                <p>Es gibt eine Möglichkeit, die Turnierergebnisse in einer Live-Ansicht im Vollbild auf einem Fernseher anzuzeigen, sodass Zuschauer jederzeit informiert sind.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-qrcode"></i>
                <h3>QR-Code-Integration</h3>
                <p>Teilnehmer und Zuschauer können einen QR-Code scannen, um Live-Ergebnisse und Informationen über den aktuellen Stand des Turniers zu erhalten.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-user-check"></i>
                <h3>Benutzerfreundliche Turnieranmeldung</h3>
                <p>Teilnehmer können sich einfach für Turniere anmelden, entweder durch Eingabe des Namens oder durch Integration von Klick-TT-Daten.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-sort-amount-up"></i>
                <h3>Automatische Klassenbildung</h3>
                <p>Das System schlägt automatisch die besten Klassen für die Spieler vor, basierend auf deren TTR- oder U-TTR-Werten.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-trophy"></i>
                <h3>Verschiedene Turnierarten</h3>
                <p>Es können verschiedene Spielmodi wie Einzel-KO, Doppel-KO und mehr ausgewählt werden.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-cogs"></i>
                <h3>Hohe Flexibilität</h3>
                <p>Das Turnier kann individuell angepasst werden, z. B. bei der Anzahl der Gewinnsätze, der Spielweise und der Konfiguration der Klassen und Spielregeln.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-link"></i>
                <h3>Einladungen per Link</h3>
                <p>Spieler können per Link eingeladen werden, sich dem Turnier anzuschließen, was die Anmeldung und Zusammenarbeit im Team erleichtert.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-chart-bar"></i>
                <h3>Live-Ergebnisse und Turnierübersicht</h3>
                <p>Es gibt eine übersichtliche Darstellung der aktuellen Spiele und Ergebnisse, sowohl für Teilnehmer als auch Zuschauer.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-envelope"></i>
                <h3>E-Mail-Verifizierung</h3>
                <p>Beim Registrierungsprozess gibt es eine Passwortbestätigung per E-Mail (SMTP), was zusätzliche Sicherheit und Benutzerverifizierung bietet.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-user-alt"></i>
                <h3>Persönliche Dashboard-Daten</h3>
                <p>Im Dashboard können Benutzer ihre vergangenen Turniere einsehen und ihre aktuellen Turniere verfolgen, was für eine bessere Verwaltung sorgt.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-tools"></i>
                <h3>Vollständige Turnierkonfiguration</h3>
                <p>Alle Aspekte des Turniers können konfiguriert werden, von der Zeitplanung bis hin zu den Regeln und der Struktur des Turniers.</p>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <section class="section">
        <h2>Kontakt</h2>
        <div class="contact-form">
            <form action="submit_form.php" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Nachricht</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Absenden</button>
            </form>
        </div>
    </section>
    <div class="divider"></div>
    <section class="section">
        <h2>Kontakt & Anmeldung</h2>
        <p>Melden Sie sich noch heute an und nutzen Sie die Vorteile unseres Tischtennis-Turniermanagers!</p>
        <a href="register.php" class="cta-button">Jetzt Registrieren</a>
    </section>
    <footer>
        <div class="footer-links">
            <a href="#impressum">Impressum</a>
            <a href="#datenschutz">Datenschutz</a>
            <a href="#kontakt">Kontakt</a>
        </div>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p>© 2025 Tischtennis-Turniermanager. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>