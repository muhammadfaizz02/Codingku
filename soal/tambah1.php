<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $question_text = $_POST['question_text'];

    // include database connection file
    include_once("../koneksi.php");

    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO questions(question_text) VALUES('$question_text')");

    // Show message when user added
    echo "User added successfully. <a href='soal.php'>View Users</a>";
}
