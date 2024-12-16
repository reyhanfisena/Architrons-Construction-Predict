<?php
session_start();
include '../config.php';
?>

<html lang="en">
 <head>
  <meta charset="UTF-8"/>
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
        .header .btn {
            background: linear-gradient(135deg, #578FDD 0%, #2F5D9D 100%);
            color: white;
        }
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            height: 40vh;
        }
        .card-body .left{
            padding: 30px;
        }
        .card-body .left, .card-body .right {
            width: 48%;
        }
        .card-body .right {
            background: linear-gradient(135deg, #578FDD 0%, #2F5D9D 100%);
            color: white;
            padding: 30px;
            border-radius: 5px;
        }
        .card-body .right h5 {
            font-weight: bold;
            margin: 20px;

        }
        .card-body .right p {
            margin: 20px;
        }
        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-footer .btn {
            background: linear-gradient(135deg, #578FDD 0%, #2F5D9D 100%);
            color: white;
        }
        .center{
            margin-top: 150px;
            justify-content: baseline;
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
   </nav>

<div class="center">
</a>
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
    <h1>
     DASHBOARD
    </h1>
    <button class="btn" onclick="location.href='../dashboard/fitur.php'">
        FITUR
    </button>
   </div>
   <div class="card">
    <div class="card-header">
     ARCHITRON'S
    </div>
    <div class="card-body">
     <div class="left">
      <p>
       Architrons adalah solusi cerdas berbasis AI yang memprediksi durasi dan biaya proyek konstruksi secara akurat. Dengan analisa data historis dan machine learning, Architrons membantu mengurangi risiko anggaran dan memastikan penyelesaian proyek sesuai rencana, sehingga meningkatkan efisiensi dan kepuasan semua pihak yang terlibat.
      </p>
     </div>
     <div class="right">
      <h5>
       Apa Saja Yang Bisa Dilakukan Oleh ARCHITRONS
      </h5>
      <p>
       Architrons menawarkan fitur untuk memprediksi durasi dan biaya secara akurat dan efisien dengan memasukkan beberapa data seperti jenis proyek tipe rumah, Luas tanah, luas bangunan, jumlah lantai, jumlah kamar tidur, jumlah kamar mandi, tipe atap, tipe dinding, tipe pondasi, material utama, dan Jumlah Tenaga.
      </p>
     </div>
    </div>
    <div class="card-footer">
     <img alt="Architrons Logo" height="50" src="../assets/logo.png" width="100"/>
     <p>Untuk Memulai prediksi Proyek lihat tata cara di samping</p>
     <button class="btn" onclick="location.href='../dashboard/tipe.php'"">
        LIHAT
    </button>
    </div>
   </div>
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