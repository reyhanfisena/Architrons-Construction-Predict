<?php
session_start();
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(135deg, #156AE2 0%, #094DAC 27%, #4A76B2 71%, #466A9B 86%, #14386B 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        .login-container h2 {
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
        .forgot-password, .register {
            color: white;
            font-size: 12px;
        }
        .forgot-password {
            float: right;
        }
        .register {
            margin-top: 20px;
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
    <div class="login-container">
        <h2>Login</h2>
        <div>
            <form method="POST">
            <div id="error-message" class="error-message"></div>
            <input class="form-control" name="email" placeholder="E-mail" type="email" required />
            <input class="form-control" name="password" id="password" placeholder="Password" type="password" required />
            <div class="forgot-password">
                <a class="text-white" href="forgetpassword.php">Forgot the Password?</a>
            </div>
            <button class="btn btn-primary" type="submit">LOGIN</button>
            <div class="register">
                Don't have an account yet? <a class="text-white" href="../registrasi/register.php"">Register Now</a>
            </div>
            </form>
        </div>
    </div>

</body>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "<script>window.location.href = '../dashboard/index.php';</script>";
            exit();
        } else {
            echo "<script>document.getElementById('error-message').innerText = 'Invalid password!';</script>";
        }
    } else {
        echo "<script>document.getElementById('error-message').innerText = 'Email not found!';</script>";
    }
}
?>
</html>