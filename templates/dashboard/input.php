<?php
session_start();
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
        .form-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .form-container h5 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
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

   <!-- Menampilkan pesan konfirmasi jika ada -->
    <?php
// Periksa apakah sesi sudah dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ambil pesan dari sesi, jika ada
$confirmationMessage = $_SESSION['confirmationMessage'] ?? null;

// Hapus pesan dari sesi setelah diambil
unset($_SESSION['confirmationMessage']);
?>


<div class="content">
    <?php if (!empty($confirmationMessage)): ?>
        <div class="alert alert-success">
            <?php echo htmlspecialchars($confirmationMessage); ?>
        </div>
    <?php endif; ?>
</div>


   <div class="form-container">
    <h5>
     Input Proyek
    </h5>
    <form method="POST" action="project.php">
     <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="tipeRumah">
       Tipe Rumah
      </label>
      <div class="col-sm-9">
         <input class="form-control" id="tipeRumah" name="tipeRumah" placeholder="Tipe Rumah" type="text" required />
      </div>
     </div>
     <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="luasTanah">Luas Tanah</label>
      <div class="col-sm-9">
         <input class="form-control" id="luasTanah" name="luasTanah" placeholder="m²" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="luasBangunan">Luas Bangunan</label>
      <div class="col-sm-9">
         <input class="form-control" id="luasBangunan" name="luasBangunan" placeholder="m²" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="jumlahLantai">Jumlah Lantai</label>
      <div class="col-sm-9">
         <input class="form-control" id="jumlahLantai" name="jumlahLantai" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="jumlahKamarMandi">Jumlah Kamar Mandi</label>
      <div class="col-sm-9">
         <input class="form-control" id="jumlahKamarMandi" name="jumlahKamarMandi" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="jumlahKamarTidur">Jumlah Kamar Tidur</label>
      <div class="col-sm-9">
         <input class="form-control" id="jumlahKamarTidur" name="jumlahKamarTidur" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="tipeAtap">Tipe Atap</label>
      <div class="col-sm-9">
         <input class="form-control" id="tipeAtap" name="tipeAtap" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="tipeDinding">Tipe Dinding</label>
      <div class="col-sm-9">
         <input class="form-control" id="tipeDinding" name="tipeDinding" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="tipePondasi">Tipe Pondasi</label>
      <div class="col-sm-9">
         <input class="form-control" id="tipePondasi" name="tipePondasi" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="materialUtama">Material Utama</label>
      <div class="col-sm-9">
         <input class="form-control" id="materialUtama" name="materialUtama" type="text" required />
      </div>
   </div>
   <div class="form-group row">
      <label class="col-sm-3 col-form-label" for="jumlahTenagaKerja">Jumlah Tenaga Kerja</label>
      <div class="col-sm-9">
         <input class="form-control" id="jumlahTenagaKerja" name="jumlahTenagaKerja" type="text" required />
      </div>
   </div>
   <div class="form-group row">
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Predict</button>
        </div>
    </form>
   </div>
  </div>
  <script>
   function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('expanded');
            content.classList.toggle('expanded');
   };
  </script>
 </body>
</html>
