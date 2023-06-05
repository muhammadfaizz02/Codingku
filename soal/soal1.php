<!DOCTYPE html>
<html>

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
    <style type="text/tailwindcss">
        /* * {
            border: 1px solid red;
        } */
    </style>
    <title>Admin</title>
</head>

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
                        <a href="courses.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 active">
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
                        <a href="../logout.php" class="h-full flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-300 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="flex flex-col w-full mt-4 mx-20 bg-white rounded-lg">
            <h1 class="text-2xl text-center p-4 font-poppins font-bold">DATA SOAL</h1>
            <div class="w-full m-auto p-10">
                <div class="flex flex-col dropdown relative">
                    <input id="1" type="checkbox" class="hidden">
                    <label for="1" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <a href="soal.php" class="pt-12">Basic Syntax</a>
                        </span></label>
                </div>
                <div class="flex flex-col dropdown2 relative">
                    <input id="dua" type="checkbox" class="hidden">
                    <label for="dua" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <a href="variable.php" class="">Variables</a>
                        </span></label>
                </div>
                <div class="flex flex-col dropdown3 relative">
                    <input id="tiga" type="checkbox" class="hidden">
                    <label for="tiga" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <a href="operator.php" class="pt-6">Operators</a>
                        </span></label>
                </div>
                <div class="flex flex-col dropdown4 relative">
                    <input id="empat" type="checkbox" class="hidden">
                    <label for="empat" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <a href="array.php" class="pt-6">Array</a>
                        </span></label>
                </div>
                <div class="flex flex-col dropdown4 relative">
                    <input id="empat" type="checkbox" class="hidden">
                    <label for="empat" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <p class="pt-6">Control Structures</p>
                        </span></label>
                </div>
            </div>
        </div>
    </div>
</body>

</html>