<?php
include '../../koneksi.php';
session_start();
//Set Question Number
$number = $_GET['n'];
// var_dump($number);

//Query for the Question
$query = "SELECT * FROM questions WHERE question_number = $number";

// Get the question
$result = mysqli_query($conn, $query);
$question = mysqli_fetch_assoc($result);

//Get Choices
$query = "SELECT * FROM options WHERE question_number = $number";
$choices = mysqli_query($conn, $query);
// Get Total questions
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn, $query));


?>
<html>

<head>
  <title>Tags | Codingku</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,500;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <main>
    <div class="m-10">
      <img class="rounded-lg" src="gambar/<?php echo $question['question_image']; ?>"><br>
      <p class="question"><?php echo $question['question_text']; ?> </p>
      <form method="POST" action="process.php">
        <ul class="choicess">
          <?php while ($row = mysqli_fetch_assoc($choices)) { ?>
            <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" required><?php echo $row['coption']; ?></li>
          <?php } ?>


        </ul>
        <input type="hidden" name="number" value="<?php echo $number; ?>">
        <br>
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" name="submit" value="submit">submit</button>

      </form>


    </div>

  </main>

</body>

</html>