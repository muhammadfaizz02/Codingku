<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require "koneksi.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        /* * {
            border: 1px solid red;
        } */

    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins']
                    },
                    color: {
                        dp: '#110016',
                    },
                },
            },
        };
    </script>
    <title>Coding-Ku</title>
</head>

<body class="font-poppins text-white">
    <section class="bg-cover bg-right" style="background-image: url(gambar/k2.png)">
        <nav class="relative px-4 py-4 flex justify-between items-center bg-transparent">
            <a class="text-3xl font-bold leading-none" href="#">
                <svg class="h-10" alt="logo" viewBox="0 0 10240 10240">
                    <path xmlns="http://www.w3.org/2000/svg" d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"></path>
                </svg>
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-blue-600 p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-10">
                <li><a class="group hover:text-sky-400 transition duration-300" href="index.php">Beranda<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-400"></span></a></li>
                <li><a class="group hover:text-sky-400 transition duration-300" href="courses.php">Courses<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-400"></span></a></li>
                <li><a class="group hover:text-sky-400 transition duration-300" href="pengaturan.php">Pengaturan<span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-400"></span></a></li>
            </ul>
            <a class="hidden lg:inline-block py-2 px-6 text-white bg-gradient-to-r from-pink-500 to-violet-500 hover:scale-110 hover:-translate-y-1 shadow-lg hover:shadow-pink-500/60 hover:duration-300 text-sm font-bold  rounded-xl transition duration-75" href="logout.php">Log Out</a>
        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-white opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#">
                        <svg class="h-12" alt="logo" viewBox="0 0 10240 10240">
                            <path xmlns="http://www.w3.org/2000/svg" d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"></path>
                        </svg>
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="index.php">Beranda</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="courses.php">Courses</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="pengaturan.php">Pengaturan</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="pt-6">
                        <a class="hidden lg:inline-block py-2 px-6 text-white bg-gradient-to-r from-pink-500 to-violet-500 hover:scale-110 hover:-translate-y-1 shadow-lg hover:shadow-pink-500/60 hover:duration-300 text-sm font-bold  rounded-xl transition duration-75" href="logout.php">Log Out</a>
                    </div>
                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>Copyright © 2021</span>
                    </p>
                </div>
            </nav>
        </div>
        <script src="lp.js"></script>
        <div>
            <div class="md:flex-col md:justify-center md:items-center md:m-auto lg:justify-center lg:items-center lg:m-auto mb-10">
                <img src="gambar/lp1.1.png" class="mx-auto lg:float-right md:float-right lg:w-1/2 md:w-1/2 sm:w-9/12 w-3/5">
            </div>
            <div class="text-white text-center sm:text-center p-10 lg:py-64 md:py-48 lg:text-left md:text-left">
                <div class="lg:p-5 md:p-6">
                    <h2 class="lg:text-6xl md:text-5xl sm:text-5xl text-4xl font-bold">HI, SELAMAT</h2>
                    <h2 class="lg:text-6xl md:text-5xl sm:text-5xl text-4xl font-bold"> DATANG <span class="text-pink-500 drop-shadow-lg font-bold uppercase"><?= $_SESSION["username"]; ?></span></h2>
                    <h2 class="lg:text-6xl md:text-5xl sm:text-5xl text-4xl font-bold mb-5">NAMAKU <span class="text-pink-500 drop-shadow-lg font-bold">HUGO</span></h2>
                    <p class="lg:text-md md:lg:text-md sm:lg:text-md text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis laboriosam odit iusto quo enim. Nostrum minima dicta
                        distinctio eos laudantium?</p>
                    <div class="my-10">
                        <a class="py-6 px-12 bg-gradient-to-r from-pink-500 to-violet-500 hover:scale-110 hover:-translate-y-1 shadow-lg hover:shadow-pink-500/60 hover:duration-300 text-sm font-bold  rounded-xl transition duration-75" href="courses.php">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-10 bg-cover" style="background-image: url(gambar/bg4.png)">
        <h1 class="text-4xl p-20 font-bold text-center">KELEBIHAN <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-transparent bg-clip-text font-extrabold italic">CODING-KU</span></h1>
        <div class="lg:flex">
            <div class="container my-20 mx-auto py-6 px-6 max-w-sm bg-[#5E58B2] rounded-lg">
                <img src="gambar/lp2.1.png" class="mx-auto -mt-24 mb-4">
                <div class="px-6 text-center">
                    <h2 class="text-lg font-bold mb-5">Menyenangkan</h2>
                    <p class="text-sm">Pembelajaran yang efektif tidak harus selalu
                        membosankan, belajar dengan coding-ku
                        akan menyenangkan karena ditemani
                        steppenwolf yang ceria dan asyik</p>
                </div>
            </div>
            <div class="container my-20 mx-auto py-6 px-6 max-w-sm bg-[#5E58B2] rounded-lg">
                <img src="gambar/lp2.2.png" class="mx-auto -mt-24 mb-4">
                <div class="px-6 text-center">
                    <h2 class="text-lg font-bold mb-5">Gratis</h2>
                    <p class="text-sm">Belajar dengan Coding-Ku itu gratis, bisa
                        di akses dimana pun dan kapan pun</p>
                </div>
            </div>
            <div class="container my-20 mx-auto py-6 px-6 max-w-sm bg-[#5E58B2] rounded-lg">
                <img src="gambar/lp2.3.png" class="mx-auto -mt-24 mb-4">
                <div class="px-6 text-center">
                    <h2 class="text-lg font-bold mb-5">Lengkap</h2>
                    <p class="text-sm">Bahasa pemograman yang ada di sini lengkap
                        bisa dipilih sesuai dengan yang kamu minati,
                        seperti full-stack developer, back end developer dan front end developer</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20" style="background-image: url(gambar/k2.png)">
        <div class="lg:max-w-2xl md:max-w-lg sm:max-w-xs max-w-xs mx-auto p-10 bg-indigo-900 rounded-xl my-10">
            <img src="gambar/lp3.png" class="lg:w-5/12 md:w-2/5 sm:w-4/5 w-4/5 -mt-14 float-left -ml-44 lg:-mt-44 md:-mt-24 sm:-mt-14 m-4">
            <h2 class="text-lg text-white font-bold mb-2">Cara Belajar Efektif No#1 Di Dunia</h2>
            <p class="text-sm text-white">Belajar dengan Coding-Ku itu seru,efektif dan tidak membosankan,
                dengan metode pembelajaran menarik seperti ini materi akan lebih
                mudah dipahami, selain itu ada fitur fitur menarik seperti koin,
                kostum yang membuat belajar semakin seru</p>
        </div>
    </section>
    <section class="bg-cover p-20" style="background-image: url(gambar/bg4.png)">
        <div class="lg:text-4xl md:text-3xl text-2xl font-bold text-center text-white mb-20">
            <h2><SPAN class="text-pink-400">BELAJAR</SPAN> DAN <SPAN class="text-pink-400">ASAH</SPAN></h2>
            <h2>KEMAMPUAN KAMU</h2>
        </div>
        <div class="lg:flex lg:justify-evenly md:flex md:justify-evenly">
            <div class="w-60 h-fit sm:mb-16 mb-16 bg-[#5E58B2] rounded-t-lg rounded-b-lg lg:mx-0 mx-auto shadow-xl">
                <div>
                    <img src="gambar/lp11.png" class="lg:-mt-4 md:-mt-4 sm:-mt-4 mt-4">
                </div>
                <div class="w-60 p-10 text-center text-white bg-[#3E3982] rounded-b-lg">
                    <h2 class="font-bold text-md mb-3">Professional</h2>
                    <p class="text-sm">Bisa digunakan untuk mengasah skill kamu</p>
                    <div class="mt-4">
                        <a href="courses.php" class="text-sm px-12 py-2 rounded-lg bg-gradient-to-r from-violet-500 to-pink-500 shadow-lg hover:shadow-pink-500/60">Mulai</a>
                    </div>
                </div>
            </div>
            <div class="w-60 h-fit bg-[#5E58B2] rounded-t-lg rounded-b-lg shadow-xl lg:mx-0 mx-auto">
                <div>
                    <img src="gambar/lp12.png" class="lg:-mt-14 md:-mt-14 sm:-mt-14 mt-14">
                </div>
                <div class="w-60 p-10 text-center text-white bg-[#3E3982] rounded-b-lg">
                    <h2 class="font-bold text-md mb-3">Pemula</h2>
                    <p class="text-sm">Bisa digunakan untuk mengasah skill kamu</p>
                    <div class="mt-4">
                        <a href="courses.php" class="text-sm px-12 py-2 rounded-lg bg-gradient-to-r from-violet-500 to-pink-500 shadow-lg hover:shadow-pink-500/60">Mulai</a>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-black overflow-hidden">
        <div class="flex justify-center p-20">
            <div class="mr-40">
                <h1 class="font-semibold text-lg">KONTAK</h1>
                <p class="p-5"><img src="gambar/email.png" class="float-left mr-2 -mt-1">codingku@gmail.com</p>
                <p class="p-5"><img src="gambar/telp.png" class="float-left mr-2 -mt-1"> 0812-4231-3432</p>
            </div>
            <div class="mr-40 ">
                <h1 class="font-semibold text-lg">INFORMASI</h1>
                <p class="p-5">Website Belajar Pemograman</p>
                <p class="p-5">Programmer</p>
            </div>
            <div class="">
                <h1 class="font-semibold text-lg">LOKASI</h1>
                <p class="p-5">Bandung, Jawa Barat</p>
            </div>
        </div>
    </section>
</body>

</html>