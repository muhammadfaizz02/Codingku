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
$code1 = '$x++; // equivalent to $x = $x+1;';
$code2 = '$x--; // equivalent to $x = $x-1;';
$code3 = '$x++; // post-increment';
$code4 = '$x--; // post-decrement';
$code5 = '++$x; // pre-increment';
$code6 = '--$x; // pre-decrement';
$code7 = '$a = 2; $b = $a++; // $a=3, $b=2';
$code8 = '$a = 2; $b = ++$a; // $a=3, $b=3';
?>
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 60%"></div>
      </div>
    </div>
    <div class="m-auto max-w-6xl">
      <h3 class="font-bold text-xl">INCREMENT DAN DECREMENT</h3> <br>
      <p>Operator kenaikan digunakan untuk menaikkan nilai variabel. <br>
        Operator pengurangan digunakan untuk mengurangi nilai variabel.</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . '<br>' . htmlspecialchars($code2);
        ?>
      </div><br>
      <p>Operator kenaikan dan penurunan baik mendahului atau mengikuti variabel.</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code3) . '<br>' . '<br>' . htmlspecialchars($code4) . '<br>' . '<br>' . htmlspecialchars($code5) . '<br>' . '<br>' . htmlspecialchars($code6);
        ?>
      </div><br>
      <p>Perbedaannya adalah post-increment mengembalikan nilai asli sebelum mengubah variabel, sedangkan pre-increment mengubah variabel terlebih dahulu dan kemudian mengembalikan nilainya.</p> <br>
      <p>contoh :</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code7) . '<br>' . '<br>' . htmlspecialchars($code8);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Operator kenaikan digunakan untuk menaikkan nilai variabel.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="question.php?n=17">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="php2.php">Kembali</a></button>
    </div>
  </div>
</section>