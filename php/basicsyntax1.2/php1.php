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
$code2 = '  echo "Hallo Dunia!"';
$code3 = '?>';
$code4 = '  // kode PHP disini';
$code5 = '<!DOCTYPE html>';
$code6 = '<html lang="en">';
$code7 = '<head>';
$code8 = '<title>PHP pertama saya</title>';
$code9 = '</head>';
$code10 = '<body>';
$code11 = '</body>';
$code12 = '</html>';
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
    <div class="m-auto">
      <h3 class="font-bold">Syntax PHP</h3> <br>
      <p>Skrip PHP dimulai dengan membuka tags PHP dan diakhiri dengan tags PHP.</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . htmlspecialchars($code4) . '<br>' . htmlspecialchars($code3);
        ?>
      </div><br>
      <p>Berikut adalah contoh file PHP sederhana. Skrip PHP menggunakan fungsi bawaan yang disebut "echo" untuk menampilkan teks "Hello World!" ke halaman web.</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code5) . '<br>' . htmlspecialchars($code6) . '<br>' . htmlspecialchars($code7) . '<br>' . htmlspecialchars($code8) . '<br>' . htmlspecialchars($code9) . '<br>' . htmlspecialchars($code10) . '<br>' . htmlspecialchars($code1) . '<br>' . htmlspecialchars($code2) . '<br>' . htmlspecialchars($code3) . '<br>' . htmlspecialchars($code11) . '<br>' . htmlspecialchars($code12);
        ?>
      </div>
      <div class="m-auto my-5 px-3 py-2 bg-yellow-200 max-w-md rounded-lg">
        <p>Pernyataan PHP diakhiri dengan titik koma (;).</p>
      </div> <br>
    </div>
    <div class="text-center mx-56 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php2.php">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="../../tailwind.php">Kembali</a></button>
    </div>
  </div>
</section>