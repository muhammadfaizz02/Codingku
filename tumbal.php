<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        /* * {
            border: 1px solid red;
        } */
    </style>
    <title>Tumbal</title>
</head>

<body class="pb-20">
    <section class="bg-cover bg-right" style="background-image: url(gambar/k2.png)">
        <div>
            <div class="md:flex-col md:justify-center md:items-center md:m-auto lg:justify-center lg:items-center lg:m-auto mb-10">
                <img src="gambar/lp1.1.png" class="mx-auto lg:float-right md:float-right lg:w-1/2 md:w-1/2 sm:w-9/12 w-3/5">
            </div>
            <div class="text-white text-center sm:text-center p-10 lg:py-64 md:py-48 lg:text-left md:text-left">
                <div class="lg:p-5 md:p-6">
                    <h2 class="lg:text-6xl md:text-5xl sm:text-5xl text-4xl font-bold">HI, SELAMAT</h2>
                    <h2 class="lg:text-6xl md:text-5xl sm:text-5xl text-4xl font-bold"> DATANG <span class="text-pink-500 drop-shadow-lg font-bold uppercase"></span></h2>
                    <h2 class="lg:text-6xl md:text-5xl sm:text-5xl text-4xl font-bold mb-5">NAMAKU <span class="text-pink-500 drop-shadow-lg font-bold">HUGO</span></h2>
                    <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perferendis laboriosam odit iusto quo enim. Nostrum minima dicta
                        distinctio eos laudantium?</p>
                    <div class="my-10">
                        <a class="py-6 px-12 bg-gradient-to-r from-pink-500 to-violet-500 hover:scale-110 hover:-translate-y-1 shadow-lg hover:shadow-pink-500/60 hover:duration-300 text-sm font-bold  rounded-xl transition duration-75" href="courses.php">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-cover p-20" style="background-image: url(gambar/bg4.png)">
        <div class="lg:text-4xl md:text-3xl text-2xl font-bold text-center text-white mb-20">
            <h2><SPAN class="text-pink-400">BELAJAR</SPAN> DAN <SPAN class="text-pink-400">ASAH</SPAN></h2>
            <h2>KEMAMPUAN KAMU</h2>
        </div>
        <div class="lg:flex lg:justify-evenly md:flex md:justify-evenly">
            <div class="w-60 h-fit mb-16 bg-[#5E58B2] rounded-t-lg rounded-b-lg lg:mx-0 mx-auto shadow-xl">
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

                </div>
            </div>
            <div class="text-center mx-56 mt-20">
                <button class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded-lg"><a href="php2.php">Selanjutnya</a></button>
                <button class="float-left bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded-lg"><a href="../../tailwind.php">Kembali</a></button>
            </div>
        </div>
        <button onclick="lihat1()" class=" px-10 py-8 shadow-lg shadow-purple-700 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500">2</button>
        <div class="content1 hidden">
            <p>Asu Woy</p>
        </div>
        <button onclick="lihat2()" class="gelo px-10 py-8 shadow-lg shadow-purple-700 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500">2</button>
        <div id="content2" class="hidden">
            <img src="gambar/lp.png">
        </div>
    </section>
    <script>
        const gblk = document.querySelector(".gelo");
        gblk.disabled = true;


        function lihat1() {
            var b = document.getElementsByClassName('content1')[0];
            if (b.style.display === "none") {
                b.style.display = "block";
            } else {
                b.style.display = "none";
            }
        }

        function lihat2() {
            var c = document.getElementById("content2");
            if (c.style.display === "none") {
                c.style.display = "block";
            } else {
                c.style.display = "none";
            }
            b.addEventListener("content2", function(event) {
                gblk.disabled = !gblk.disabled;
            });
        }
    </script>
</body>

</html>