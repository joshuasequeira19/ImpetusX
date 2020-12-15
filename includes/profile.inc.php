<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'multi_login');

if (mysqli_connect_errno()) {
  echo "Failed to connect to server " . mysqli_connect_error();
  exit();
}

$user = $_SESSION["user"]["user_name"];

$email = $_POST["email"];
$bio = $_POST["bio"];


$query = "UPDATE users SET email='$email', bio='$bio' WHERE user_name='$user'";

mysqli_query($db, $query);

header('location: ../profile.php');





?>