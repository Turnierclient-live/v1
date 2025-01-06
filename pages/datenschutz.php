<?php include 'includes/header.php'; ?>

<main>
    <section class="section" id="datenschutz">
        <h2>Datenschutzerklärung</h2>
        <div class="datenschutz-content">
            <div class="datenschutz-section">
                <h3>1. Allgemeine Hinweise</h3>
                <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie unsere Webseite besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.</p>
            </div>
            <div class="datenschutz-section">
                <h3>2. Verantwortliche Stelle</h3>
                <p>Verantwortlich für die Datenverarbeitung auf dieser Website ist:</p>
                <p><strong>Piet Salingré</strong><br>
                Emmericher Straße 14<br>
                46459 Rees<br>
                E-Mail: <a href="mailto:info@pietsalingre.de">info@pietsalingre.de</a></p>
            </div>
            <div class="datenschutz-section">
                <h3>3. Erhebung und Speicherung personenbezogener Daten</h3>
                <p>Wir erheben personenbezogene Daten, wenn Sie mit uns in Kontakt treten, zum Beispiel über das Kontaktformular oder per E-Mail. Die von uns erhobenen Daten werden ausschließlich für die Bearbeitung Ihrer Anfrage verwendet.</p>
            </div>
            <div class="datenschutz-section">
                <h3>4. Zweck der Datenverarbeitung</h3>
                <p>Wir verarbeiten Ihre personenbezogenen Daten zu folgenden Zwecken:</p>
                <ul>
                    <li>Zur Bearbeitung von Anfragen, die Sie über das Kontaktformular oder per E-Mail gestellt haben.</li>
                    <li>Zur Durchführung von vertraglichen Verpflichtungen (falls zutreffend).</li>
                </ul>
            </div>
            <div class="datenschutz-section">
                <h3>5. Dauer der Speicherung</h3>
                <p>Wir speichern personenbezogene Daten nur so lange, wie es für die Erreichung der Zwecke erforderlich ist, für die sie erhoben wurden. In der Regel werden Ihre Daten gelöscht, wenn die Bearbeitung Ihrer Anfrage abgeschlossen ist oder gesetzliche Aufbewahrungsfristen abgelaufen sind.</p>
            </div>
            <div class="datenschutz-section">
                <h3>6. Ihre Rechte</h3>
                <p>Sie haben das Recht, jederzeit Auskunft über Ihre gespeicherten personenbezogenen Daten zu erhalten. Sie können auch die Berichtigung, Löschung oder Einschränkung der Verarbeitung Ihrer Daten verlangen. Wenden Sie sich dazu bitte an die oben genannte verantwortliche Stelle.</p>
                <p>Außerdem haben Sie das Recht, sich bei der zuständigen Datenschutzaufsichtsbehörde zu beschweren.</p>
            </div>
            <div class="datenschutz-section">
                <h3>7. Weitergabe von Daten</h3>
                <p>Eine Weitergabe Ihrer personenbezogenen Daten an Dritte erfolgt nur, wenn dies im Rahmen der Bearbeitung Ihrer Anfrage erforderlich ist oder wir gesetzlich dazu verpflichtet sind.</p>
            </div>
            <div class="datenschutz-section">
                <h3>8. Sicherheit Ihrer Daten</h3>
                <p>Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um Ihre personenbezogenen Daten vor Verlust, Zerstörung, Zugriff, Veränderung oder Verbreitung durch unbefugte Personen zu schützen.</p>
            </div>
            <div class="datenschutz-section">
                <h3>9. Cookies</h3>
                <p>Unsere Webseite verwendet Cookies, um die Nutzererfahrung zu verbessern. Cookies sind kleine Textdateien, die auf Ihrem Endgerät gespeichert werden. Sie können die Speicherung von Cookies in den Einstellungen Ihres Browsers deaktivieren, jedoch kann dies zu Einschränkungen der Funktionalität unserer Webseite führen.</p>
            </div>
            <div class="datenschutz-section">
                <h3>10. Google Analytics</h3>
                <p>Wir nutzen Google Analytics, einen Webanalysedienst der Google Inc. Google Analytics verwendet Cookies, um die Nutzung der Webseite zu analysieren. Die durch das Cookie erzeugten Informationen über die Benutzung dieser Webseite werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Sie können die Erfassung der Daten durch Google Analytics verhindern, indem Sie die entsprechende Browser-Erweiterung installieren.</p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<style>

#datenschutz {
    background-color: #f7f7f7;
    padding: 40px 15px;
    text-align: center;
}

.datenschutz-content {
    max-width: 800px;
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.datenschutz h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.datenschutz-section {
    margin-bottom: 30px;
    text-align: left;
}

.datenschutz-section h3 {
    font-size: 1.8rem;
    color: #0056b3;
    margin-bottom: 10px;
}

.datenschutz-section p {
    font-size: 1rem;
    line-height: 1.6;
}

.datenschutz-section ul {
    list-style-type: disc;
    margin-left: 20px;
    font-size: 1rem;
}

.datenschutz-section a {
    color: #ff5733;
    text-decoration: none;
}

.datenschutz-section a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .datenschutz-content {
        padding: 20px;
    }

    .datenschutz h2 {
        font-size: 2rem;
    }

    .datenschutz-section h3 {
        font-size: 1.5rem;
    }

    .datenschutz-section p {
        font-size: 0.9rem;
    }
}

</style>
