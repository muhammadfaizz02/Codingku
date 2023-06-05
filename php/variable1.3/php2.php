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
$code1 = '<?php';
$code2 = '  $x = 42.168;';
$code3 = '  $x = true; $y = false';
$code4 = '  $str = "10";';
$code5 = '  $int = 20;';
$code6 = '  $sum = $str + $int;';
$code7 = '  echo ($sum);';
$code8 = '  // Outputs 30';
$code9 = '?>';
?>
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 40%"></div>
      </div>
    </div>
    <div class="m-auto max-w-6xl">
      <h3 class="font-bold text-xl">PHP Float</h3> <br>
      <p>Angka mengambang, atau angka titik mengambang, adalah angka yang menyertakan titik desimal.</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . htmlspecialchars($code2) . '<br>' . htmlspecialchars($code9);
        ?>
      </div><br>
      <h3 class="font-bold text-xl">PHP Boolean</h3> <br>
      <p>Boolean mewakili dua status yang mungkin: TRUE atau FLASE.</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . htmlspecialchars($code3) . '<br>' . htmlspecialchars($code9);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Boolean sering digunakan dalam pengujian bersyarat, yang akan dibahas nanti dalam kursus.</p>
      </div> <br>
      <p>Sebagian besar tipe data dapat digunakan dalam kombinasi satu sama lain. Dalam contoh ini, string dan integer disatukan untuk menentukan jumlah dari dua angka.</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . htmlspecialchars($code4) . '<br>' . htmlspecialchars($code5) . '<br>' . htmlspecialchars($code6) . '<br>' . htmlspecialchars($code7) . '<br>' . '<br>' . htmlspecialchars($code8) . '<br>' . htmlspecialchars($code9);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>PHP secara otomatis mengubah setiap variabel menjadi tipe data yang benar, sesuai dengan nilainya. Inilah mengapa variabel $str diperlakukan sebagai angka tambahan.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="question.php?n=12">Mulai</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="php1.php">Kembali</a></button>
    </div>
  </div>
</section>