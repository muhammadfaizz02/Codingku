<?php
include '../../koneksi.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn, $query));


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
        <div class="bg-purple-600 h-3 rounded-full" style="width: 25%"></div>
      </div>
    </div>
    <div class="m-auto flex">
      <div class="mr-10">
        <img src="../../gambar/s1.png">
      </div>
      <div class="max-w-4xl p-10 border-2 border-slate-400 rounded-lg shadow-xl relative">
        <div class="absolute -left-3 top-16 transform rotate-45 w-6 h-6 border-b-slate-400 border-l-slate-400 bg-white border-2 border-white"></div>
        <h1 class="text-3xl font-bold">Ini adalah lesson pertama anda!</h1><br>
        <h3 class="text-xl font-bold">Wellcome to PHP</h3><br>
        <p>PHP: Hypertext Preprocessor (PHP) adalah bahasa skrip open source gratis yang sangat populer. Skrip PHP dijalankan di server. <br>

          Hanya daftar singkat dari kemampuan PHP: <br>
          - Menghasilkan konten halaman dinamis <br>
          - Membuat, membuka, membaca, menulis, menghapus, dan menutup file di server <br>
          - Mengumpulkan data formulir <br>
          - Menambah, menghapus, dan memodifikasi informasi yang tersimpan di database Anda <br>
          - mengontrol akses pengguna <br>
          - mengenkripsi data <br>
          - dan banyak lagi! <br>

          Sebelum memulai tutorial ini, Anda harus memiliki pemahaman dasar tentang <b>HTML</b>.</p>

        <br>
      </div>
    </div>
    <div class="text-center mx-56 mt-20">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php2.php">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="../../tailwind.php">Kembali</a></button>
    </div>
  </div>
</section>