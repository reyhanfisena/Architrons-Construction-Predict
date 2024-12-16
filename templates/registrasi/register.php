<?php
session_start();
include '../config.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if ($password != $confirm_password) {
            $confirm_password_err = "Password did not match.";
        }
    }

    if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);

            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                header("location: succesreg.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
      Register - Architrons
     </title>
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
               .register-container {
                   background: rgba(255, 255, 255, 0.1);
                   padding: 40px;
                   border-radius: 15px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                   width: 400px;
                   text-align: center;
               }
               .register-container h2 {
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
               .form-control::placeholder {
                   color: white;
               }
               .input-group-text {
                   background: transparent;
                   border: none;
                   color: white;
               }
               .btn-primary {
                background: linear-gradient(to right, #0033cc, #6699ff);
                padding: 10px 20px;
                   border-radius: 20px;
                   font-weight: bold;
               }
               .btn-primary:hover {
                background: linear-gradient(to right, #6699ff, #0033cc);
            }
               .header {
                   position: absolute;
                   top: 20px;
                   left: 20px;
                   color: white;
                   font-size: 24px;
                   font-weight: bold;
               }
               .home-icon {
                   position: absolute;
                   top: 20px;
                   right: 20px;
                   color: white;
                   font-size: 24px;
               }
         </style>
        </head>
        <body>
         <div class="header">
          ARCHITRONS
         </div>
         <a class="home-icon" href="../home.html">
            <i class="bi bi-house-door-fill"></i>
        </i>
         </a>
         <div class="register-container">
          <h2>
           REGISTER
          </h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="input-group mb-3">
           <input name="email" aria-label="Email" class="form-control" placeholder="E-mail" type="email" required />
           <span class="input-group-text">
            <i class="fas fa-envelope">
            </i>
           </span>
          </div>
          <div class="input-group mb-3">
           <input name="password" aria-label="Password" class="form-control" placeholder="Password" type="password" required />
           <span class="input-group-text">
            <i class="fas fa-lock">
            </i>
           </span>
          </div>
          <div class="input-group mb-3">
           <input name="confirm_password" aria-label="Confirm Password" class="form-control" placeholder="Confirm Password" type="password" required />
           <span class="input-group-text">
            <i class="fas fa-lock">
            </i>
           </span>
          </div>
          <!--<button class="btn btn-primary" onclick="location.href='../registrasi/succesreg.php'">
           REGIST NOW
          </button>--> 
          <button class="btn btn-primary" type="submit">REGISTER NOW</button>
            </form>
            <div class="text-danger"><?php echo $email_err; ?></div>
            <div class="text-danger"><?php echo $email_err; ?></div>
            <div class="text-danger"><?php echo $confirm_password_err; ?></div>
         </div>
        </body>
       </html>
       