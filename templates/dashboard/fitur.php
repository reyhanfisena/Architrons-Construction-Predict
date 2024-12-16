<?php
session_start();
$user_logged_in = isset($_SESSION['username']) ? $_SESSION['username'] : 'Tamu';
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
        .services-section {
        background-color: #f5f7fa;
        padding: 50px 0;
        text-align: center;
        height: 100vh;
        }
        
        .service-card {
        background-color: white;
        color: #14386B;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 10px;
        transition: background 0,3s ease;
        height: 40vh;
        }
        .service-card:hover {
        background: linear-gradient(to top, #14386B 0%, #1F5BAE 69%, #2D6FCC 100%);
        color: #ffffff;
        }
        .service-card img {
        margin: 40px;
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
    <p><?php echo htmlspecialchars($user_logged_in); ?></p>
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
   </div>
   <div id="layanan" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="service-card" onclick="location.href='../dashboard/input.php'">
                    <img src="../assets/new.png" alt="estimate" height="100" width="100">
                    <p>Input Proyek baru anda untuk menganalisis prediksi biaya dan durasi proyek</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card" onclick="location.href='../dashboard/project.php'">
                    <img src="../assets/open.png" alt="predict" height="100" width="100">
                <p>Buka Proyek yang telah anda analisis</p>
                </div>
            </div>
        </div>
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