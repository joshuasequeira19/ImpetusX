<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'multi_login');

if (mysqli_connect_errno()) {
  echo "Failed to connect to server " . mysqli_connect_error();
  exit();
}



$query="DELETE FROM users where id=".$_GET['id'];

mysqli_query($db, $query);

header('location: ../admincontrol.php?info=del');





?>