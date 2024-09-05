<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db; /* Biru modern */
            --secondary-color: #2c3e50; /* Biru gelap */
            --accent-color: #e74c3c; /* Merah kontras */
            --light-bg-color: #f8f9fa; /* Latar belakang terang */
            --dark-bg-color: #2c3e50; /* Latar belakang gelap */
            --text-light: #ffffff;
            --text-dark: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg-color);
            color: var(--text-dark);
        }

        header {
            background-color: var(--primary-color);
            color: var(--text-light);
            text-align: center;
            padding: 30px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        nav {
            background-color: var(--dark-bg-color);
        }

        nav .navbar-nav .nav-link {
            color: var(--text-light);
        }

        nav .navbar-nav .nav-link.active {
            background-color: var(--accent-color);
            border-radius: 4px;
            color: var(--text-light) !important;
        }

        nav .navbar-toggler-icon {
            color: var(--text-light);
        }

        h2 {
            color: var(--primary-color);
            font-weight: bold;
        }

        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: var(--primary-color);
            font-weight: bold;
        }

        .card-text strong {
            color: var(--secondary-color);
        }

        footer {
            background-color: var(--dark-bg-color);
            color: var(--text-light);
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>My Website</h1>
    </header>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="vhome.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="vhome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vprofil">Profil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="vproduk">Produk <span class="sr-only">(current)</span></a>
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
                <h2>Produk Kami</h2>
                <p>Berikut adalah daftar produk kami:</p>

                <!-- Example Product -->
                <div class="card mb-4">
                    <img src="https://img.freepik.com/free-photo/washing-machine-minimal-laundry-room-interior-design_19002692.htm" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Produk 1</h5>
                        <p class="card-text">
                            <strong>Merk:</strong> Store Home<br>
                            <strong>Stok:</strong> 50 unit<br>
                            <strong>Harga Satuan:</strong> Rp 1.000.000
                        </p>
                    </div>
                </div>

                <!-- Example Product 2 -->
                <div class="card mb-4">
                    <img src="https://img.freepik.com/free-photo/smartphone-black-screen-top-view_1339-9333.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text">
                            <strong>Merk:</strong> Store Premium<br>
                            <strong>Stok:</strong> 30 unit<br>
                            <strong>Harga Satuan:</strong> Rp 2.000.000
                        </p>
                    </div>
                </div>

                <!-- Add more products as needed -->
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
