<?php include 'includes/header.php'; ?>

<main>
    <div class="hero">
        <div class="hero-content">
            <h1>Willkommen beim Tischtennis-Turniermanager!</h1>
            <p>Plane, verwalte und verfolge Tischtennis-Turniere in Echtzeit. Perfekt für Vereine und Turnierleiter.</p>
            <a href="#about" class="btn-primary">Erfahre mehr</a>
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
                <i class="fas fa-trophy"></i>
                <h3>Echtzeit-Planung und -Verwaltung</h3>
                <p>Planen und verwalten Sie Turniere in Echtzeit, während Sie die Teilnehmer effizient koordinieren.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-users-cog"></i>
                <h3>Perfekt für Vereine und Turnierleiter</h3>
                <p>Speziell für die Bedürfnisse von Vereinen und Turnierleitern entwickelt, um den Turnierablauf zu optimieren.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-tv"></i>
                <h3>Live-Ansicht für Fernseher</h3>
                <p>Ergebnisse und Turnierübersicht können in einer Live-Ansicht auf dem Bildschirm angezeigt werden.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-qrcode"></i>
                <h3>QR-Code-Integration</h3>
                <p>Teilnehmer und Zuschauer können einfach den QR-Code scannen, um Ergebnisse und Turnierinfos zu sehen.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-pencil-alt"></i>
                <h3>Benutzerfreundliche Anmeldung</h3>
                <p>Teilnehmer können sich problemlos anmelden, mit der Möglichkeit, Klick-TT-Daten zu integrieren.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-sync-alt"></i>
                <h3>Automatische Klassenbildung</h3>
                <p>Das System schlägt automatisch die besten Klassen vor, basierend auf den TTR- oder U-TTR-Werten der Spieler.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-cogs"></i>
                <h3>Hohe Flexibilität</h3>
                <p>Das Turnier kann in verschiedenen Bereichen wie Spielregeln, Klassen und Gewinnsätzen individuell angepasst werden.</p>
            </div>
            <div class="benefit">
                <i class="fas fa-share-alt"></i>
                <h3>Einladungen per Link</h3>
                <p>Spieler können per Link eingeladen werden, um sich schnell und einfach dem Turnier anzuschließen.</p>
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
                
                <button type="submit" class="btn-primary">Absenden</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<style>
.hero {
    background: #0056b3;
    color: white;
    padding: 50px 0;
    text-align: center;
}

.hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.btn-primary {
    background-color: #ff5733;
    color: white;
    padding: 12px 30px;
    font-size: 1rem;
    text-decoration: none;
    border-radius: 5px;
}

.section {
    padding: 50px 15px;
    text-align: center;
}

.features, .benefits {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.feature, .benefit {
    width: 200px;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.feature i, .benefit i {
    font-size: 3rem;
    color: #0056b3;
}

h3 {
    font-size: 1.5rem;
    margin: 15px 0;
}

.contact-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    background-color: #f1f1f1;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-form label {
    display: block;
    margin: 10px 0 5px;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.contact-form button {
    background-color: #ff5733;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

</style>