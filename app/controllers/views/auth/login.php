<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tischtennis-Turniermanager</title>
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        header nav {
            display: flex;
            gap: 1rem;
        }
        header a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        header a:hover {
            color: #ddd;
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
            max-width: 800px;
            margin: 0 auto;
        }
        .hero h1 {
            font-size: 3rem;
            margin: 0;
            animation: fadeInDown 1s ease-in-out;
        }
        .hero p {
            font-size: 1.5rem;
            margin: 0.5rem 0;
            animation: fadeInUp 1s ease-in-out;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .section {
            padding: 2rem 1rem;
            text-align: center;
        }
        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
        }
        .section h2::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: #007BFF;
            margin: 0.5rem auto 1rem auto;
        }
        .section p {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .login-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .login-form input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-form button {
            width: 100%;
            padding: 1rem;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-form button:hover {
            background-color: #0056b3;
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
            transition: color 0.3s;
        }
        footer a:hover {
            color: #ddd;
        }
        footer .social-media {
            margin-top: 1rem;
        }
        footer .social-media a {
            margin: 0 0.5rem;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        footer .social-media a:hover {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1><i class="fas fa-table-tennis"></i> Tischtennis-Turniermanager</h1>
        </div>
        <nav>
            <a href="index.php#about">About Page</a>
            <a href="index.php#tournaments">Turniere</a>
        </nav>
        <div>
            <a href="login.php">Login</a>
        </div>
    </header>
    <div class="hero">
        <div class="hero-content">
            <h1>Login</h1>
            <p>Geben Sie Ihre Anmeldedaten ein, um auf Ihr Konto zuzugreifen.</p>
        </div>
    </div>
    <section class="section">
        <div class="login-form">
            <form action="authenticate.php" method="post">
                <label for="username">Benutzername</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Passwort</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-links">
            <a href="impressum.php">Impressum</a>
            <a href="datenschutz.php">Datenschutz</a>
            <a href="kontakt.php">Kontakt</a>
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