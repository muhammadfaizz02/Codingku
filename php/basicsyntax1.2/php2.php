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
$code3 = '<?';
$code4 = '?>';
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
    <div class="m-auto">
      <h3 class="font-bold">Syntax PHP</h3> <br>
      <p>Anda juga dapat menggunakan tag PHP singkatan, <b><?php echo htmlspecialchars($code3) . ' dan ' . htmlspecialchars($code4); ?></b>, asalkan didukung oleh server.</p> <br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code3) . '<br>' . htmlspecialchars($code2) . '<br>' . htmlspecialchars($code4);
        ?>
      </div><br>
      <div class="px-3 m-auto py-2 bg-yellow-200 max-w-md rounded-lg">
        <p>Namun <?php echo htmlspecialchars($code1) . ' dan ' . htmlspecialchars($code4); ?> sebagai standar resmi, adalah cara yang direkomendasikan untuk mendefinisikan skrip PHP.</p>
      </div> <br>
    </div>
  </div>
  <div class="text-center mx-56 mt-52">
    <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="question.php?n=3">Selanjutnya</a></button>
    <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="php1.php">Kembali</a></button>
  </div>
</section>