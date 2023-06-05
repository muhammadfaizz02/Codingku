<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:admin.php?pesan=gagal");
}
include_once("../koneksi.php");
$q = "SELECT * FROM questions WHERE question_number IN (1)";
$r = mysqli_query($conn, $q);
$qon = mysqli_fetch_assoc($r);
$q2 = "SELECT * FROM questions WHERE question_number IN (2)";
$r2 = mysqli_query($conn, $q2);
$qon2 = mysqli_fetch_assoc($r2);
$q3 = "SELECT * FROM questions WHERE question_number IN (3)";
$r3 = mysqli_query($conn, $q3);
$qon3 = mysqli_fetch_assoc($r3);
$q4 = "SELECT * FROM questions WHERE question_number IN (4)";
$r4 = mysqli_query($conn, $q4);
$qon4 = mysqli_fetch_assoc($r4);
$q5 = "SELECT * FROM questions WHERE question_number IN (5)";
$r5 = mysqli_query($conn, $q5);
$qon5 = mysqli_fetch_assoc($r5);
$q6 = "SELECT * FROM questions WHERE question_number IN (6)";
$r6 = mysqli_query($conn, $q6);
$qon6 = mysqli_fetch_assoc($r6);
$q7 = "SELECT * FROM questions WHERE question_number IN (7)";
$r7 = mysqli_query($conn, $q7);
$qon7 = mysqli_fetch_assoc($r7);
$q8 = "SELECT * FROM questions WHERE question_number IN (8)";
$r8 = mysqli_query($conn, $q8);
$qon8 = mysqli_fetch_assoc($r8);
$q9 = "SELECT * FROM questions WHERE question_number IN (9)";
$r9 = mysqli_query($conn, $q9);
$qon9 = mysqli_fetch_assoc($r9);
$q10 = "SELECT * FROM questions WHERE question_number IN (10)";
$r10 = mysqli_query($conn, $q10);
$qon10 = mysqli_fetch_assoc($r10);
$q11 = "SELECT * FROM questions WHERE question_number IN (11)";
$r11 = mysqli_query($conn, $q11);
$qon11 = mysqli_fetch_assoc($r11);
$q12 = "SELECT * FROM questions WHERE question_number IN (12)";
$r12 = mysqli_query($conn, $q12);
$qon12 = mysqli_fetch_assoc($r12);
$q13 = "SELECT * FROM questions WHERE question_number IN (13)";
$r13 = mysqli_query($conn, $q13);
$qon13 = mysqli_fetch_assoc($r13);
$q14 = "SELECT * FROM questions WHERE question_number IN (14)";
$r14 = mysqli_query($conn, $q14);
$qon14 = mysqli_fetch_assoc($r14);
$q15 = "SELECT * FROM questions WHERE question_number IN (15)";
$r15 = mysqli_query($conn, $q15);
$qon15 = mysqli_fetch_assoc($r15);
$q16 = "SELECT * FROM questions WHERE question_number IN (16)";
$r16 = mysqli_query($conn, $q16);
$qon16 = mysqli_fetch_assoc($r16);
$q17 = "SELECT * FROM questions WHERE question_number IN (17)";
$r17 = mysqli_query($conn, $q17);
$qon17 = mysqli_fetch_assoc($r17);
$q18 = "SELECT * FROM questions WHERE question_number IN (18)";
$r18 = mysqli_query($conn, $q18);
$qon18 = mysqli_fetch_assoc($r18);
$q19 = "SELECT * FROM questions WHERE question_number IN (19)";
$r19 = mysqli_query($conn, $q19);
$qon19 = mysqli_fetch_assoc($r19);
$q20 = "SELECT * FROM questions WHERE question_number IN (20)";
$r20 = mysqli_query($conn, $q20);
$qon20 = mysqli_fetch_assoc($r20);
$q21 = "SELECT * FROM questions WHERE question_number IN (21)";
$r21 = mysqli_query($conn, $q21);
$qon21 = mysqli_fetch_assoc($r21);
$q22 = "SELECT * FROM questions WHERE question_number IN (22)";
$r22 = mysqli_query($conn, $q22);
$qon22 = mysqli_fetch_assoc($r22);
$q23 = "SELECT * FROM questions WHERE question_number IN (23)";
$r23 = mysqli_query($conn, $q23);
$qon23 = mysqli_fetch_assoc($r23);
$q24 = "SELECT * FROM questions WHERE question_number IN (24)";
$r24 = mysqli_query($conn, $q24);
$qon24 = mysqli_fetch_assoc($r24);
$q25 = "SELECT * FROM questions WHERE question_number IN (25)";
$r25 = mysqli_query($conn, $q25);
$qon25 = mysqli_fetch_assoc($r25);
$q26 = "SELECT * FROM questions WHERE question_number IN (26)";
$r26 = mysqli_query($conn, $q26);
$qon26 = mysqli_fetch_assoc($r26);
$q27 = "SELECT * FROM questions WHERE question_number IN (27)";
$r27 = mysqli_query($conn, $q27);
$qon27 = mysqli_fetch_assoc($r27);
$q28 = "SELECT * FROM questions WHERE question_number IN (28)";
$r28 = mysqli_query($conn, $q28);
$qon28 = mysqli_fetch_assoc($r28);
$q29 = "SELECT * FROM questions WHERE question_number IN (29)";
$r29 = mysqli_query($conn, $q29);
$qon29 = mysqli_fetch_assoc($r29);
$q30 = "SELECT * FROM questions WHERE question_number IN (30)";
$r30 = mysqli_query($conn, $q30);
$qon30 = mysqli_fetch_assoc($r30);
$q31 = "SELECT * FROM questions WHERE question_number IN (31)";
$r31 = mysqli_query($conn, $q31);
$qon31 = mysqli_fetch_assoc($r31);
$q32 = "SELECT * FROM questions WHERE question_number IN (32)";
$r32 = mysqli_query($conn, $q32);
$qon32 = mysqli_fetch_assoc($r32);
$q33 = "SELECT * FROM questions WHERE question_number IN (33)";
$r33 = mysqli_query($conn, $q33);
$qon33 = mysqli_fetch_assoc($r33);
?>

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
        .dropdown-menu:hover .dropdown-menu5{
            display: block;
        }
        .dropdown-menu:hover .dropdown-menu4{
            display: block;
        }
        .dropdown-menu:hover .dropdown-menu3{
            display: block;
        }
        .dropdown-menu:hover .dropdown-menu2{
            display: block;
        }
        input:checked~ul.dropdown-menu {
            display: block;
        }      
        .dropdown-menu6:hover .dropdown-menu11{
            display: block;
        }
        .dropdown-menu6:hover .dropdown-menu10{
            display: block;
        }
        .dropdown-menu6:hover .dropdown-menu9{
            display: block;
        }
        .dropdown-menu6:hover .dropdown-menu8{
            display: block;
        }
        .dropdown-menu6:hover .dropdown-menu7{
            display: block;
        }  
        input:checked~ul.dropdown-menu6 {
            display: block;
        }
        .dropdown-menu12:hover .dropdown-menu16{
            display: block;
        }
        .dropdown-menu12:hover .dropdown-menu15{
            display: block;
        }
        .dropdown-menu12:hover .dropdown-menu14{
            display: block;
        }
        .dropdown-menu12:hover .dropdown-menu13{
            display: block;
        }  
        input:checked~ul.dropdown-menu12 {
            display: block;
        }
        .dropdown-menu17:hover .dropdown-menu21{
            display: block;
        }
        .dropdown-menu17:hover .dropdown-menu20{
            display: block;
        }
        .dropdown-menu17:hover .dropdown-menu19{
            display: block;
        }
        .dropdown-menu17:hover .dropdown-menu18{
            display: block;
        }  
        input:checked~ul.dropdown-menu17 {
            display: block;
        }
    </style>
    <title>Admin</title>
</head>

<body class="font-poppins bg-cover bg-gray-200">
    <div class="container-fluid position-relative flex font-poppins">
        <aside class="w-64" aria-label="Sidebar">
            <div class="px-3 py-4 overflow-y-auto rounded bg-white shadow-xl">
                <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
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
                            <p class="pt-6">Basic Syntax</p>
                        </span></label>
                    <ul class="dropdown-menu hidden m-auto text-center font-semibold">
                        <li class="w-[59vw] mx-auto py-6 bg-slate-100">Level 1</li>
                        <ul class="dropdown-menu2 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon['question_text']; ?>
                                <?php while ($user_data = mysqli_fetch_array($r)) {
                                    echo "<a class='float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white' href='delete.php?question_number=$user_data[question_number]'>Delete</a>";
                                    echo "<a class='float-right px-4 py-2 bg-green-500 rounded-lg text-white' href='edit.php?question_number=$user_data[question_number]'>Edit</a>";
                                } ?>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon2['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 2</li>
                        <ul class="dropdown-menu3 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon3['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon4['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 3</li>
                        <ul class="dropdown-menu4 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon5['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon6['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon7['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 4</li>
                        <ul class="dropdown-menu5 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon9['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="flex flex-col dropdown2 relative">
                    <input id="dua" type="checkbox" class="hidden">
                    <label for="dua" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <p class="pt-6">Variables</p>
                        </span></label>
                    <ul class="dropdown-menu6 hidden m-auto text-center font-semibold">
                        <li class="w-[59vw] mx-auto py-6 bg-slate-100">Level 1</li>
                        <ul class="dropdown-menu7 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon10['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 2</li>
                        <ul class="dropdown-menu8 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon11['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 3</li>
                        <ul class="dropdown-menu9 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon12['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon13['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 4</li>
                        <ul class="dropdown-menu10 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon14['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon15['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="flex flex-col dropdown3 relative">
                    <input id="tiga" type="checkbox" class="hidden">
                    <label for="tiga" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <p class="pt-6">Operators</p>
                        </span></label>
                    <ul class="dropdown-menu12 hidden m-auto text-center font-semibold">
                        <li class="w-[59vw] mx-auto py-6 bg-slate-100">Level 1</li>
                        <ul class="dropdown-menu13 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon17['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon18['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon19['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 2</li>
                        <ul class="dropdown-menu14 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon20['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 3</li>
                        <ul class="dropdown-menu15 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon22['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 4</li>
                        <ul class="dropdown-menu16 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon23['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="flex flex-col dropdown4 relative">
                    <input id="empat" type="checkbox" class="hidden">
                    <label for="empat" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <p class="pt-6">Array</p>
                        </span></label>
                    <ul class="dropdown-menu17 hidden m-auto text-center font-semibold">
                        <li class="w-[59vw] mx-auto py-6 bg-slate-100">Level 1</li>
                        <ul class="dropdown-menu18 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon24['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon25['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 2</li>
                        <ul class="dropdown-menu19 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon26['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon27['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 3</li>
                        <ul class="dropdown-menu20 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon28['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon29['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 4</li>
                        <ul class="dropdown-menu21 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon12['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="flex flex-col dropdown4 relative">
                    <input id="empat" type="checkbox" class="hidden">
                    <label for="empat" class="w-4/5 m-auto py-6 realtive border border-slate-200 rounded-lg font-bold"><span><img src="../gambar/courses/1.1.png" alt="" class="float-left ml-5 mr-4">
                            <p class="pt-6">Control Structures</p>
                        </span></label>
                    <ul class="dropdown-menu17 hidden m-auto text-center font-semibold">
                        <li class="w-[59vw] mx-auto py-6 bg-slate-100">Level 1</li>
                        <ul class="dropdown-menu18 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon24['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon25['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 2</li>
                        <ul class="dropdown-menu19 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon26['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon27['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 3</li>
                        <ul class="dropdown-menu20 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon28['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                            <li class="py-4 border-b border-slate-300"><?php echo $qon29['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$r[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                        <li class="w-[59vw] py-6 bg-slate-100">Level 4</li>
                        <ul class="dropdown-menu21 hidden m-auto text-sm font-normal bg-slate-200">
                            <li class="py-4 border-b border-slate-300"><?php echo $qon12['question_text']; ?>
                                <a class="float-right mr-10 ml-2 px-4 py-2 bg-red-500 rounded-lg text-white" href="delete.php?question_number=$user_data[question_number]">Delete</a>
                                <a class="float-right px-4 py-2 bg-green-500 rounded-lg text-white" href="edit.php">Edit</a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>