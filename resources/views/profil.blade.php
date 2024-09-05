<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-bg: #2c3e50;
            --text-light: #ffffff;
            --text-dark: #2c3e50;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 60px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0;
            transition: all 0.3s ease-in-out;
        }

        header:hover {
            background-color: var(--secondary-color);
        }

        nav {
            background-color: var(--dark-bg);
        }

        nav .navbar-nav .nav-link {
            color: var(--text-light) !important;
            margin-right: 20px;
            font-size: 1.1rem;
        }

        nav .navbar-nav .nav-link:hover {
            color: var(--accent-color) !important;
            transition: color 0.2s;
        }

        nav .navbar-nav .nav-link.active {
            color: var(--accent-color) !important;
            font-weight: bold;
        }

        h2 {
            color: var(--primary-color);
            margin-bottom: 30px;
            font-weight: 700;
            text-align: center;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-body {
            padding: 30px;
            background-color: var(--light-bg);
            border-radius: 8px;
        }

        .card-title {
            color: var(--secondary-color);
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        footer {
            background-color: var(--dark-bg);
            color: var(--text-light);
            padding: 20px 0;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }

            nav .navbar-nav .nav-link {
                font-size: 1rem;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Profil Rezezi Axcel</h1>
    </header>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="vhome.php">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="vhome">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="vprofil">Profil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vproduk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vkontak">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Profil saya</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Profil</h5>
                        <p class="card-text">
                            <strong>Nama:</strong> Rezezi Axcel<br>
                            <strong>Tempat Lahir:</strong> Jakarta<br>
                            <strong>Tanggal Lahir:</strong> 1 November 2007<br>
                            <strong>Alamat:</strong> Jln Lagoa - Tanjung Priok<br>
                            <strong>No HP:</strong> 0878-7825-4877
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2024 Rezezi Axcel. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
