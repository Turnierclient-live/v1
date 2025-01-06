<?php include '../includes/header.php'; ?>

<main>
    <section class="section">
        <h2>Kontakt</h2>
        <div class="contact-form">
            <h3>Kontaktieren Sie uns</h3>
            <form action="../submit_form.php" method="post">
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
</main>

<?php include '../includes/footer.php'; ?>