<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'multi_login');

if (mysqli_connect_errno()) {
  echo "Failed to connect to server " . mysqli_connect_error();
  exit();
}

$user = $_SESSION["user"]["email"];
$post = $_POST["post"];
$type = $_POST["type"];
$title = $_POST["title"];


$query = "INSERT INTO post (user_name, post, type, title) VALUES('$user', '$post', '$type', '$title')";

mysqli_query($db, $query);

header('location: ../upload.php');





?>