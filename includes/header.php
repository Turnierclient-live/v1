<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tischtennis-Turniermanager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Allgemeine Einstellungen */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s;
        }

        a:hover {
            color: #007BFF;
        }

        /* Header-Stil */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007BFF;
            color: #fff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            display: flex;
            align-items: center;
        }

        header .logo img {
            height: 40px;
            margin-right: 1rem;
        }

        header .logo h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        header nav {
            display: flex;
            gap: 1.5rem;
        }

        header a {
            color: #fff;
            font-weight: bold;
        }

        header .nav-item i {
            margin-right: 0.5rem;
        }

        /* Hauptinhalt-Stil */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
        }

        /* Hero-Bereich-Stil */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../images/hero-bg.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 5rem 1rem;
            width: 100%;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            animation: fadeIn 1s ease-in-out;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
        }

        .hero p {
            font-size: 1.5rem;
            margin: 0.5rem 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Abschnitt-Stil */
        .section {
            padding: 2rem 1rem;
            text-align: center;
            background-color: #fff;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 800px;
            margin: 2rem auto;
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

        /* Kontakt-Formular-Stil */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-form h3 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: #007BFF;
            text-align: center;
        }

        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
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
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Footer-Stil */
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
        <div class="logo">
            <img src="../images/logo.png" alt="Logo">
            <h1>Tischtennis-Turniermanager</h1>
        </div>
        <nav>
            <a href="../index.php#about" class="nav-item"><i class="fas fa-info-circle"></i> About Page</a>
            <a href="../index.php#tournaments" class="nav-item"><i class="fas fa-trophy"></i> Turniere</a>
            <a href="../login.php" class="nav-item"><i class="fas fa-sign-in-alt"></i> Login</a>
        </nav>
    </header>