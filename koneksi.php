<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "codingku";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
  die("<script>alert('koneksi gagal!')</script>" . mysqli_connect_error());
}
