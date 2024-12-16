<?php
session_start();

$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="en">
        <head>
            <title>ARCHITRONS</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>            <style>
                body {
                    font-family: Arial, sans-serif;
                    height: 100vh;
                }
                .navbar {
                    background: linear-gradient(135deg, #156AE2 0%, #094DAC 27%, #4A76B2 71%, #466A9B 86%, #14386B 100%);
                }
                .navbar-brand, .nav-link {
                    color: white;
                }
                .navbar-brand img{
                    width: auto;
                    height: 10vh;
                }
                .hero-section {
                    background: linear-gradient(135deg, #156AE2 0%, #094DAC 27%, #4A76B2 71%, #466A9B 86%, #14386B 100%);
                    color: white;
                    padding: 50px 0;
                    text-align: left;
                    height: 100vh;
                }
                .hero-section h1 {
                    font-size: 2.5rem;
                    font-weight: bold;
                    margin-top: 25vh;
                }
                .hero-section p {
                    font-size: 1.2rem;
                }
                .start{
                    background-color: #ffffff;
                    padding: 10px 40px;
                    border-radius: 20px;
                    font-weight: bold;
                    font-size: large;
                }
                .start:hover {
                    background: linear-gradient(to right, #6699ff, #0033cc);
                }
                .services-section {
                    background-color: #f5f7fa;
                    padding: 50px 0;
                    text-align: center;
                    height: 100vh;
                }
                .services-section h1 {
                    color: #1a73e8;
                    margin: 40px;
                    font-weight: bolder;
                }
                .service-card {
                    background-color: white;
                    color: #14386B;
                    border-radius: 10px;
                    padding: 20px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    margin: 10px;
                    transition: background 0,3s ease;
                }
                .service-card:hover {
                    background: linear-gradient(to top, #14386B 0%, #1F5BAE 69%, #2D6FCC 100%);
                    color: #ffffff;
                }
                .service-card img {
                    margin: 40px;
                }
            </style>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#home.phpl">
                        <img src="assets/logo.png" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#layanan">LAYANAN</a>
                            </li>               
                            <li class="nav-item">
                                <?php if ($isLoggedIn) : ?>
                                    <a class="nav-link" href="home.php">LOGOUT (<?php echo htmlspecialchars($username); ?>)</a>
                                <?php else: ?>
                                    <a class="nav-link" href="login/login.php">LOGIN</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>   
            <div class="hero-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Optimalkan Proyek Konstruksi Anda dengan ARCHITRONS</h1>
                            <p>Proyek Cerdas AI: Prediksi Biaya dan Durasi</p>
                            <button class="start" onclick="location.href='login/login.php'">
                                MULAI
                            </button>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/home.png" alt="3D model of a modern building" class="img-fluid" height="800" width="800">
                        </div>
                    </div>
                </div>
            </div>
            <div id="layanan" class="services-section">
                <div class="container">
                    <h1>LAYANAN KAMI</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-card">
                                <img src="assets/estimate.png" alt="estimate" height="100" width="100">
                                <p><strong>Architrons:</strong> Membantu anda dalam prediksi biaya proyek konstruksi secara akurat dan efisien</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card">
                                <img src="assets/predict.png" alt="predict" height="100" width="100">
                                <p><strong>Architrons:</strong> Membantu anda dalam prediksi durasi proyek konstruksi secara akurat dan efisien</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>