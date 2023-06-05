<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables | Codingku</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,500;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
$code1 = '$num1 = 5';
$code2 = '$num1 = $num1';
$code3 = '<?php';
$code4 = ' $x = 50;';
$code5 = ' $x += 50;';
$code6 = 'echo $x;';
$code7 = '// outputs : 150';
$code8 = '?>';
?>
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 33%"></div>
      </div>
    </div>
    <div class="m-auto max-w-6xl">
      <h3 class="font-bold text-xl">ASSIGNMENT OPERATORS</h3> <br>
      <p>Operator penugasan digunakan untuk menulis nilai ke variabel.</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . htmlspecialchars($code2);
        ?>
      </div><br>
      <p class="font-bold">$num1 dan $num2 sekarang berisi nilai 5.</p> <br>
      <p>Penugasan juga dapat digunakan bersama dengan operator aritmatika.</p> <br>
      <img class="rounded-lg" src="php2.jpeg"> <br>
      <p>Contoh :</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code3) . '<br>' . htmlspecialchars($code4) . '<br>' . htmlspecialchars($code5) . '<br>' . htmlspecialchars($code6) . '<br>' . '<br>' . htmlspecialchars($code7) . '<br>' . htmlspecialchars($code8);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Jalankan kode dan lihat cara kerjanya!</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="question.php?n=20">Mulai</a></button>
    </div>
  </div>
</section>