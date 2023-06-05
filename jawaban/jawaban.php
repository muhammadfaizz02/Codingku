<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
                    variants: {
                        extend: {
                            display: ['group-focus']
                        },
                    },
                },
            },
        };
    </script>

<body class="font-poppins bg-cover bg-gray-200">
    <div class="container-fluid position-relative flex font-poppins">
        <aside class="w-64" aria-label="Sidebar">
            <div class="px-3 py-4 overflow-y-auto rounded bg-white shadow-xl">
                <a class="flex items-center pl-2.5 mb-5">
                    <img src="../gambar/logo.png" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap">Coding-Ku</span>
                </a>
                <ul class="space-y-2">
                    <li>
                        <a href="../admin.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-300 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="soal.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 active">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-300 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Data Soal</span>
                        </a>
                    </li>
                    <li>
                        <a href="../jawaban/jawaban.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-300 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Data Jawaban</span>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="logout.php" class="h-full flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-300 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section>
            <div class="bg-white mt-10 m-20 p-10 rounded-lg">
                <div class="lg:flex lg:flex-wrap md:flex md:flex-wrap lg:justify-center">
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/js.png" class="absolute top-[25%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Javascript</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-blue-500 to-sky-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/tw.png" class="absolute top-[35%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Tailwind CSS</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/bp.png" class="absolute top-[30%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Bootstrap</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-blue-500 to-sky-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/r.png" class="absolute top-[30%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">React</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-green-500 to-lime-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/vue.png" class="absolute top-[30%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Vue JS</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg overflow-visible relative shadow-xl">
                        <a href="stage.php"><img src="../gambar/icon/php.png" class="absolute top-[35%] left-[30%] w-2/5"></a>
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">PHP</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-red-500 to-rose-400 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/rb.png" class="absolute top-[25%] left-[30%] w-2/5"></span>
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Ruby</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-orange-500 to-red-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/fb.png" class="absolute top-[25%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Firebase</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-blue-500 to-yellow-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/py.png" class="absolute top-[25%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">Python</h1>
                    </div>
                    <div class="lg:w-1/4 md:w-2/5 sm:w-3/4 sm:mx-auto lg:m-5 h-60 m-5 bg-gradient-to-br from-green-500 to-lime-500 rounded-lg overflow-visible relative shadow-xl">
                        <img src="../gambar/icon/vue.png" class="absolute top-[25%] left-[30%] w-2/5">
                        <h1 class="text-white text-center lg:text-xl pt-5 lg:pt-5 md:text-lg sm:text-md font-semibold">MySQL</h1>
                    </div>
        </section>
        <!-- <section>
            <div class="flex flex-col mt-4 ml-20 p-10 bg-white rounded-lg">
                <p class="text-center font-bold">DATA SOAL</p>
                <div class="p-10 rounded-lg shadow-xl">
                    <img src="../gambar/icon/js.png" class="w-[10%]">
                    <p>Javascript</p>
                </div>
                <div class="p-10 rounded-lg shadow-xl">
                    <img src="../gambar/icon/js.png" class="w-[10%]">
                    <p>Javascript</p>
                </div>
            </div>
        </section> -->

</body>

</html>