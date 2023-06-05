<?php

session_start();

?>

<html>

<head>
  <title>Codingku</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,500;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <main>
    <div class="m-10">
      <h2 class="font-bold">Pelajaran selesai!</h2>
      <img class="drop-shadow-2xl" src="lp2.2.png"> <br>
      <p>Anda baru saja mempelajari Pengantar PHP. Jangan lupa untuk menguji pengetahuan Anda dengan latihan!</p><br>
      <p>Your <strong>Score</strong> is <b><?php echo $_SESSION['score']; ?></b> </p>
      <?php unset($_SESSION['score']); ?><br>
      <div>
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"><a href="../array1.2/php1.php">selanjutnya</a></button>
      </div>
    </div>

  </main>
</body>

</html>