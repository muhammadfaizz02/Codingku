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
$code2 = '  $int1 = 42; // positive number';
$code3 = '  $int2 = -42; // negative number';
$code4 = '?>';
?>
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
      <h3 class="font-bold text-xl">DATA TYPES</h3> <br>
      <p>Variabel dapat menyimpan berbagai tipe data. <br>
        Tipe data yang didukung oleh PHP: String, Integer, Float, Boolean, Array, Object, NULL, Resource.</p><br>
      <p>PHP String</p><br>
      <p>String adalah rangkaian karakter, seperti "Halo dunia!" <br>
        String dapat berupa teks apa pun dalam kumpulan tanda kutip tunggal atau ganda.</p> <br>
      <img class="rounded-lg" src="php1.jpeg"> <br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Tidak seperti bahasa pemrograman lainnya, PHP tidak memiliki perintah untuk mendeklarasikan variabel. Itu dibuat saat Anda pertama kali memberikan nilai padanya.</p>
      </div> <br>
      <p>PHP Integer</p> <br>
      <p>Bilangan bulat adalah bilangan bulat (tanpa desimal) yang harus sesuai dengan kriteria berikut: <br>
        - Tidak boleh berisi koma atau kosong <br>
        - Tidak boleh titik desimal <br>
        - Itu bisa positif atau negatif</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>'  . htmlspecialchars($code2)  . '<br>' . htmlspecialchars($code3) . '<br>' . htmlspecialchars($code4);
        ?>
      </div><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Variabel dapat menyimpan berbagai tipe data.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php2.php">Selanjutnya</a></button>
    </div>
  </div>
</section>