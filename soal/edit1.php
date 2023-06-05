<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $question_number = $_POST['question_number'];

    $question_text = $_POST['question_text'];

    // update user data
    $result = mysqli_query($conn, "UPDATE questions SET question_text='$question_text' WHERE question_number=$question_number");

    // Redirect to homepage to display updated user in list
    header("Location: admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$question_number = $_GET['question_number'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM questions WHERE question_number=$question_number");

while ($user_data = mysqli_fetch_array($result)) {
    $question_text = $user_data['question_text'];
}
?>