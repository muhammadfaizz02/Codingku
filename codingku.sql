-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 12:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codingku`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `coption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES
(34, 1, 1, 'Bahasa pemrograman sisi server'),
(35, 1, 0, 'Bahasa makrup'),
(36, 1, 0, 'Situs web'),
(37, 1, 0, 'Home page'),
(38, 2, 0, 'Tidak'),
(39, 2, 1, 'Ya'),
(45, 3, 0, '='),
(46, 3, 0, ','),
(47, 3, 1, '?'),
(48, 4, 0, 'menggunakan kurang buka'),
(49, 4, 1, 'menggunakan kurang dari dan tanda tanya'),
(50, 4, 0, 'menggunakan tag html'),
(51, 5, 1, 'echo'),
(52, 5, 0, 'print'),
(53, 5, 0, 'console'),
(54, 5, 0, 'write'),
(55, 6, 1, ';'),
(56, 6, 0, '.'),
(57, 6, 0, ':'),
(58, 7, 0, 'h2'),
(59, 7, 1, 'h1'),
(60, 7, 0, 'h3'),
(61, 8, 1, '//'),
(62, 8, 0, '***'),
(63, 8, 0, '!-'),
(64, 9, 1, '/* */'),
(65, 9, 0, '//'),
(66, 9, 0, '-/ /-'),
(67, 10, 0, 'nama dan umur'),
(68, 10, 1, '$ dan umur'),
(70, 10, 0, 'nama dan umur'),
(72, 10, 0, '$ dan nama'),
(73, 11, 1, 'define'),
(74, 11, 0, 'print'),
(75, 11, 0, 'echo'),
(76, 12, 1, '$'),
(77, 12, 0, 'const'),
(78, 12, 0, 'var'),
(79, 12, 0, 'let'),
(80, 13, 0, '1995'),
(81, 13, 0, '1996'),
(82, 13, 1, '1997'),
(83, 13, 0, '1998'),
(84, 14, 0, 'tag PHP tidak dibuka'),
(85, 14, 1, 'variabel tidak didefinisikan dalam fungsi'),
(86, 14, 0, 'kesalahan sintak'),
(87, 15, 0, '88'),
(88, 15, 1, '89'),
(89, 15, 0, '90'),
(90, 16, 1, '$$'),
(91, 16, 0, '**'),
(92, 0, 0, '--'),
(93, 17, 1, '-'),
(94, 17, 0, '+'),
(95, 17, 0, '%'),
(96, 17, 0, '++'),
(97, 18, 1, '1'),
(98, 18, 0, '2'),
(99, 18, 0, '3'),
(100, 18, 0, '4'),
(101, 19, 0, '16'),
(102, 19, 1, '17'),
(103, 19, 0, '18'),
(104, 19, 0, '19'),
(105, 20, 0, '7'),
(106, 20, 1, '10'),
(107, 20, 0, '14'),
(108, 20, 0, '15'),
(109, 21, 0, '<'),
(110, 21, 1, '!='),
(111, 21, 0, '!<'),
(112, 21, 0, '=='),
(113, 22, 0, '$num1 == $num2'),
(114, 22, 0, '$num1 > $num2'),
(115, 22, 1, '$num1 != $num2'),
(116, 23, 0, 'FALSE'),
(117, 23, 1, 'TRUE'),
(118, 24, 1, '0'),
(119, 24, 0, '1'),
(120, 24, 0, '2'),
(121, 24, 0, '3'),
(122, 25, 1, '[0] [2] [1]'),
(123, 25, 0, '[0] [1] [2]'),
(124, 25, 0, '[2] [1] [0]'),
(125, 26, 1, '\'key\'=> value'),
(126, 26, 0, '\'key\'!= value'),
(127, 26, 0, '\'key\', value'),
(128, 26, 0, 'key = value'),
(129, 27, 0, '\'nama\''),
(130, 27, 1, '\'umur\''),
(131, 27, 0, '$man'),
(132, 28, 0, 'hanya dua'),
(133, 28, 0, 'hanya satu'),
(134, 28, 1, 'sebanyak yang Anda inginkan'),
(135, 29, 1, '=> array'),
(136, 29, 0, '=> define'),
(137, 29, 0, '=> echo'),
(138, 30, 1, 'if >'),
(139, 30, 0, 'define >'),
(140, 30, 0, 'else >'),
(141, 31, 0, '$num == 90'),
(142, 31, 0, '$num == 80'),
(143, 31, 1, '$num == 100'),
(144, 32, 0, 'satu'),
(145, 32, 0, 'tidak ada'),
(146, 32, 1, 'sebanyak yang Anda inginkan'),
(147, 33, 1, 'if($gender==0) | elseif($gender==1)'),
(148, 33, 0, 'if($gender==\"male\") | elseif($gender==\"female\")'),
(149, 33, 0, 'if(undifine) | elseif(undifine)');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `question_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`, `question_image`) VALUES
(1, 'PHP adalah ?', 'soal1.jpeg'),
(2, 'dapatkah anda menjalankan php di linux?', 'soal2.jpeg'),
(3, 'lengkapi syntax diatas', 'soal1.jpeg'),
(4, 'mana cara yang paling banyak direkomendasikan untuk menggunakan tag PHP?', 'soal2.jpeg'),
(5, 'Isi bagian yang kosong untuk menghasilkan \"Hai\" menggunakan Echo : ', 'soal1.jpeg'),
(6, 'karakter mana yang harus ada di akhir setiap pernyataan ?', 'soal2.jpeg'),
(7, '\r\nisi bagian yang kosong untuk menampilkan \"Codingku\" sebagai h1 heading.', 'soal3.jpeg'),
(8, 'manakah dari karakter berikut yang menunjukkan komentar dalam PHP?', 'soal1.jpeg'),
(9, 'isi bagian yang kosong untuk membuat teks menjadi komentar.', 'soal2.jpeg'),
(10, 'isi bagian yang kosong untuk mendeklarasikan variabel $name dan $age dan berikan nilainya. ', 'soal1.jpeg'),
(11, 'isi bagian yang kosong untuk mendeklarasikan konstanta peka huruf besar kecil yang disebut UMUR dan berikan nilai 28 padanya', 'soal1.jpeg'),
(12, 'isi bagian yang kosong untuk mendefinisikan string variabel', 'soal1.jpeg'),
(13, 'apa hasil output dari kode berikut', 'soal2.jpeg'),
(14, 'Dalam contoh, mengapa kita mendapatkan ERROR php?', 'soal1.jpeg'),
(15, 'output apa yang dihasilkan dari berikut ini?\r\n\r\n', 'soal2.jpeg'),
(16, 'isi bagian yang kosong untuk mencetak \"World\" ke layar.', 'soal1.jpeg'),
(17, 'isi bagian yang kosong untuk mengurangi satu angka dari angka lainnya.', 'soal1.jpeg'),
(18, 'Berapa nilai variabel $num setelah kode berikut?', 'soal2.jpeg'),
(19, 'Apa hasil output dari kode berikut?', 'soal3.jpeg'),
(20, 'apa hasil output dari kode berikut?', 'soal1.jpeg'),
(21, 'Manakah dari berikut ini yang sesuai dengan operator tidak sama dengan?', 'soal1.jpeg'),
(22, 'Manakah dari berikut ini yang mengembalikan TRUE, jika $num1=4; $bil2=8?', 'soal2.jpeg'),
(23, 'Berapa nilai kembalian dari ekspresi berikut, jika $num1 = 5 dan $num2 = 3?', 'soal1.jpeg'),
(24, 'Apa indeks dari elemen pertama dari array?', 'soal1.jpeg'),
(25, 'Isi bagian yang kosong untuk menampilkan \"PHP is awesome\" ke layar.', 'soal2.jpeg'),
(26, 'Sintaks mana yang sesuai dengan array asosiatif?', 'soal1.jpeg'),
(27, 'Isi bagian yang kosong untuk menampilkan usia dari array.', 'soal2.jpeg'),
(28, 'Berapa banyak dimensi yang mungkin dalam array multidimensi?', 'soal1.jpeg'),
(29, 'isi bagian yang kosong untuk mendeklarasikan array dua dimensi.', 'soal2.jpeg'),
(30, 'Isi bagian yang kosong untuk menampilkan \"Selamat datang\", jika variabel \'usia\' lebih besar dari 18.', 'soal1.jpeg'),
(31, 'Seret dan lepas dari opsi di bawah untuk mencetak \"YA\" jika variabel \'angka\' sama dengan 100, \"TIDAK\" jika tidak.', 'soal2.jpeg'),
(32, 'Berapa kali pernyataan elseif dapat digunakan?', 'soal1.jpeg'),
(33, 'Pernyataan Else If\r\nIsi bagian yang kosong untuk mencetak \"Male\" jika variabel \"gender\" sama dengan 0, \"Female\" jika sama dengan 1, dan \"Undefined\" di semua kasus lainnya.', 'soal2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `koin` int(11) NOT NULL,
  `role` enum('player','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `koin`, `role`) VALUES
(11, 'salsa', '123@gmail.com', '123', 150, 'player'),
(12, 'Faiz', 'faiz@gmail.com', 'faiz', 1100, 'player'),
(13, 'dita', 'ditaaaaa@gmail.com', '1234', 50, 'player'),
(14, 'admin', 'admin@gmail.com', 'admin', 0, 'admin'),
(15, 'Ulbi', 'ulbi@gmail.com', 'ulbi', 0, 'player');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
