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
$code2 = '  $x = 14;';
$code3 = '  $y = 3;';
$code4 = '  echo $x % $y; // 2';
$code5 = '?>';
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
      <h3 class="font-bold text-xl">MODULUS</h3> <br>
      <p>Operator modulus, diwakili oleh tanda %, mengembalikan sisa pembagian operan pertama dengan operan kedua:</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1) . '<br>' . '<br>' . htmlspecialchars($code2) . '<br>' . '<br>' . htmlspecialchars($code3) . '<br>' . '<br>' . htmlspecialchars($code4) . '<br>' . '<br>' . htmlspecialchars($code5);
        ?>
      </div><br>
      <div class="px-3 py-2 m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Jika Kamu menggunakan angka floating point dengan operator modulus, angka tersebut akan diubah menjadi bilangan bulat sebelum operasi.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-14">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php3.php">Selanjutnya</a></button>
      <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="php1.php">Kembali</a></button>
    </div>
  </div>
</section>