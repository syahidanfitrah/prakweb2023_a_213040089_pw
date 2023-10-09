-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 03:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2023_a_213040089`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `kategori`, `gambar`) VALUES
(1, 'Naruto', 'Bloods', 'Lotus Book Internasional', 'Comic', 'Naruto.jpg'),
(2, 'Mat Kilau', 'Bloods', 'Lotus Book Internasional', 'History', '3.-Mat-Kilau_page-0001.jpg'),
(3, 'Spider-Man', 'Bloods', 'Lotus Book Internasional', 'Fiksi', '33163666948126.jpg'),
(4, 'Black Clover', 'Bloods', 'Lotus Book Internasional', 'Comic', 'Black_Clover.jpg'),
(5, 'Bleach', 'Bloods', 'Lotus Book Internasional', 'Comic', 'bleach-the-official-anime-coloring-book-9781974740918_hr.jpg'),
(6, 'The Nun', 'Bloods', 'Lotus Book Internasional', 'Horror', 'image.jpg'),
(7, 'Jujutsu Kaisen', 'Bloods', 'Lotus Book Internasional', 'Comic', 'MV5BMTMwMDM4N2EtOTJiYy00OTQ0LThlZDYtYWUwOWFlY2IxZGVjXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg'),
(8, 'Bumi', 'Bloods', 'Lotus Book Internasional', 'Geo', 'The_Blue_Marble_(remastered).jpg'),
(9, 'Superman', 'Bloods', 'Lotus Book Internasional', 'Fiksi', 'MV5BMTY5ODI4NzMtM2EzYS00ZGFlLThjMjgtODMyN2QwYjBkYTYwXkEyXkFqcGdeQXVyMTEyNzgwMDUw._V1_FMjpg_UX1000_.jpg'),
(10, 'Batman', 'Bloods', 'Lotus Book Internasional', 'Fiksi', 'p838_p_v10_ay.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
