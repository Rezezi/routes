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
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white text-center py-3">
        <h1>My Website</h1>
    </header>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    <main class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Produk Kami</h2>
                <p>Berikut adalah daftar produk kami:</p>

                <!-- Example Product -->
                <div class="card mb-4">
                    <img src="path/to/product1.jpg" class="card-img-top" alt="Product 1">
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
                    <img src="path/to/product2.jpg" class="card-img-top" alt="Product 2">
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
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
</body>
</html>
