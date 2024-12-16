<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_GET['success']) || $_GET['success'] != 1) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <title>
          ARCHITRONS
         </title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>         <style>
          body {
                   background-color: #f8f9fa;
                   font-family: Arial, sans-serif;
               }
               .header {
                   background: linear-gradient(to bottom, #094DAC, #4A76B3);
                   padding: 20px;
                   text-align: left;
                   color: white;
                   font-weight: bold;
               }
               .content {
                   display: flex;
                   justify-content: center;
                   align-items: center;
                   height: 80vh;
               }
               .card {
                   border-radius: 10px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                   padding: 20px;
                   text-align: center;
                   background-color: white;
               }
               .card .icon {
                   font-size: 50px;
                   color: green;
                   margin-right: 10px;
               }
               .card h5 {
                   display: flex;
                   align-items: center;
                   justify-content: center;
                   margin-top: 20px;
               }
               .card p {
                   margin-top: 20px;
               }
               .btn-primary {
                   background: linear-gradient(to right, #007bff, #00c6ff);
                   border: none;
                   border-radius: 20px;
                   padding: 10px 20px;
                   font-weight: bold;
                   margin-top: 20px;
               }
         </style>
</head>
    <body>
         <div class="header">
          ARCHITRONS
         </div>
         <div class="content">
          <div class="card">
           <h5>
            <i class="fas fa-check-circle icon">
            </i>
            Selamat Password anda telah diperbarui!
           </h5>
           <p>
            Silahkan kembali ke halaman Login
           </p>
           <button class="btn btn-primary" onclick="location.href='../login/login.html'">
            LOGIN
           </button>
          </div>
         </div>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js">
         </script>
     </body>
</html>