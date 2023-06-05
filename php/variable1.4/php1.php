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
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 20%"></div>
      </div>
    </div>
    <div class="m-auto max-w-6xl">
      <h3 class="font-bold text-xl">VARIABLES SCOPE</h3> <br>
      <p>Variabel PHP dapat dideklarasikan di mana saja dalam skrip.
        Ruang lingkup variabel adalah bagian dari skrip di mana variabel dapat dirujuk atau digunakan.</p><br>
      <p>Cakupan variabel PHP yang paling banyak digunakan adalah lokal, global. <br>
        Variabel yang dideklarasikan di luar fungsi memiliki cakupan global. <br>
        Variabel yang dideklarasikan dalam suatu fungsi memiliki cakupan lokal, dan hanya dapat diakses dalam fungsi tersebut.</p><br>
      <p>Perhatikan contoh berikut.</p> <br>
      <img class="rounded-lg" src="php1.jpeg"> <br>
      <p>Skrip ini akan menghasilkan kesalahan, karena variabel $name memiliki cakupan global, dan tidak dapat diakses dalam fungsi getName(). Ketuk lanjutkan untuk melihat bagaimana fungsi dapat mengakses variabel global.</p> <br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Function akan dibahas dalam pelajaran mendatang.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php2.php">Selanjutnya</a></button>
    </div>
  </div>
</section>