<?php
$conn = mysqli_connect("localhost","root","","tech_test_db");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>