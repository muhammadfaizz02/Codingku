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
$code1 = '$variable_name = value';
$code2 = '<?php';
$code3 = '  $nama = "John"';
$code4 = '  $umur = 25';
$code5 = '  echo $nama';
$code6 = '  // output "John"';
$code7 = '?>';
?>
<section class="font-poppins">
  <div class="flex flex-col">
    <div class="relative">
      <div><a href="../../tailwind.php"><img src="../../gambar/x1.png" class="absolute top-5 left-5 opacity-40"></a></div>
    </div>
    <div class="m-auto my-10 mb-20">
      <div class="w-96 bg-gray-200 rounded-full h-3">
        <div class="bg-purple-600 h-3 rounded-full" style="width: 33%"></div>
      </div>
    </div>
    <div class="m-auto max-w-6xl">
      <h3 class="font-bold text-xl">VARIABLES</h3> <br>
      <p>Variabel digunakan sebagai "wadah" tempat kami menyimpan informasi.
        Variabel PHP dimulai dengan tanda dolar ($), yang diikuti dengan nama variabel.</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code1);
        ?>
      </div><br>
      <p>Aturan untuk variabel PHP: <br>
        - Nama variabel harus dimulai dengan huruf atau garis bawah <br>
        - Nama variabel tidak boleh dimulai dengan angka <br>
        - Nama variabel hanya boleh berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ ) <br>
        - Nama variabel peka huruf besar kecil ($nama dan $NAME akan menjadi dua variabel yang berbeda)</p><br>
      <p>contoh :</p><br>
      <div class="bg-black p-10 rounded-lg text-white">
        <?php
        echo htmlspecialchars($code2) . '<br>' . '<br>' . htmlspecialchars($code3) . '<br>' . '<br>' . htmlspecialchars($code4) . '<br>' . '<br>' . htmlspecialchars($code5) . '<br>' . '<br>' . htmlspecialchars($code6) . '<br>' . '<br>' . htmlspecialchars($code7);
        ?>
      </div><br>
      <p>Pada contoh di atas, perhatikan bahwa kita tidak perlu memberi tahu PHP tipe data mana dari variabel tersebut. <br>
        PHP secara otomatis mengonversi variabel ke tipe data yang benar, tergantung nilainya.</p><br>
      <div class="px-3 py-2 text-center m-auto bg-yellow-200 max-w-4xl rounded-lg">
        <p>Tidak seperti bahasa pemrograman lainnya, PHP tidak memiliki perintah untuk mendeklarasikan variabel. Itu dibuat saat Anda pertama kali memberikan nilai padanya.</p>
      </div> <br>
    </div>
    <div class="text-center mx-36 my-5">
      <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="question.php?n=10">Mulai</a></button>
    </div>
  </div>
</section>