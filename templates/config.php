<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "architrons";

$conn = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

