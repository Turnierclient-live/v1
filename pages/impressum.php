<?php include 'includes/header.php'; ?>

<main>
    <section class="section" id="impressum">
        <h2>Impressum</h2>
        <div class="impressum-content">
            <div class="impressum-section">
                <h3>Angaben gemäß § 5 TMG</h3>
                <p><strong>Piet Salingré</strong><br>
                Emmericher Straße 14<br>
                46459 Rees</p>
            </div>
            <div class="impressum-section">
                <h3>Kontakt</h3>
                <p>E-Mail: <a href="mailto:info@pietsalingre.de">info@pietsalingre.de</a></p>
            </div>
            <div class="impressum-section">
                <h3>Haftungsausschluss</h3>
                <p>Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen.</p>
            </div>
            <div class="impressum-section">
                <h3>Haftung für Links</h3>
                <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.</p>
            </div>
            <div class="impressum-section">
                <h3>Urheberrecht</h3>
                <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.</p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<style>

#impressum {
    background-color: #f7f7f7;
    padding: 40px 15px;
    text-align: center;
}

.impressum-content {
    max-width: 800px;
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.impressum h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.impressum-section {
    margin-bottom: 30px;
    text-align: left;
}

.impressum-section h3 {
    font-size: 1.8rem;
    color: #0056b3;
    margin-bottom: 10px;
}

.impressum-section p {
    font-size: 1rem;
    line-height: 1.6;
}

.impressum-section a {
    color: #ff5733;
    text-decoration: none;
}

.impressum-section a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .impressum-content {
        padding: 20px;
    }

    .impressum h2 {
        font-size: 2rem;
    }

    .impressum-section h3 {
        font-size: 1.5rem;
    }

    .impressum-section p {
        font-size: 0.9rem;
    }
}


</style>
