<?php

session_start();

?>

<html>

<head>
  <title>Codingku</title>
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
        <div class="bg-purple-600 h-3 rounded-full" style="width: 100%"></div>
      </div>
    </div>
    <div class="m-auto flex flex-col">
      <div class="m-auto">
        <img src="../../gambar/f.png">
      </div>
      <div class="max-w-4xl p-10 border-2 border-slate-400 rounded-lg shadow-xl">
        <p>Selamat kamu baru saja mempelajari Operator pada PHP. Jangan lupa untuk berlatih terus agar kamu semakin ahli!!</p>
        <p>Selamat kamu mendapatkan <b>Score</b> <b><?php echo $_SESSION['score']; ?> <?php unset($_SESSION['score']); ?></b></p>
      </div>
    </div>
    <div class="text-center mx-56 mt-36">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="../operator1.2/php1.php">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="../../tailwind.php">Selesai</a></button>
    </div>
  </div>
</section>