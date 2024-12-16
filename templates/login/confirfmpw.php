<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    <style>
        body {
            background: linear-gradient(121.11deg, #156AE2 -41.36%, #094DAC -22.62%, #4A76B3 8.24%, #466A9B 19.23%, #14386B 28.94%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .reset-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .reset-container h2 {
            color: white;
            margin-bottom: 30px;
        }
        .form-control {
            background: transparent;
            border: none;
            border-bottom: 1px solid white;
            border-radius: 0;
            color: white;
            margin-bottom: 20px;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: white;
        }
        .btn-primary {
            background: linear-gradient(to right, #0033cc, #6699ff);
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 20px;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #6699ff, #0033cc);
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            color: white;
            font-weight: bold;
        }
        .home-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
        }
    
    </style>
</head>
<body>
    <div class="logo">ARCHITRONS</div>
    <div class="home-icon">
        <a class="text-white" href="../home.html">
            <i class="bi bi-house-door-fill"></i>
        </a>
    </div>
    <div class="reset-container">
        <h2>LUPA PASSWORD</h2>
        <div>
            <form method="POST">
            <input class="form-control" name="new_password" id="password" placeholder="New Password" type="password" required />
            <input class="form-control" name="confirm_password" id="password" placeholder="Confirm Password" type="password" required />
            </div>
            <button class="btn btn-primary" type="submit" onclick="location.href='../login/succesresetpw.php'">RESET PASSWORD</button>
            </form>
        </div>
    </div>

</body>
<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
        if (mysqli_query($conn, $sql)) {
            header("Location: succesresetpw.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Password do not match!";
    }
}
?>
</html>