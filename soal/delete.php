<?php
// include database connection file
include_once("../koneksi.php");

// Get id from URL to delete that user
$question_number = $_GET['question_number'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM questions WHERE question_number=$question_number");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:soal.php");
