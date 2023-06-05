<?php

session_start();
if (!isset($_SESSION["username"])) {
  echo "login hela bangke <br><a href='login.php'>didie</a>";
  exit;
}
include('koneksi.php');
$sql = mysqli_query($conn, "UPDATE users SET koin = koin + 50 WHERE username = '{$_SESSION['username']}' ") or die(mysqli_error($conn));

if ($sql) {
  echo "<script>alert('anda mendapatkan koin 50!'); document.location.href = 'tailwind.php';</script>";
} else {
  echo "<script>alert('gagal');</script>";
}
