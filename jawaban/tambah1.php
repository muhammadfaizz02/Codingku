<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $coption = $_POST['coption'];

    // include database connection file
    include_once("../koneksi.php");

    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO options(coption) VALUES('$coption')");

    // Show message when user added
    echo "Jawaban Berhasil Di tambahkan. <a href='Jawaban.php'>Lihat Jawaban</a>";
}
