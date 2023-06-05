<!DOCTYPE html>
<html>
<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:admin.php?pesan=gagal");
}
include_once("../koneksi.php");
$result67 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (67)");
$result68 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (68)");
$result70 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (70)");
$result72 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (72)");
$result73 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (73)");
$result74 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (74)");
$result75 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (75)");
$result76 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (76)");
$result77 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (77)");
$result78 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (78)");
$result79 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (79)");
$result80 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (80)");
$result81 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (81)");
$result82 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (82)");
$result83 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (83)");
$result84 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (84)");
$result85 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (85)");
$result86 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (86)");
$result87 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (87)");
$result88 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (88)");
$result89 = mysqli_query($conn, "SELECT * FROM options WHERE id IN (89)");
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
        }  */
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
                    variants: {
                        extend: {
                            display: ['group-focus']
                        },
                    },
                },
            },
        };
    </script>
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
                        <a href="../soal/courses.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 active">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-300 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Data Soal</span>
                        </a>
                    </li>
                    <li>
                        <a href="jawaban.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
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
            <h1 class="text-2xl text-center p-4 font-poppins font-bold">DATA SOAL BASIC SYNTAX</h1>
            <div class="mx-auto">
                <img src="../gambar/courses/1.1.png" alt="">
            </div>
            <div class="w-full m-auto p-10">
                <table class="w-full">
                    <div class="px-20 py-4 text-center text-white border font-semibold bg-purple-500">
                        <p>Level 1</p>
                    </div>
                    <thead class="">
                    </thead>
                    <tbody>
                        <?php
                        while ($user_data = mysqli_fetch_array($result67)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result68)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result70)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result72)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <table class="w-full">
                    <div class="px-20 py-4 text-center text-white border font-semibold bg-purple-500">
                        <p>Level 2</p>
                    </div>
                    <thead class="">
                    </thead>
                    <tbody>
                        <?php
                        while ($user_data = mysqli_fetch_array($result73)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result74)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result75)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <table class="w-full">
                    <div class="px-20 py-4 text-center text-white border font-semibold bg-purple-500">
                        <p>Level 3</p>
                    </div>
                    <thead class="">
                    </thead>
                    <tbody>
                        <?php
                        while ($user_data = mysqli_fetch_array($result76)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result77)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result78)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result79)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result80)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result81)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result82)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result83)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <table class="w-full">
                    <div class="px-20 py-4 text-center text-white border font-semibold bg-purple-500">
                        <p>Level 4</p>
                    </div>
                    <thead class="">
                    </thead>
                    <tbody>
                        <?php
                        while ($user_data = mysqli_fetch_array($result84)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result85)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result86)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result87)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result88)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                        <?php
                        while ($user_data = mysqli_fetch_array($result89)) {
                            echo "<tr>";
                            echo "<td class='p-4 text-sm'>" . $user_data['coption'] . "</td>";
                            echo "<td class='float-right p-4'><a class='px-4 py-2 bg-green-500 text-white rounded-lg' href='edit.php?id=$user_data[id]'>Edit</a> <a class='px-4 py-2 bg-red-500 text-white rounded-lg' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>