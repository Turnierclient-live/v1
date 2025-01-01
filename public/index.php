<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tischtennis-Turniermanager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 18px; /* Kleinere Schriftgröße */
        }

        .hero {
            background: linear-gradient(rgba(0, 74, 173, 0.8), rgba(0, 74, 173, 0.8)), url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .hero h1 {
            font-size: 36px; /* Größere Schriftgröße für den Titel */
            margin: 0;
        }

        .hero p {
            font-size: 20px; /* Größere Schriftgröße für den Text */
            margin: 10px 0 0;
        }

        section {
            padding: 40px 20px;
            text-align: center;
        }

        .testimonials {
            background-color: #f9f9f9;
            padding: 60px 20px;
        }

        .testimonials h3 {
            margin-bottom: 30px;
        }

        .testimonials-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .testimonial {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            text-align: center;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .testimonial-quote {
            font-style: italic;
            margin: 15px 0;
        }

        footer {
            background-color: #222;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <p>Tischtennis-Turniermanager</p>
    </header>
    <div class="hero">
        <h1>Willkommen beim Tischtennis-Turniermanager!</h1>
        <p>Plane, verwalte und verfolge Tischtennis-Turniere in Echtzeit. Perfekt für Vereine und Turnierleiter.</p>
    </div>
    <section class="testimonials">
        <h3>Was unsere Nutzer sagen</h3>
        <div class="testimonials-grid">
            <div class="testimonial">
                <img src="https://via.placeholder.com/100" alt="Profilbild 1" class="testimonial-img">
                <p class="testimonial-quote">„Einfach genial! Der Turniermanager hat unser Vereinsleben revolutioniert.“</p>
                <p class="testimonial-name">- Lisa Müller, TTC Beispiel</p>
            </div>
            <div class="testimonial">
                <img src="https://via.placeholder.com/100" alt="Profilbild 2" class="testimonial-img">
                <p class="testimonial-quote">„Die Live-Ansichten sind ein Game-Changer! Alle Spieler wissen immer, wann sie dran sind.“</p>
                <p class="testimonial-name">- Max Mustermann, TTV Muster</p>
            </div>
            <div class="testimonial">
                <img src="https://via.placeholder.com/100" alt="Profilbild 3" class="testimonial-img">
                <p class="testimonial-quote">„Super einfach zu bedienen und extrem hilfreich bei der Turnierplanung.“</p>
                <p class="testimonial-name">- Sarah Klein, TTC Pro</p>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Tischtennis-Turniermanager. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>
