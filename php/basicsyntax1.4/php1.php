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
$code3 = '  //Ini adalah komentar tunggal';
$code4 = '  echo "<p>Saya sedang belajar PHP</p>";';
$code5 = '  echo "<p>Ini adalah program favorit saya</p>";';
$code6 = '?>';
?>
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 25%"></div>
      </div>
    </div>
    <div class="m-auto max-w-4xl">
      <h3 class="font-bold text-xl">COMMENTS</h3> <br>
      <p>Dalam kode PHP, komentar adalah baris yang tidak dijalankan sebagai bagian dari program. Anda dapat menggunakan komentar untuk berkomunikasi dengan orang lain sehingga mereka mengerti apa yang Anda lakukan, atau sebagai pengingat untuk diri Anda sendiri tentang apa yang Anda lakukan.</p> <br>
      <p class="font-bold">Komentar satu baris dimulai dengan //:</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . '<br>' . htmlspecialchars($code2) . '<br>' . '<br>' . htmlspecialchars($code3) . '<br>' . '<br>' . htmlspecialchars($code4) . '<br>' . '<br>' . htmlspecialchars($code5) . '<br>' . '<br>' . htmlspecialchars($code6);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-md rounded-lg">
        <p>Jalankan kode dan lihat cara kerjanya!</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php2.php">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="../../tailwind.php">Kembali</a></button>
    </div>
  </div>
</section>