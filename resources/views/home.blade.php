<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2c3e50; /* Dark blue */
            --secondary-color: #3498db; /* Bright blue */
            --accent-color: #e74c3c; /* Accent red */
            --light-bg: #f8f9fa; /* Light background */
            --dark-bg: #2c3e50; /* Dark background */
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

        .container p {
            font-size: 1.2rem;
            line-height: 1.6;
            text-align: justify;
        }

        .btn-custom {
            background-color: var(--accent-color);
            color: var(--text-light);
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: var(--primary-color);
            color: var(--text-light);
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

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in;
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

            .btn-custom {
                font-size: 1rem;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="vhome.php">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="vhome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vprofil">Profil</a>
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
    <main class="container fade-in my-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Welcome to the Home Page</h2>
                <p>This is a sample content area. You can put your main content here and adjust the layout according to your needs. This page is fully responsive and includes a clean, modern design to make your website stand out.</p>
                <a href="vproduk" class="btn btn-custom mt-4">Explore Our Products</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
