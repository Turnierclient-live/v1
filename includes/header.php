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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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