<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tags | Codingku</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,500;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
$code1 = '<?php';
$code2 = '  echo "<h1>Halo Dunia!</h1>";';
$code3 = '  /*';
$code4 = '  Ini adalah komentar multi-baris yang mencakup beberapa baris';
$code5 = '  /*';
$code6 = '  echo "<p>Saya sedang belajar PHP</p>";';
$code7 = '  echo "<p>Ini adalah program favorit saya</p>";';
$code8 = '?>';
?>
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 50%"></div>
      </div>
    </div>
    <div class="m-auto max-w-6xl">
      <h3 class="font-bold text-xl">MULTI LINE COMMENTS</h3> <br>
      <p>Multi-line comments digunakan untuk menulis komentar yang mengambil lebih dari satu baris.</p> <br>
      <p class="font-bold">Komentar multi-baris dimulai dengan /* dan diakhiri dengan */.</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . '<br>' . htmlspecialchars($code2) . '<br>' . '<br>' . htmlspecialchars($code3) . '<br>' . '<br>' . htmlspecialchars($code4) . '<br>' . '<br>' . htmlspecialchars($code5) . '<br>' . '<br>' . htmlspecialchars($code6) . '<br>' . '<br>' . htmlspecialchars($code7) . '<br>' . '<br>' . htmlspecialchars($code8);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Menambahkan komentar saat Anda menulis kode adalah praktik yang baik. Ini membantu orang lain memahami pemikiran Anda dan memudahkan Anda untuk mengingat kembali proses pemikiran Anda saat Anda merujuk ke kode Anda nanti.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="question.php?n=8">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="php1.php">Kembali</a></button>
    </div>
  </div>
</section>