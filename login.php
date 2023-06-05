<?php

include 'koneksi.php';

session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("location: index.php");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['role'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";
            header("location:admin.php");
        } else if ($row['role'] == "player") {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "player";
            header("location:index.php");
        }
    } else {
        echo "<script>alert('username / password salah!')</script>";
        header("location:login.php");
    }
}

?>

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
                },
            },
        };
    </script>
    <title>Login</title>
</head>

<body class="font-poppins">
    <section>
        <div class="h-screen md:flex">
            <div class="relative overflow-hidden md:flex w-1/2 justify-around items-center hidden bg-gradient-to-r rounded-lg from-indigo-700 to-violet-600">
                <div>
                    <img src="gambar/lg1.png" class="mx-auto w-8/12">
                </div>
            </div>
            <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
                <form class="bg-white" method="post">
                    <h1 class="text-2xl font-semibold text-center">Login</h1>
                    <h1 class="text-4xl m-3 font-bold text-center bg-gradient-to-r from-purple-500 to-pink-500 text-transparent bg-clip-text">CODING-KU</h1>
                    <div class="m-14 pb-10">
                        <label for="username">
                            <span class="block font-medium mb-1 text-gray-700">
                                Username
                            </span>
                            <input type="username" name="username" id="username" placeholder="masukan username anda" class="px-3 py-2 border shadow rounded w-full block placeholder:text-slate-400
                                                focus:outline-none focus:ring-1 focus:ring-purple-500 focus:border-purple-500 placeholder:text-sm
                                            invalid:text-red-500 invalid:focus:ring-red-500 invalid:focus:border-red-500 mb-5" autofocus autocomplete="off" required>
                        </label>
                        <label for="email">
                            <span class="block font-medium mb-1 text-gray-700
                                                after:content-['*'] after:text-red-500 after:ml-0.5
                                                ">Password</span>
                            <input type="password" name="password" id="email" placeholder="masukan password anda" class="px-3 py-2 border shadow rounded w-full block placeholder:text-slate-400 
                                                focus:outline-none focus:ring-1 focus:ring-purple-500 focus:border-purple-500 placeholder:text-sm
                                              invalid:text-red-500 invalid:focus:ring-red-500 invalid:focus:border-red-500 peer" required>
                            <p class="m-1 text-red-500 invisible peer-invalid:visible"></p>
                        </label>
                        <div class="text-center">
                            <button type="submit" name="login" class="text-white mt-10 transition ease-in-out font-semibold duration-75 bg-gradient-to-r px-52 py-3 rounded-lg from-violet-500 to-pink-500 hover:scale-110 hover:-translate-y-1 shadow-lg shadow-pink-500/60 hover:duration-300
                                                      ">Login</button>
                            <p class="m-5 text-sm">Belum punya akun? <span class="text-sky-700 hover:text-sky-900 hover:underline"><a href="daftar.php">Klik Disini</a></span></p>
                        </div>
                </form>
            </div>
    </section>
</body>

</html>