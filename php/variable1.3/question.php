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
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 80%"></div>
      </div>
    </div>
    <div class="m-auto">
      <img class="rounded-lg" src="gambar/<?php echo $question['question_image']; ?>"><br>
      <p><?php echo $question['question_text']; ?> </p> <br>
      <form method="POST" action="process.php">
        <ul class="choicess">
          <?php while ($row = mysqli_fetch_assoc($choices)) { ?>
            <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" required><?php echo $row['coption']; ?></li>
          <?php } ?>

        </ul>
        <input type="hidden" name="number" value="<?php echo $number; ?>">
        <br>
        <div class="text-center mt-20">
          <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg" name="submit" value="submit">Selanjutnya</a></button>
        </div>
    </div>
</section>