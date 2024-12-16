<?php
session_start();

// Periksa apakah form telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil input dari formulir
    $tipeRumah = $_POST['tipeRumah'] ?? null;
    $luasTanah = $_POST['luasTanah'] ?? null;
    $luasBangunan = $_POST['luasBangunan'] ?? null;
    $jumlahLantai = $_POST['jumlahLantai'] ?? null;
    $jumlahKamarMandi = $_POST['jumlahKamarMandi'] ?? null;
    $jumlahKamarTidur = $_POST['jumlahKamarTidur'] ?? null;
    $tipeAtap = $_POST['tipeAtap'] ?? null;
    $tipeDinding = $_POST['tipeDinding'] ?? null;
    $tipePondasi = $_POST['tipePondasi'] ?? null;
    $materialUtama = $_POST['materialUtama'] ?? null;
    $jumlahTenagaKerja = $_POST['jumlahTenagaKerja'] ?? null;

    // Validasi input
    if ($tipeRumah && $luasTanah && $luasBangunan && $jumlahLantai && $jumlahKamarMandi && $jumlahKamarTidur && $tipeAtap && $tipeDinding && $tipePondasi && $materialUtama && $jumlahTenagaKerja) {
        // Dummy prediksi (ganti dengan model prediksi sesungguhnya)
        $predictedCost = rand(1000000, 100000000); // Simulasi hasil prediksi biaya
        $predictedDuration = rand(1, 24); // Simulasi hasil prediksi durasi

        // Simpan hasil dalam sesi
        $_SESSION['predictedCost'] = $predictedCost;
        $_SESSION['predictedDuration'] = $predictedDuration;

        // Tampilkan hasil
        header('Location: project.php');
        exit();
    } else {
        $_SESSION['errorMessage'] = 'Mohon lengkapi semua input!';
        header('Location: project.php');
        exit();
    }
}

// Tampilkan hasil prediksi jika ada
$predictedCost = $_SESSION['predictedCost'] ?? null;
$predictedDuration = $_SESSION['predictedDuration'] ?? null;
$errorMessage = $_SESSION['errorMessage'] ?? null;

// Hapus data dari sesi
unset($_SESSION['predictedCost'], $_SESSION['predictedDuration'], $_SESSION['errorMessage']);
?>

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Architrons
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" rel="stylesheet"/>
  <script crossorigin="anonymous" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <style>
   body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #578FDD;
            height: 100vh;
            padding: 20px 0;
            position: fixed;
            width: 80px;
            transition: width 0.3s;
            border-radius: 30px;
            margin: 10px;
        }
        .sidebar.expanded {
            width: 200px;
        }
        .sidebar .nav-link {
            color: white;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
        .sidebar .nav-link:hover{
            background-color: #f8f9fa;
            color: #2F5D9D;
        }
        .sidebar .nav-link i {
            font-size: 24px;
        }
        .sidebar .nav-link span {
            display: none;
            margin-left: 10px;
        }
        .sidebar.expanded .nav-link span {
            display: inline;
        }
        .sidebar .profile {
            position: absolute;
            bottom: 80px;
            width: 100%;
            text-align: center;
        }
        .sidebar .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
        .sidebar .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }
        .sidebar .logout a {
            color: white;
            text-decoration: none;
        }
        .center{
            margin-top: 150px;
            justify-content: baseline;
        }
        .content {
            margin-left: 100px;
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .content.expanded {
            margin-left: 220px;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            width: auto;
            height: 10vh;
        }
        .header h1 {
            font-size: 24px;
            font-weight: bolder;
        }
        .home-icon{
            size: 20px;
            color: #2F5D9D;
        }
        .btn-add {
            background-color: #00FF00;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #F5F5F5;
            font-weight: normal;
        }
        th.sortable {
            cursor: pointer;
        }
        th.sortable:after {
            content: '\f0dc';
            font-family: 'FontAwesome';
            padding-left: 10px;
        }
        th.sortable.sorted:after {
            content: '\f0dd';
        }
  </style>
 </head>
 <body>
  <div class="sidebar" id="sidebar">
   <nav class="nav flex-column">
    <a class="nav-link" href="#" onclick="toggleSidebar()">
     <i class="bi bi-grid-3x3-gap-fill">
     </i>
     <span>
      ARCHITRONS
     </span>
    </a>
   </nav>
   <div class="center">
    <a class="nav-link" href="../dashboard/index.php">
     <i class="bi bi-house-door-fill">
     </i>
     <span>
      Dashboard
     </span>
    </a>
    <a class="nav-link" href="../dashboard/fitur.php">
     <i class="bi bi-person-plus-fill">
     </i>
     <span>
      Project
     </span>
    </a>
   </div>
   <div class="profile">
    <img alt="Profile Picture" height="40" src="https://placehold.co/40x40" width="40"/>
    
   </div>
   <div class="logout">
    <a class="nav-link" href="../home.php">
     <i class="bi bi-box-arrow-right">
     </i>
     <span>
      Logout
     </span>
    </a>
   </div>
  </div>
  <div class="content" id="content">
   <div class="header">
    <img alt="Architrons Logo" height="50" src="../assets/logo.png" width="100"/>
    <i class="bi bi-house-door-fill home-icon" onclick="location.href='../dashboard/index.php'">
    </i>
   </div>
   <button class="btn-add" onclick="location.href='../dashboard/input.php'">
    + Tambah Data
   </button>
   <!--<div class="table-container">
    <table class="table">
     <thead>
      <tr>
        <th>Nama Proyek</th>
       <th>Jenis Proyek</th>
       <th>Luas Area</th>
       <th class="sortable">Bahan Material</th>
       <th>Sumber Daya Manusia</th>
       <th>Angggaran Awal</th>
       <th>Durasi Waktu</th>
      </tr>
     </thead>
     <tbody>
        
            <tr>
                <td>Perumahan Indah</td>
                <td>Perumahan</td>
                <td>50 m2</td>
                <td>Beton, Batu bata</td>
                <td>10</td>
                <td>Rp 100.000.000,00</td>
                <td>1 tahun</td>
            </tr>
            <tr>
                <td>Perumahan Indah</td>
                <td>Perumahan</td>
                <td><strong>50m2</strong></td>
                <td>Beton, Batu bata</td>
                <td>10</td>
                <td>Rp 100.000.000,00</td>
                <td>1 tahun</td>
            </tr>
       
     </tbody>
    </table>-->
   </div>
  </div>
    <div class="container mt-5">
        <?php if ($errorMessage): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($errorMessage) ?>
            </div>
        <?php endif; ?>

        <?php if ($predictedCost && $predictedDuration): ?>
            <div class="alert alert-success">
                <h4>Hasil Prediksi</h4>
                <p><strong>Estimasi Biaya:</strong> Rp <?= number_format($predictedCost, 0, ',', '.') ?></p>
                <p><strong>Estimasi Durasi:</strong> <?= $predictedDuration ?> bulan</p>
            </div>
        <?php endif; ?>

        <a href="fitur.php" class="btn btn-primary">Kembali</a>
    </div>
  <script>
   function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('expanded');
            content.classList.toggle('expanded');
        }
  </script>
 </body>
</html>
