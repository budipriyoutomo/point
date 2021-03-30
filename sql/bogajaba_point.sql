-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 11:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bogajaba_point`
--
CREATE DATABASE IF NOT EXISTS `bogajaba_point` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bogajaba_point`;

-- --------------------------------------------------------

--
-- Table structure for table `taddpoint`
--

CREATE TABLE `taddpoint` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tgladd` date DEFAULT NULL,
  `task` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taddpoint`
--

INSERT INTO `taddpoint` (`id`, `nik`, `tgladd`, `task`, `point`, `user`) VALUES
(1, 'ST-11820319', '2019-05-02', 9, 5, 51),
(2, 'ST-11750319', '2019-05-02', 9, 5, 51),
(3, 'ST-11610219', '2019-05-02', 9, 5, 51),
(4, 'ST-11460219', '2019-05-02', 9, 5, 51),
(5, 'ST-11450219', '2019-05-02', 9, 5, 51),
(6, 'ST-11400219', '2019-05-02', 9, 5, 51),
(7, 'ST-11110119', '2019-05-02', 9, 5, 51),
(8, 'ST-11100119', '2019-05-02', 9, 5, 51),
(9, 'ST-11060119', '2019-05-02', 9, 5, 51),
(10, 'ST-10931118', '2019-05-02', 9, 5, 51),
(11, 'ST-10881118', '2019-05-02', 9, 5, 51),
(12, 'ST-10801018', '2019-05-02', 9, 5, 51),
(13, 'ST-10630818', '2019-05-02', 9, 5, 51),
(14, 'ST-10610818', '2019-05-02', 9, 5, 51),
(15, 'ST-10670818', '2019-05-02', 9, 5, 51),
(16, 'ST-10540818', '2019-05-02', 9, 5, 51),
(17, 'ST-10480718', '2019-05-02', 9, 5, 51),
(18, 'ST-10460718', '2019-05-02', 9, 5, 51),
(19, 'ST-10390718', '2019-05-02', 9, 5, 51),
(20, 'ST-10500718', '2019-05-02', 9, 5, 51),
(21, 'ST-10330718', '2019-05-02', 9, 5, 51),
(22, 'ST-10270618', '2019-05-02', 9, 5, 51),
(23, 'ST-10250618', '2019-05-02', 9, 5, 51),
(24, 'ST-9930218', '2019-05-02', 9, 5, 51),
(25, 'ST-9830218', '2019-05-02', 9, 5, 51),
(26, 'ST-9810118', '2019-05-02', 9, 5, 51),
(27, 'ST-9750118', '2019-05-02', 9, 5, 51),
(28, 'ST-9551217', '2019-05-02', 9, 5, 51),
(29, 'ST-9461217', '2019-05-02', 9, 5, 51),
(30, 'ST-9311117', '2019-05-02', 9, 5, 51),
(31, 'ST-9291017', '2019-05-02', 9, 5, 51),
(32, 'ST-9190917', '2019-05-02', 9, 5, 51),
(33, 'ST-9160917', '2019-05-02', 9, 5, 51),
(34, 'ST-9130917', '2019-05-02', 9, 5, 51),
(35, 'ST-8960817', '2019-05-02', 9, 5, 51),
(36, 'ST-8930817', '2019-05-02', 9, 5, 51),
(37, 'ST-8890717', '2019-05-02', 9, 5, 51),
(38, 'ST-8850617', '2019-05-02', 9, 5, 51),
(39, 'ST-8750417', '2019-05-02', 9, 5, 51),
(40, 'ST-8590117', '2019-05-02', 9, 5, 51),
(41, 'ST-8320816', '2019-05-02', 9, 5, 51),
(42, 'ST-8200716', '2019-05-02', 9, 5, 51),
(43, 'ST-8060416', '2019-05-02', 9, 5, 51),
(44, 'ST-7950216', '2019-05-02', 9, 5, 51),
(45, 'ST-7890116', '2019-05-02', 9, 5, 51),
(46, 'ST-7861215', '2019-05-02', 9, 5, 51),
(47, 'ST-7791215', '2019-05-02', 9, 5, 51),
(48, 'ST-7460815', '2019-05-02', 9, 5, 51),
(49, 'ST-7450815', '2019-05-02', 9, 5, 51),
(50, 'ST-7430715', '2019-05-02', 9, 5, 51),
(51, 'ST-6520914', '2019-05-02', 9, 5, 51),
(52, 'ST-5870314', '2019-05-02', 9, 5, 51),
(53, 'ST-5170713', '2019-05-02', 9, 5, 51),
(54, 'ST-5130613', '2019-05-02', 9, 5, 51),
(55, 'ST-4690113', '2019-05-02', 9, 5, 51),
(56, 'ST-4581212', '2019-05-02', 9, 5, 51),
(57, 'ST-4601212', '2019-05-02', 9, 5, 51),
(58, 'ST-4611112', '2019-05-02', 9, 5, 51),
(59, 'ST-4291012', '2019-05-02', 9, 5, 51),
(60, 'ST-4200912', '2019-05-02', 9, 5, 51),
(61, 'ST-3141211', '2019-05-02', 9, 5, 51),
(62, 'ST-2631111', '2019-05-02', 9, 5, 51),
(63, 'ST-1920911', '2019-05-02', 9, 5, 51),
(64, 'ST-2180411', '2019-05-02', 9, 5, 51),
(65, 'ST-2150411', '2019-05-02', 9, 5, 51),
(66, 'ST-2070211', '2019-05-02', 9, 5, 51),
(67, 'ST-1000111', '2019-05-02', 9, 5, 51),
(68, 'ST-1810111', '2019-05-02', 9, 5, 51),
(69, 'ST-0150308', '2019-05-02', 9, 5, 51),
(70, 'ST-11820319', '2019-05-02', 10, 5, 51),
(71, 'ST-11750319', '2019-05-02', 10, 5, 51),
(72, 'ST-11610219', '2019-05-02', 10, 5, 51),
(73, 'ST-11520219', '2019-05-02', 10, 5, 51),
(74, 'ST-11460219', '2019-05-02', 10, 5, 51),
(75, 'ST-11450219', '2019-05-02', 10, 5, 51),
(76, 'ST-11400219', '2019-05-02', 10, 5, 51),
(77, 'ST-11110119', '2019-05-02', 10, 5, 51),
(78, 'ST-11100119', '2019-05-02', 10, 5, 51),
(79, 'ST-11060119', '2019-05-02', 10, 5, 51),
(80, 'ST-10931118', '2019-05-02', 10, 5, 51),
(81, 'ST-10801018', '2019-05-02', 10, 5, 51),
(82, 'ST-10630818', '2019-05-02', 10, 5, 51),
(83, 'ST-10610818', '2019-05-02', 10, 5, 51),
(84, 'ST-10670818', '2019-05-02', 10, 5, 51),
(85, 'ST-10540818', '2019-05-02', 10, 5, 51),
(86, 'ST-10480718', '2019-05-02', 10, 5, 51),
(87, 'ST-10460718', '2019-05-02', 10, 5, 51),
(88, 'ST-10390718', '2019-05-02', 10, 5, 51),
(89, 'ST-10500718', '2019-05-02', 10, 5, 51),
(90, 'ST-10330718', '2019-05-02', 10, 5, 51),
(91, 'ST-10270618', '2019-05-02', 10, 5, 51),
(92, 'ST-10250618', '2019-05-02', 10, 5, 51),
(93, 'ST-9930218', '2019-05-02', 10, 5, 51),
(94, 'ST-9830218', '2019-05-02', 10, 5, 51),
(95, 'ST-9810118', '2019-05-02', 10, 5, 51),
(96, 'ST-9750118', '2019-05-02', 10, 5, 51),
(97, 'ST-9551217', '2019-05-02', 10, 5, 51),
(98, 'ST-9461217', '2019-05-02', 10, 5, 51),
(99, 'ST-9311117', '2019-05-02', 10, 5, 51),
(100, 'ST-9291017', '2019-05-02', 10, 5, 51),
(101, 'ST-9190917', '2019-05-02', 10, 5, 51),
(102, 'ST-9160917', '2019-05-02', 10, 5, 51),
(103, 'ST-9130917', '2019-05-02', 10, 5, 51),
(104, 'ST-8960817', '2019-05-02', 10, 5, 51),
(105, 'ST-8930817', '2019-05-02', 10, 5, 51),
(106, 'ST-8890717', '2019-05-02', 10, 5, 51),
(107, 'ST-8850617', '2019-05-02', 10, 5, 51),
(108, 'ST-8750417', '2019-05-02', 10, 5, 51),
(109, 'ST-8590117', '2019-05-02', 10, 5, 51),
(110, 'ST-8320816', '2019-05-02', 10, 5, 51),
(111, 'ST-8200716', '2019-05-02', 10, 5, 51),
(112, 'ST-8060416', '2019-05-02', 10, 5, 51),
(113, 'ST-7950216', '2019-05-02', 10, 5, 51),
(114, 'ST-7890116', '2019-05-02', 10, 5, 51),
(115, 'ST-7861215', '2019-05-02', 10, 5, 51),
(116, 'ST-7791215', '2019-05-02', 10, 5, 51),
(117, 'ST-7460815', '2019-05-02', 10, 5, 51),
(118, 'ST-7450815', '2019-05-02', 10, 5, 51),
(119, 'ST-7430715', '2019-05-02', 10, 5, 51),
(120, 'ST-6520914', '2019-05-02', 10, 5, 51),
(121, 'ST-5870314', '2019-05-02', 10, 5, 51),
(122, 'ST-5170713', '2019-05-02', 10, 5, 51),
(123, 'ST-5130613', '2019-05-02', 10, 5, 51),
(124, 'ST-4690113', '2019-05-02', 10, 5, 51),
(125, 'ST-4581212', '2019-05-02', 10, 5, 51),
(126, 'ST-4601212', '2019-05-02', 10, 5, 51),
(127, 'ST-4611112', '2019-05-02', 10, 5, 51),
(128, 'ST-4291012', '2019-05-02', 10, 5, 51),
(129, 'ST-4200912', '2019-05-02', 10, 5, 51),
(130, 'ST-3141211', '2019-05-02', 10, 5, 51),
(131, 'ST-2631111', '2019-05-02', 10, 5, 51),
(132, 'ST-1920911', '2019-05-02', 10, 5, 51),
(133, 'ST-1660811', '2019-05-02', 10, 5, 51),
(134, 'ST-2180411', '2019-05-02', 10, 5, 51),
(135, 'ST-2150411', '2019-05-02', 10, 5, 51),
(136, 'ST-2070211', '2019-05-02', 10, 5, 51),
(137, 'ST-1000111', '2019-05-02', 10, 5, 51),
(138, 'ST-1810111', '2019-05-02', 10, 5, 51),
(139, 'ST-0150308', '2019-05-02', 10, 5, 51);

-- --------------------------------------------------------

--
-- Table structure for table `tmstdivisi`
--

CREATE TABLE `tmstdivisi` (
  `id` tinyint(4) NOT NULL,
  `divisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmstdivisi`
--

INSERT INTO `tmstdivisi` (`id`, `divisi`) VALUES
(1, 'Service'),
(2, 'Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `tmstgift`
--

CREATE TABLE `tmstgift` (
  `id` int(11) NOT NULL,
  `namagift` varchar(50) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `productimage` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmstgift`
--

INSERT INTO `tmstgift` (`id`, `namagift`, `point`, `harga`, `productimage`, `status`) VALUES
(1, 'Voucher Yogya 100K', 25, '100000', 'vyogya100k.jpg', 1),
(2, 'Voucher Carefour 100K', 50, '100000', 'vcarefour100k.jpg', 1),
(3, 'Voucher Pulsa 100K', 50, '110000', 'vcarefour100k.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmstjabatan`
--

CREATE TABLE `tmstjabatan` (
  `id` tinyint(4) NOT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmstjabatan`
--

INSERT INTO `tmstjabatan` (`id`, `jabatan`) VALUES
(1, 'Admin F&B'),
(2, 'Admin Kitchen'),
(3, 'Admin Outlet'),
(4, 'Ass. Admin F&B'),
(5, 'Ass. Store Manager'),
(6, 'Bartender'),
(7, 'Busboy'),
(8, 'Captain'),
(9, 'Cashier'),
(10, 'CDP'),
(11, 'Cook I'),
(12, 'Cook II'),
(13, 'Cook III'),
(14, 'QA Staff'),
(15, 'Server'),
(16, 'Steward'),
(17, 'Stock Keeper'),
(18, 'Store Supervisor'),
(19, 'Tr Admin Outlet'),
(20, 'Tr Busboy'),
(21, 'Tr Cashier'),
(22, 'Tr CDP'),
(23, 'Tr Cook I'),
(24, 'Tr Cook III'),
(25, 'Tr Server'),
(26, 'Tr Steward'),
(27, 'Tr Stock Keeper'),
(28, 'Tr Store Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `tmstoutlet`
--

CREATE TABLE `tmstoutlet` (
  `id` tinyint(4) NOT NULL,
  `outlet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmstoutlet`
--

INSERT INTO `tmstoutlet` (`id`, `outlet`) VALUES
(1, 'Sumatra'),
(2, 'Flamboyan'),
(3, 'Trans Studio Mall'),
(99, 'Head Office'),
(100, 'Paris Van Java');

-- --------------------------------------------------------

--
-- Table structure for table `tmststaff`
--

CREATE TABLE `tmststaff` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` tinyint(4) DEFAULT NULL,
  `outlet` tinyint(4) DEFAULT NULL,
  `totalpoint` int(11) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `role` enum('Admin','User','Staff') DEFAULT NULL,
  `pp` varchar(20) DEFAULT NULL,
  `divisi` tinyint(4) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` enum('Aktif','Training','Promosi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmststaff`
--

INSERT INTO `tmststaff` (`id`, `nik`, `nama`, `jabatan`, `outlet`, `totalpoint`, `pass`, `role`, `pp`, `divisi`, `email`, `status`) VALUES
(1, 'ST-0520905', 'Pipin Solihin', 10, 2, 0, NULL, 'Staff', 'an.png', 2, 'Pipin.sushitei@gmail.com', 'Aktif'),
(2, 'ST-0681105', 'Yopi Saepul', 11, 1, 0, NULL, 'Staff', 'an.png', 2, 'yopicavalera8@gmail.com', 'Aktif'),
(3, 'ST-0671207', 'Yandi Nur Cahya', 10, 1, 0, NULL, 'Staff', 'an.png', 2, 'yandicahya28@gmail.com', 'Aktif'),
(4, 'ST-0150308', 'Dewi Yulianti', 1, 3, 10, NULL, 'Staff', 'an.png', 2, 'dewiyulianti100@gmail.com', 'Aktif'),
(5, 'ST-0170509', 'Edi Rosadi', 11, 1, 0, NULL, 'Staff', 'an.png', 2, 'edirosadi150586@gmail.com', 'Aktif'),
(6, 'ST-0370609', 'Jaka Wijaya', 11, 2, 0, NULL, 'Staff', 'an.png', 2, 'adoxagogo@gmail.com ', 'Aktif'),
(7, 'ST-11510119', 'Teddy Setiady', 10, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Aktif'),
(8, 'ST-0690610', 'Hardi Wiansyah', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'hardiwiansyah@gmail.com', 'Aktif'),
(9, 'ST-0730610', 'Iim Rohimat', 4, 1, 0, NULL, 'Staff', 'an.png', 2, 'iimrohimat82@gmail.com', 'Aktif'),
(10, 'ST-0971110', 'Asep Priatna', 12, 1, 0, NULL, 'Staff', 'an.png', 2, 'Priatnaasep924@gmail.com ', 'Aktif'),
(11, 'ST-1161110', 'Puri Yuniarto', 3, 2, 0, NULL, 'Staff', 'an.png', 2, 'puriyuniarto01@gmail.com', 'Aktif'),
(12, 'ST-1901110', 'Galih Insan Perdana', 11, 2, 0, NULL, 'Staff', 'an.png', 2, 'cookingbeast666@gmail.com', 'Aktif'),
(13, 'ST-2061110', 'Risman Ardi', 12, 2, 0, NULL, 'Staff', 'an.png', 2, 'rismanardi@gmail.com', 'Aktif'),
(14, 'ST-1941210', 'Hendi Sutendi', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Soetondyhendy85@gmail.com ', 'Aktif'),
(15, 'ST-0981210', 'Asep Somantri', 12, 2, 0, NULL, 'Staff', 'an.png', 2, 'adolucky@yahoo.com', 'Aktif'),
(16, 'ST-1810111', 'Anton Iskandar', 22, 3, 10, NULL, 'Staff', 'an.png', 2, 'anton.mehrin@gmail.com', 'Promosi'),
(17, 'ST-1000111', 'Cepy Hambali', 23, 3, 10, NULL, 'Staff', 'an.png', 2, 'Alimuntaz22@gmail.com', 'Promosi'),
(18, 'ST-1880111', 'Angga Prasetyo Nugroho', 11, 1, 0, NULL, 'Staff', 'an.png', 2, 'anggamangaz46@gmail.com', 'Aktif'),
(19, 'ST-2030211', 'Novita Sumiaty', 18, 4, 0, NULL, 'Staff', 'an.png', 1, 'novitasumiaty10@gmail.com', 'Aktif'),
(20, 'ST-2070211', 'Roni Wahyudin', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Skaterony4@gmail.com', 'Aktif'),
(21, 'ST-9391117', 'Nina Herlina', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'nina347.nh@gmail.com', 'Aktif'),
(22, 'ST-2150411', 'Riyan Apriliansah', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Raithonk087@gmail.com', 'Aktif'),
(23, 'ST-2180411', 'Suhendar', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Suhe946@gmail.com', 'Aktif'),
(24, 'ST-2210611', 'Pungky Wahyu Permadi', 12, 1, 0, NULL, 'Staff', 'an.png', 2, 'Pungkypermadi32@gmail.com', 'Aktif'),
(25, 'ST-1660811', 'Ela Karwati', 8, 3, 5, NULL, 'Staff', 'an.png', 1, 'Ellaadmisa@yahoo.com', 'Aktif'),
(26, 'ST-1890911', 'Rizki Aang Kusnira', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'aang.boaz@gmail.com', 'Aktif'),
(27, 'ST-1920911', 'Joko Pangestu', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'pangestujoko8@gmail.com', 'Aktif'),
(28, 'ST-2020911', 'Rina Rosdiana', 28, 4, 0, NULL, 'Staff', 'an.png', 1, 'rinarosdee9000@gmail.com', 'Promosi'),
(29, 'ST-2110911', 'Manggara Yudha', 12, 1, 0, NULL, 'Staff', 'an.png', 2, 'manggarayudha123@gmail.com', 'Aktif'),
(30, 'ST-10020318', 'Entri Roviawati', 9, 1, 0, NULL, 'Staff', 'an.png', 1, 'Entri.Roviawati@gmail.com', 'Aktif'),
(31, 'ST-2321011', 'Rahmat Kurnia', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Rkurnia931@gmail.com', 'Aktif'),
(32, 'ST-2331011', 'Agus Jati Permana', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'agusjati.ajp@gmail.com', 'Aktif'),
(33, 'ST-2631111', 'Oky Soniansyah', 18, 3, 10, NULL, 'Staff', 'an.png', 1, 'okysoniansyah@gmail.com', 'Aktif'),
(34, 'ST-2941211', 'Lusy Nurochmah', 18, 2, 0, NULL, 'Staff', 'an.png', 1, 'Zhythiegha@gmail.com', 'Aktif'),
(35, 'ST-3141211', 'Usep Sunandar', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'u_sseps@yahoo.com', 'Aktif'),
(36, 'ST-8900717', 'Ryan Septian', 6, 4, 0, NULL, 'Staff', 'an.png', 1, 'ryanslank8@gmail.com', 'Aktif'),
(37, 'ST-3220112', 'Shandy Septiansyah', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'Sanubil00@gmail.com', 'Aktif'),
(38, 'ST-9261017', 'Sinta Rahayu', 18, 2, 0, NULL, 'Staff', 'an.png', 1, 'rahayu.shinta91@gmail.com', 'Aktif'),
(39, 'ST-3640612', 'Septian Taupik Maulana', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'septian210915@gmail.com', 'Aktif'),
(40, 'ST-4010812', 'Kakang Dudi Saatul Bajuri', 12, 1, 0, NULL, 'Staff', 'an.png', 2, 'tand3novitasari@yahoo.Co.Id', 'Aktif'),
(41, 'ST-4090812', 'Firman Satia Adi', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'arkhavirendra.av@gmail.com', 'Aktif'),
(42, 'ST-4190912', 'Dadan Ramdan Sayuti', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'deky.ramdani@gmail.com', 'Aktif'),
(43, 'ST-4160912', 'Shylla Rizki', 5, 1, 0, NULL, 'Staff', 'an.png', 1, 'shylla.rizki23@gmail.com', 'Aktif'),
(44, 'ST-4200912', 'Hanny Setiani Catharina', 2, 3, 10, NULL, 'Staff', 'an.png', 2, 'Hannycatharina11@gmail.com', 'Aktif'),
(45, 'ST-4291012', 'Sopian Efendi', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Penkfrederick@gmail.com', 'Aktif'),
(46, 'ST-11480219', 'Hadi Wijaya', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Promosi'),
(47, 'ST-4611112', 'Fahrijal Awaludin', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Fahrijalawal94@gmail.com', 'Aktif'),
(48, 'ST-4601212', 'Ai Saadah', 9, 3, 10, NULL, 'Staff', 'an.png', 1, 'aisaadah153@gmail.com', 'Aktif'),
(49, 'ST-4581212', 'Haris Rismawan', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'hrismawan.zaafarani@gmail.com ', 'Aktif'),
(50, 'ST-4670113', 'Susan Sopiyan', 17, 1, 0, NULL, 'Staff', 'an.png', 2, 'susansopiyan@gmail.com', 'Aktif'),
(51, 'ST-4690113', 'Ahmad Masturi', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Ahmad.masturie@gmail.com', 'Aktif'),
(52, 'ST-4970413', 'Audiegat', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Gatneutton@gmail.com', 'Aktif'),
(53, 'ST-5000513', 'Saeful Ramdan', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Saefulramdan56@gmail.com ', 'Aktif'),
(54, 'ST-5130613', 'Tedi Setiadi Rismanto', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Teddysetiadi29@gmail.com', 'Aktif'),
(55, 'ST-5170713', 'Nirwan Kamanjaya', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'nirwan.onejapanese.kamanjaya4@gmail.com', 'Aktif'),
(56, 'ST-5340813', 'Farid Nurdiansyah', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'faridnurdiansyah992@gmail.com', 'Aktif'),
(57, 'ST-5350913', 'Selli Aprilianti Aulia', 9, 2, 0, NULL, 'Staff', 'an.png', 1, 'audiegart@gmail.com', 'Aktif'),
(58, 'ST-5471013', 'Ayang Septian Dwi M', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'Alone_tyand@yahoo.co.id', 'Aktif'),
(59, 'ST-5591113', 'Devi Sofiul Ahyar', 12, 1, 0, NULL, 'Staff', 'an.png', 2, 'Devisahyar@gmail.com', 'Aktif'),
(60, 'ST-5631113', 'R. Ismu Kumoro Sekti', 6, 2, 0, NULL, 'Staff', 'an.png', 1, 'ismusekti14@gmail.com', 'Aktif'),
(61, 'ST-5870314', 'Riki Rahayu', 12, 3, 10, NULL, 'Staff', 'an.png', 2, 'rikirahayu39@yahoo.com', 'Aktif'),
(62, 'ST-5940314', 'Fajar Gumilang', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'Fajardragneel00@gmail.com', 'Aktif'),
(63, 'ST-6010414', 'Billy Christian Hendra', 28, 4, 0, NULL, 'Staff', 'an.png', 1, 'billychristianhendra@gmail.com', 'Promosi'),
(64, 'ST-6270714', 'Julianto Eka Putra', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'julz.starbuzz25@gmail.com', 'Aktif'),
(65, 'ST-6320814', 'Tio Dakar Rhamadan', 2, 2, 0, NULL, 'Staff', 'an.png', 2, 'Tio.dakarramadhan2@gmail.com', 'Aktif'),
(66, 'ST-6340814', 'Angga Pratama', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'ap1159645@gmail.com', 'Aktif'),
(67, 'ST-6520914', 'Noer Rafa Juniawati', 21, 3, 10, NULL, 'Staff', 'an.png', 1, 'noerrafaj@gmail.com', 'Promosi'),
(68, 'ST-6731014', 'Oki Rusdianto', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'oki.narenda@gmail.com', 'Aktif'),
(69, 'ST-6851214', 'Anton Sukaton', 6, 1, 0, NULL, 'Staff', 'an.png', 1, 'Xantoncruz@gmail.com', 'Aktif'),
(70, 'ST-7110215', 'Riana Rahmat Sopian', 6, 3, 0, NULL, 'Staff', 'an.png', 1, 'mariente12@gmail.com', 'Aktif'),
(71, 'ST-7190215', 'Yudi Jamaludin', 13, 1, 0, NULL, 'Staff', 'an.png', 2, '', 'Aktif'),
(72, 'ST-7140315', 'Ahmad Widiarsono', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'awidars944@gmail.com', 'Aktif'),
(73, 'ST-7180315', 'Clinton Salim', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'clinton.salim@gmail.com', 'Aktif'),
(74, 'ST-7420715', 'Ira Reviani', 9, 1, 0, NULL, 'Staff', 'an.png', 1, 'irareviani30@gmail.com', 'Aktif'),
(75, 'ST-7430715', 'Tommy Fajar Triadi', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Mymoy1825@gmail.com', 'Aktif'),
(76, 'ST-7450815', 'Egantara', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'egantara27@gmail.com', 'Aktif'),
(77, 'ST-7460815', 'Rio Henra Gumelar', 17, 3, 10, NULL, 'Staff', 'an.png', 2, 'uzumakirio35@gmail.com', 'Aktif'),
(78, 'ST-7510815', 'Sandi Iskandar', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Iskandarsandi45@gmail.com', 'Aktif'),
(79, 'ST-9080917', 'Rizki Ade Mulyana', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'falerians1010@gmail.com', 'Aktif'),
(80, 'ST-7621015', 'Ismia Nursadiah', 21, 2, 0, NULL, 'Staff', 'an.png', 1, 'nursadiahismia@gmail.com', 'Promosi'),
(81, 'ST-7671015', 'Pratiwi Putri Utami', 3, 4, 0, NULL, 'Staff', 'an.png', 2, 'pratiwijung@gmail.com', 'Aktif'),
(82, 'ST-7711015', 'Jamaludin', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Kepogeje@gmail.com', 'Aktif'),
(83, 'ST-7791215', 'Rismawati', 9, 3, 10, NULL, 'Staff', 'an.png', 1, 'rrisrisma313@gmail.com', 'Aktif'),
(84, 'ST-7861215', 'Yadi Suryadi', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Yadisuryadi1297@gmail.com', 'Aktif'),
(85, 'ST-7870116', 'Gian Ginanjar', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'gian92ginanjar@gmail.com', 'Aktif'),
(86, 'ST-7880116', 'Angga Saepuloh', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Anggas484@gmail.com', 'Aktif'),
(87, 'ST-7910116', 'Rafi Nurahman', 13, 2, 0, NULL, 'Staff', 'an.png', 2, '', 'Aktif'),
(88, 'ST-7890116', 'Galih Ariestya Suparman', 17, 3, 10, NULL, 'Staff', 'an.png', 2, 'galih.seblay@gmail.com', 'Aktif'),
(89, 'ST-7950216', 'Asep Sunandar', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'asepsn07@gmail.com', 'Aktif'),
(90, 'ST-7920216', 'Muhammad Ikhrom Ahadia', 17, 1, 0, NULL, 'Staff', 'an.png', 2, 'aditahadia94@gmail.com', 'Aktif'),
(91, 'ST-8030416', 'Novita Ayu Lestari', 2, 1, 0, NULL, 'Staff', 'an.png', 2, 'nayu027@gmail.com', 'Aktif'),
(92, 'ST-8060416', 'Didit Hikmat Septian Deni', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'rdp.didit@gmail.com', 'Aktif'),
(93, 'ST-8070416', 'Purwanto', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'jrmpur@gmail.com', 'Aktif'),
(94, 'ST-8200716', 'Pepen Sopandi', 13, 3, 10, NULL, 'Staff', 'an.png', 2, '', 'Aktif'),
(95, 'ST-8250716', 'Ahmad Saepuloh', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'ahmadsaepuloh126@gmail.com', 'Aktif'),
(96, 'ST-8320816', 'Deni Kusniawan', 24, 3, 10, NULL, 'Staff', 'an.png', 2, 'Dkusniawan12@gmail.com', 'Promosi'),
(97, 'ST-8391016', 'Mochamad Rafie', 6, 1, 0, NULL, 'Staff', 'an.png', 1, 'Rafie_mochamad@yahoo.com', 'Aktif'),
(98, 'ST-8481116', 'Hadi Nurhadian', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'nurhadianhadi3@gmail.com', 'Aktif'),
(99, 'ST-8521116', 'Agis Maolana', 9, 1, 0, NULL, 'Staff', 'an.png', 1, 'aamaolana97@gmail.com', 'Aktif'),
(100, 'ST-8561216', 'Muhamad Jumhur', 8, 1, 0, NULL, 'Staff', 'an.png', 1, 'Jumhur46@gmail.com ', 'Aktif'),
(101, 'ST-8590117', 'Didi Haryadi', 6, 3, 10, NULL, 'Staff', 'an.png', 1, 'didihryd95@gmail.com', 'Aktif'),
(102, 'ST-8640217', 'Robi Rahmadi', 21, 4, 0, NULL, 'Staff', 'an.png', 1, 'robirahmadi86@gmail.com', 'Promosi'),
(103, 'ST-8660217', 'Riky Shandi Permadi', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'ree.key.rs@gmail.com', 'Aktif'),
(104, 'ST-8750417', 'Maya Nurlaela Sari', 21, 3, 10, NULL, 'Staff', 'an.png', 1, 'Mayanurlaela0933@gmail.com', 'Promosi'),
(105, 'ST-8760417', 'Indra Sanjaya', 9, 2, 0, NULL, 'Staff', 'an.png', 1, 'indera100@yahoo.com', 'Aktif'),
(106, 'ST-8770417', 'Yudi Permana', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'yudipermana1507@gmail.com', 'Aktif'),
(107, 'ST-8790417', 'Diva Maulana', 15, 3, 0, NULL, 'Staff', 'an.png', 1, 'maulanadiva89@gmail.com', 'Aktif'),
(108, 'ST-8820517', 'Hasya Azizah Gunawan', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'hasya.azizah01@gmail.com', 'Aktif'),
(109, 'ST-8850617', 'Nova Setiawan', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'huiaceng151@gmail.com', 'Aktif'),
(110, 'ST-8890717', 'Mega Puji Wilaksana', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Megafujiwilaksani@gmail.com', 'Aktif'),
(111, 'ST-8910717', 'Gheena Raniah Misbah', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'gheena.raniah16@gmail.com', 'Aktif'),
(112, 'ST-8920817', 'Irfan Rhifaldhi', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'Irfanwulung@gmail.com', 'Aktif'),
(113, 'ST-8930817', 'Imam Kamal Maulana', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Imamnano123456@gmail.com ', 'Aktif'),
(114, 'ST-8950817', 'Wulan Mawarni', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Wulanmwrni@gmail.com', 'Aktif'),
(115, 'ST-8960817', 'Rival Setiawan', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'rivalsetiawan60@gmail.com', 'Aktif'),
(116, 'ST-8970817', 'Yuni Kartini', 21, 4, 0, NULL, 'Staff', 'an.png', 1, 'yunikartini1211@gmail.com', 'Promosi'),
(117, 'ST-9120817', 'Ezra Dwi Bimantara Loppies', 8, 2, 0, NULL, 'Staff', 'an.png', 1, 'bimantaradwi@gmail.com', 'Aktif'),
(118, 'ST-9130917', 'Irfan Faturohman', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Lovemamah79@gmail.com', 'Aktif'),
(119, 'ST-9160917', 'Desterya Cristina Sihombing', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'desteryatannesa4@gmail.com', 'Aktif'),
(120, 'ST-9170917', 'Gufron Ramdhani', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'ramdanigufron@yahoo.com', 'Aktif'),
(121, 'ST-9100917', 'Charisa Glesiandra', 14, 1, 0, NULL, 'Staff', 'an.png', 2, 'sashawhaii.a.k.a.charisaglesiandra@gmail.com', 'Aktif'),
(122, 'ST-9180917', 'Abdillah Kafie Kurnia', 27, 2, 0, NULL, 'Staff', 'an.png', 2, 'Abdillah.kafie@gmail.com', 'Promosi'),
(123, 'ST-9190917', 'Bayu Mohamad Nur Fadillah', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'Bayumohnurfadillah@gmail.com', 'Aktif'),
(124, 'ST-9240917', 'Egi Rizki', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'egirizki90@gmail.com ', 'Aktif'),
(125, 'ST-9341017', 'Nur Aida', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'Nur24193@gmail.com', 'Aktif'),
(126, 'ST-9281017', 'Moch Soleh Ramdani', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'Ramsramdani043@gmail.com', 'Aktif'),
(127, 'ST-9291017', 'Rizky Alika Marwan', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Ralika8410@gmail.com', 'Aktif'),
(128, 'ST-9311117', 'Laras Oktaviani', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Cmi.blur66@gmail.com', 'Aktif'),
(129, 'ST-9321117', 'Muhamad Rifki', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Rifkinagara@gmail.com', 'Aktif'),
(130, 'ST-9371117', 'Wahyu Kurniawan', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'ebodwold5@gmail.com', 'Aktif'),
(131, 'ST-9421117', 'Delia Aprilia', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Deliaaprilliaa33@gmail.com', 'Aktif'),
(132, 'ST-11360219', 'Abdul Rohman', 24, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Promosi'),
(133, 'ST-9451217', 'Desta Panji Ramadan', 13, 1, 0, NULL, 'Staff', 'an.png', 2, 'Destapanjiii28@gmail.com', 'Aktif'),
(134, 'ST-9461217', 'Henda Manurdin', 26, 3, 10, NULL, 'Staff', 'an.png', 2, 'hendasatrio19@gmail.com', 'Promosi'),
(135, 'ST-9471217', 'N. Soniya Ulfah Hilmia', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'Soniyaulfah29@gmail.com', 'Aktif'),
(136, 'ST-11370219', 'Yuli Priadi Sucimardika', 24, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Promosi'),
(137, 'ST-9481217', 'Abdul Habib Hariri', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'abdulhabib594@gmail.com', 'Aktif'),
(138, 'ST-9501217', 'Siswanto', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'psiswanto04@gmail.com', 'Aktif'),
(139, 'ST-9511217', 'Giri Setiawan', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'girisetiawan90@gmail.com', 'Aktif'),
(140, 'ST-9541217', 'Ghian Noviansyah Rusmana', 7, 1, 0, NULL, 'Staff', 'an.png', 1, 'Ghiannv07@gmail.com', 'Aktif'),
(141, 'ST-9551217', 'Kevin Ekatama', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'ekatamakevin@gmail.com', 'Aktif'),
(142, 'ST-9601217', 'Tiara Agustina', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Tiaragustina98@gmail.com', 'Aktif'),
(143, 'ST-9611217', 'Ilman Gustiana', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'Ilmandochol@gmail.com', 'Aktif'),
(144, 'ST-9621217', 'Taopik Hidayat', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Taopikopey@gmail.com', 'Aktif'),
(145, 'ST-9631217', 'Vera Oktavianda', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'veraoctavianda55@gmail.com', 'Aktif'),
(146, 'ST-9671217', 'Dini Permatasari', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'dinipermatasarixiipav@gmail.com', 'Aktif'),
(147, 'ST-9681217', 'Muhamad Sidik Permana', 24, 1, 0, NULL, 'Staff', 'an.png', 2, '', 'Promosi'),
(148, 'ST-9750118', 'Depi Permana', 13, 3, 10, NULL, 'Staff', 'an.png', 2, 'depipermana33@gmail.com', 'Aktif'),
(149, 'ST-9760118', 'Romi Mochamad  Faizal', 24, 2, 0, NULL, 'Staff', 'an.png', 2, 'Romironaldo48@gmail.com', 'Promosi'),
(150, 'ST-9770118', 'Ari Nugraha Hardian', 24, 1, 0, NULL, 'Staff', 'an.png', 2, 'arymono18@gmail.com', 'Promosi'),
(151, 'ST-9780118', 'Nurullya', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'nurullyar@gmail.com', 'Aktif'),
(152, 'ST-9810118', 'Muhamad Irpan Abdillah', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'mirpanabdillah@gmail.com', 'Aktif'),
(153, 'ST-11660319', 'Tia Yulianto', 26, 4, 0, NULL, 'Staff', 'an.png', 2, 'tiaabdillah04@gmail.com', 'Promosi'),
(154, 'ST-9830218', 'Febi Abdarosad', 18, 3, 10, NULL, 'Staff', 'an.png', 1, 'Febiplpku@gmail.com ', 'Aktif'),
(155, 'ST-9850218', 'Agus Sulaeman', 8, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Aktif'),
(156, 'ST-9920218', 'Meida Rosdiana', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'meidarosdiana@gmail.com', 'Aktif'),
(157, 'ST-9930218', 'Siti Rosita', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Sitirosiiita18@gmail.com', 'Aktif'),
(158, 'ST-11670319', 'Robby Fauzy', 24, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Promosi'),
(159, 'ST-9990318', 'Umi Laeliyah', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'umi.laely27@gmail.com', 'Aktif'),
(160, 'ST-10060418', 'Muhamad Iqbal Harahap', 16, 1, 0, NULL, 'Staff', 'an.png', 2, 'm.iqbalharahap25@gmail.com', 'Aktif'),
(161, 'ST-11350219', 'Ijang Idris', 27, 4, 0, NULL, 'Staff', 'an.png', 2, 'ijangidris03@gmail.com', 'Promosi'),
(162, 'ST-10090418', 'Herlan Iswadi', 16, 1, 0, NULL, 'Staff', 'an.png', 2, 'herlaniswandi17@gmail.com', 'Aktif'),
(163, 'ST-10100418', 'Adi Khaerul Fajrie', 16, 2, 0, NULL, 'Staff', 'an.png', 2, 'Atengsamarudin19@gmail.com', 'Aktif'),
(164, 'ST-10120518', 'Suhaimi Reza Pachlevi', 16, 2, 0, NULL, 'Staff', 'an.png', 2, 'reza_suhaimi@gmail.com', 'Aktif'),
(165, 'ST-10140518', 'Santi Saleha', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'Santi. Saleha00@gmail.com', 'Aktif'),
(166, 'ST-10160518', 'Ari Rizky Hidayat', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'arii.1714@gmail.com', 'Aktif'),
(167, 'ST-10180518', 'Della Ayu Jayanti', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'dellaayujayanti10@gmail.com', 'Aktif'),
(168, 'ST-10240618', 'Ana Wihana', 18, 1, 0, NULL, 'Staff', 'an.png', 1, 'anawihana@gmail.com', 'Aktif'),
(169, 'ST-10250618', 'Dewi Rahayu', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'dewirahayu986@gmail.com', 'Aktif'),
(170, 'ST-10270618', 'Mohammad Divi Naufal', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Mdhivinaufal.35@gmail.com', 'Aktif'),
(171, 'ST-10310718', 'Rabil Irsan Novanto Ardyasa', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'rabilirsan48@gmail.com', 'Aktif'),
(172, 'ST-10330718', 'Fanny Erviani', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'fanierviani@gmail.com ', 'Aktif'),
(173, 'ST-10500718', 'Sidiq Purwanto', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Sidiqpurwanto47485@gmail.com', 'Aktif'),
(174, 'ST-10340718', 'Sheli Athapiani Yolandari', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Sheli.athapiani898@gmail.com', 'Aktif'),
(175, 'ST-10350718', 'M. Albilal Habiballoh', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'albilalkun@gmail.com', 'Aktif'),
(176, 'ST-10370718', 'Nurul Triadi', 24, 2, 0, NULL, 'Staff', 'an.png', 2, 'Nurultriadi7@gmail.com', 'Promosi'),
(177, 'ST-10390718', 'Rizki Noviyanti Yulianingsih', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'rizkinoviyanti1810@gmail.com', 'Aktif'),
(178, 'ST-10400718', 'Delia Mediana', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'Medianadelia8@gmail.com', 'Aktif'),
(179, 'ST-10410718', 'Alya Muthi Fakhirah', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'alyamuthid@gmail.com', 'Aktif'),
(180, 'ST-10420718', 'Mita Aprianti', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'mitaaprianti2000@gmail.com ', 'Aktif'),
(181, 'ST-10430718', 'Rosa Putriana Salim', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'rosaps1999@gmail.com', 'Aktif'),
(182, 'ST-10440718', 'Indira Zulyanti Harun', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'Indirazulyan@gmail.com', 'Aktif'),
(183, 'ST-10460718', 'Devi Aji Pamungkas', 26, 3, 10, NULL, 'Staff', 'an.png', 2, 'Nagamasnaga@gmail.com', 'Promosi'),
(184, 'ST-10470718', 'Gina Widaningsih', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'ghinawidyaningsih09@gmail.com', 'Aktif'),
(185, 'ST-10480718', 'Silvia Maharani', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Sisilmhrn4@gmail.com', 'Aktif'),
(186, 'ST-10510718', 'Diana Septiani', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'septianidiana202@gmail.com', 'Aktif'),
(187, 'ST-10520818', 'Sisca Nabila Apandi', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'Siscanabila61@gmail.com', 'Aktif'),
(188, 'ST-10540818', 'Irwan Febriansyah', 26, 3, 10, NULL, 'Staff', 'an.png', 2, 'Irwanpebriansyah@gmail.com', 'Promosi'),
(189, 'ST-10550818', 'Yoga Nugraha D', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'yoganugrahad@gmail.com', 'Aktif'),
(190, 'ST-10670818', 'Yadi Suryadi', 17, 3, 10, NULL, 'Staff', 'an.png', 2, 'yadisuryadi071188@gmail.com', 'Aktif'),
(191, 'ST-10580818', 'Kurnia Sundja Laktamahesa', 26, 1, 0, NULL, 'Staff', 'an.png', 2, 'Laktamahesa718@gmail.com', 'Promosi'),
(192, 'ST-10590818', 'Muhamad Iqbal Arsada', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'iqbalarsada@gmail.com', 'Aktif'),
(193, 'ST-10610818', 'Sri Resna Desi Deria', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Sriresnadesi@gmail.com', 'Aktif'),
(194, 'ST-10620818', 'Fajar Akbar Sugiri', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'fa216029@gmail.com', 'Aktif'),
(195, 'ST-10630818', 'Ridwan Firdaus', 26, 3, 10, NULL, 'Staff', 'an.png', 2, 'Tigamei97@gmail.com', 'Promosi'),
(196, 'ST-10640818', 'Romi Permana', 7, 2, 0, NULL, 'Staff', 'an.png', 1, 'romipermana277@gmail.com', 'Aktif'),
(197, 'ST-10650918', 'Neng Nira', 19, 1, 0, NULL, 'Staff', 'an.png', 1, 'nirra77@gmail.com', 'Promosi'),
(198, 'ST-10700918', 'Agus Herdiana Sukmana', 7, 1, 0, NULL, 'Staff', 'an.png', 1, 'herdianasukmana12@gmail.com', 'Aktif'),
(199, 'ST-10720918', 'Siti Herlina Dewi', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Dewiherlina818@yahoo.com', 'Aktif'),
(200, 'ST-10740918', 'Rivan Taufiq Rachmansyah', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'Rivantaufiq97@gmail.com', 'Aktif'),
(201, 'ST-10751018', 'Rista Herdiana', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'ristaherdiana13@gmail.com', 'Aktif'),
(202, 'ST-10761018', 'Yudi Permana', 26, 1, 0, NULL, 'Staff', 'an.png', 2, 'Yudistronghold@gmail.com', 'Promosi'),
(203, 'ST-10781018', 'Rifa Sopiatunisa', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'rifasopiatunisa@gmail.com', 'Aktif'),
(204, 'ST-10801018', 'Berlian Partawijaya', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'berlianpartawijaya@gmail.com', 'Aktif'),
(205, 'ST-10821018', 'Rustanji Saputra', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Ajjisaputra11@gmail.com', 'Aktif'),
(206, 'ST-10831118', 'Rendy Hartono', 7, 3, 0, NULL, 'Staff', 'an.png', 1, 'rendyhatono97@gmail.com ', 'Aktif'),
(207, 'ST-10841118', 'Galih Aditya', 17, 4, 0, NULL, 'Staff', 'an.png', 2, 'galihaditya70@gmail.com', 'Aktif'),
(208, 'ST-10861118', 'Rizki Ramanurga', 15, 4, 0, NULL, 'Staff', 'an.png', 1, 'rizkiyudadinata@gmail.com', 'Aktif'),
(209, 'ST-10871118', 'M Alwan Nurohman', 7, 1, 0, NULL, 'Staff', 'an.png', 1, 'alwan22nurohman@gmail.com', 'Aktif'),
(210, 'ST-10881118', 'Yudha Ajisantosa', 7, 3, 5, NULL, 'Staff', 'an.png', 1, 'yudaajisan129@gmail.com', 'Aktif'),
(211, 'ST-10891118', 'Dina Puspitasari', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'Puspitasari121297@gmail.com', 'Aktif'),
(212, 'ST-10911118', 'Rizki Ikhsan Baiti Rahman', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'Rizkiikhsan63@gmail.com', 'Aktif'),
(213, 'ST-10921118', 'Siti Rohimah', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'sitroh.art@gmail.com', 'Aktif'),
(214, 'ST-10931118', 'Fauzy Agustian Hakim', 15, 3, 10, NULL, 'Staff', 'an.png', 1, 'Sandix40@gmail.com', 'Aktif'),
(215, 'ST-10941118', 'Febbi Adriansyah', 15, 2, 0, NULL, 'Staff', 'an.png', 1, 'febbiadriansyah12@gmail.com', 'Aktif'),
(216, 'ST-10951118', 'Rekky Yusuf Firmansyah', 13, 4, 0, NULL, 'Staff', 'an.png', 2, 'rekkound@gmail.com', 'Aktif'),
(217, 'ST-10961118', 'Yoga Permana', 13, 2, 0, NULL, 'Staff', 'an.png', 2, 'Yogapermana140818@gmail.com ', 'Aktif'),
(218, 'ST-10971118', 'Hapid Kusdiansah', 13, 4, 0, NULL, 'Staff', 'an.png', 2, 'Hapidkusdiansah6@gmail.com', 'Aktif'),
(219, 'ST-10981118', 'Irvan Hardiansyah', 13, 4, 0, NULL, 'Staff', 'an.png', 2, 'Irvanhardiansyah66@gmail.com', 'Aktif'),
(220, 'ST-11001218', 'Bian Sukanda Putra', 7, 4, 0, NULL, 'Staff', 'an.png', 1, 'bianputra41@gmail.com', 'Aktif'),
(221, 'ST-11021218', 'Elta Aulia Rachman', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'eltaaulia@gmail.com', 'Aktif'),
(222, 'ST-11031218', 'Sandi Atamia', 15, 1, 0, NULL, 'Staff', 'an.png', 1, 'Sandiatamia39@gmail.com', 'Aktif'),
(223, 'ST-11051218', 'Adhi Adhari Pamungkas', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'adhiadharip@gmail.com', 'Training'),
(224, 'ST-11060119', 'Adi Mulyadi', 20, 3, 10, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(225, 'ST-11070119', 'Fajar Saputra', 20, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(226, 'ST-11080119', 'Taufik Zulfikar', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'Taufikzul12@gmail.com', 'Training'),
(227, 'ST-11090119', 'Leni Indriani', 25, 1, 0, NULL, 'Staff', 'an.png', 1, 'leniindriani14@gmail.com', 'Training'),
(228, 'ST-11100119', 'Bayu Samudra', 25, 3, 10, NULL, 'Staff', 'an.png', 1, 'Bayusam1998@gmail.com', 'Training'),
(229, 'ST-11110119', 'Okta Nugraha Pratama', 25, 3, 10, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(230, 'ST-11120119', 'Astrid Julianda Azhara', 24, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Training'),
(231, 'ST-11130119', 'Denden Rusmawan', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'gilfarie@gmail.com', 'Training'),
(232, 'ST-11140119', 'Alder Ryani Isnaeni', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'alderryaniisnaeni0759@gmail.com', 'Training'),
(233, 'ST-11160119', 'Rifki Ramdani', 20, 2, 0, NULL, 'Staff', 'an.png', 1, 'derifky6@gmail.com', 'Training'),
(234, 'ST-11170119', 'Lutvi Legi Maulana', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'lutvilegimaulana@gmail.com', 'Training'),
(235, 'ST-11180119', 'Nia Rosita', 24, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Training'),
(236, 'ST-11190119', 'Deni Supratman', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'denisupratman@icloud.com', 'Training'),
(237, 'ST-11200119', 'Balqis Hana Azizah', 24, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Training'),
(238, 'ST-11310119', 'Hanifah Rachmawati', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'hanifahrachmawati@live.com', 'Training'),
(239, 'ST-11210119', 'Sofyan Yusuf', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'sofyan210598@gmail.com', 'Training'),
(240, 'ST-11230119', 'Heri Mohamad Ridwan', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'Heri.mohamadr@gmail.com', 'Training'),
(241, 'ST-11240119', 'Winda Yulia Citra', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'Windasahid22@gmail.com', 'Training'),
(242, 'ST-11250119', 'Nina Niogan', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'Ninaniogan@gmail.com', 'Training'),
(243, 'ST-11260119', 'Asep Tatang', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'Astangmue29@gmail.com', 'Training'),
(244, 'ST-11270119', 'Deva Agustina', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'devaagustina8@gmail.com', 'Training'),
(245, 'ST-11280119', 'Anastasya Juliani', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'anastasya.juliani@gmail.com ', 'Training'),
(246, 'ST-11290119', 'Ridwan Arifa Nugraha', 20, 2, 0, NULL, 'Staff', 'an.png', 1, 'ridwanarifa1999@gmail.com', 'Training'),
(247, 'ST-11300119', 'Sendi Sopian', 20, 4, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(248, 'ST-11320119', 'Siti Herdianti', 25, 3, 0, NULL, 'Staff', 'an.png', 1, 'Antikuh7@gmail.com', 'Training'),
(249, 'ST-11330119', 'Restu Uci Lestari', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'restuuci62@gmail.com', 'Training'),
(250, 'ST-11340119', 'Adi Darma Suhara', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'adidarmasuhara@gmail.com', 'Training'),
(251, 'ST-11530119', 'Tia Nugraha', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'nugraha.tia17@gmail.com', 'Training'),
(252, 'ST-11380219', 'Indra Setiawan', 20, 2, 0, NULL, 'Staff', 'an.png', 1, 'indrasetiawan310899@gmail.com', 'Training'),
(253, 'ST-11390219', 'Dedi Junaedi', 20, 2, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(254, 'ST-11400219', 'Gelar Nugraha', 20, 3, 10, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(255, 'ST-11420219', 'Oktaviani Ayu Rachmawati', 25, 4, 0, NULL, 'Staff', 'an.png', 1, 'octavianiar10@gmail.com', 'Training'),
(256, 'ST-11430219', 'Trisna Aprillianti', 25, 1, 0, NULL, 'Staff', 'an.png', 1, 'Trisnaaprillianti00@gmail.com', 'Training'),
(257, 'ST-11440219', 'Riza Nurdin', 20, 2, 0, NULL, 'Staff', 'an.png', 1, 'rizanurdin19@gmail.com', 'Training'),
(258, 'ST-11450219', 'Fernaldy Aditya Taufik', 20, 3, 10, NULL, 'Staff', 'an.png', 1, 'fernaldiaditya06@gmail.com', 'Training'),
(259, 'ST-11460219', 'Bayu Ristendi', 25, 3, 10, NULL, 'Staff', 'an.png', 1, 'bayuristendiii@gmail.com', 'Training'),
(260, 'ST-11470219', 'Ardhi Kurniawan', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(261, 'ST-11500219', 'Gunawan Fajar Ramadhan', 20, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(262, 'ST-11540219', 'Adi Permana', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'djayahaha@gmail.com', 'Training'),
(263, 'ST-11550219', 'Iqbal Deari Wahyudin', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'iqbaldeari14@gmail.com', 'Training'),
(264, 'ST-11520219', 'Siti Nurunniah', 19, 3, 5, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(265, 'ST-11560219', 'Anisa Sri Wahyuni', 25, 2, 0, NULL, 'Staff', 'an.png', 1, 'anisaw923@gmail.com', 'Training'),
(266, 'ST-11570219', 'Andes Kabermi', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(267, 'ST-11580219', 'Reddy Rahayu', 20, 4, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(268, 'ST-11590219', 'Fitriani Mandela', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(269, 'ST-11600219', 'Sendrio Fahmi Aditia', 25, 2, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(270, 'ST-11610219', 'Mochammad Tri Gymnastiar', 25, 3, 10, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(271, 'ST-11620319', 'Evan Melvin', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'evanmelvin12@gmail.com', 'Training'),
(272, 'ST-11630319', 'Eka Miftahul Rohmat', 26, 4, 0, NULL, 'Staff', 'an.png', 2, 'ekamiftahulrahmat99@gmail.com', 'Training'),
(273, 'ST-11640319', 'Reza Arif Rahman', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'rezaarif3886@gmail.com', 'Training'),
(274, 'ST-11650319', 'Dede Krisna Alddy Aditya', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'dedekrisna10@gmail.com', 'Training'),
(275, 'ST-11740319', 'Yoga Adiprastio', 20, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(276, 'ST-11750319', 'Taufik Firmansyah', 25, 3, 10, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(277, 'ST-11760319', 'Muhamad Rizky M', 25, 2, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(278, 'ST-11680319', 'Yaya Waryaman', 20, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(279, 'ST-11690319', 'Egi Saputra', 20, 4, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(280, 'ST-11720319', 'Lutfi Hendrawan', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'lutfihendrawan226@gmail.com', 'Training'),
(281, 'ST-11730319', 'Novaldi Rizky Pahlevi', 24, 4, 0, NULL, 'Staff', 'an.png', 2, 'rzknovaldi@gmail.com', 'Training'),
(282, 'ST-11770319', 'Saep Purnama', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(283, 'ST-11780319', 'Iqbal Subagja', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(284, 'ST-11790319', 'Cahya Purnama', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(285, 'ST-11800319', 'Mutiara Citra WNH', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(286, 'ST-11700319', 'Giman Nurjaman', 20, 4, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(287, 'ST-11710319', 'Rizqie Puja Afriyansyah', 26, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Training'),
(288, 'ST-11810319', 'Andrian Tiara', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(289, 'ST-11820319', 'Yulianto Dwi Nugroho', 20, 3, 10, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(290, 'ST-11830319', 'Gevin Anugraha Saevani Sugandi', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(291, 'ST-11840319', 'Indra Setiawan', 25, 2, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(292, 'ST-11850319', 'Ikhsan', 25, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training'),
(293, 'ST-11860319', 'Rizky Muhammad', 26, 4, 0, NULL, 'Staff', 'an.png', 2, '', 'Training'),
(294, 'ST-11870319', 'Atep Yogi Pujiana', 20, 1, 0, NULL, 'Staff', 'an.png', 1, '', 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `tmsttask`
--

CREATE TABLE `tmsttask` (
  `id` int(11) NOT NULL,
  `taskname` varchar(50) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmsttask`
--

INSERT INTO `tmsttask` (`id`, `taskname`, `point`, `status`) VALUES
(1, 'Upselling', 10, 0),
(2, 'Guest Comment Monthly', 10, 0),
(3, 'NO PQNC', 10, 0),
(4, 'No Complaint Greeter', 10, 0),
(5, 'No Skipper/ Void / Lebih dan kurang gesek', 10, 0),
(6, 'Free Complaint', 10, 0),
(7, 'Kirim rekap tepat waktu hari Minggu', 10, 0),
(8, 'PRP GREEN ZONE', 10, 0),
(9, 'Daily Sales Target 27 April 2019', 5, 1),
(10, 'Daily Sales Target 28 April 2019', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `toutletpoint`
--

CREATE TABLE `toutletpoint` (
  `id` int(11) NOT NULL,
  `outlet` tinyint(4) DEFAULT NULL,
  `totalpoint` int(11) DEFAULT NULL,
  `bulan` tinyint(4) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `aktif` tinyint(4) DEFAULT NULL,
  `usedpoint` int(11) DEFAULT NULL,
  `sisapoint` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toutletpoint`
--

INSERT INTO `toutletpoint` (`id`, `outlet`, `totalpoint`, `bulan`, `tahun`, `aktif`, `usedpoint`, `sisapoint`) VALUES
(7, 1, 2500, 5, 2019, 1, 0, 2500),
(8, 2, 2500, 5, 2019, 1, 0, 2500),
(9, 3, 2500, 5, 2019, 1, 695, 1805),
(10, 100, 2500, 5, 2019, 1, 0, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tredeempoint`
--

CREATE TABLE `tredeempoint` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tglredeem` date DEFAULT NULL,
  `idgift` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ttasklist`
--

CREATE TABLE `ttasklist` (
  `id` int(11) NOT NULL,
  `task` tinyint(4) DEFAULT NULL,
  `outlet` tinyint(4) DEFAULT NULL,
  `aktifdari` datetime DEFAULT NULL,
  `aktifsampai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttasklist`
--

INSERT INTO `ttasklist` (`id`, `task`, `outlet`, `aktifdari`, `aktifsampai`) VALUES
(1, 10, 1, '2019-04-28 00:00:00', '2019-04-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` enum('Admin','User','SuperAdmin') DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pp` varchar(20) DEFAULT NULL,
  `outlet` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `nama`, `pp`, `outlet`) VALUES
(1, 'admin', '9222e8edf1c3f65d9d87590914012f35e4676f0e', 'SuperAdmin', 'System Administrator', 'an.png', 99),
(4, 'budi', '9222e8edf1c3f65d9d87590914012f35e4676f0e', 'User', 'Budi Priyo Utomo', 'an.png', 3),
(15, 'topan', 'faefb7b3061b21ae30a4960072df6ca2b1c44c62', 'Admin', 'Asep Topan Suryadi', 'an.png', 3),
(40, 'ivan', '06ac8593e10db4e56abbdfdfae0aadda4d22b7ec', 'SuperAdmin', 'Ivan Saputra', 'an.png', 99),
(41, 'melinda', '17ca2e9bf93b49246b61aca89dd591d770e9de6c', 'SuperAdmin', 'Melinda Liyoto', 'an.png', 99),
(42, 'irene', '3df374303ac65739caf97411731735d93fd94580', 'Admin', 'Adhelheid Irene', 'an.png', 99),
(43, 'sisca', 'ed08a7683f3cd41bff18ffb08971a9de6967c5c4', 'Admin', 'Sisca F Sunardi', 'an.png', 99),
(44, 'derra', 'ee889c08d323b3d8349e6fe16e7bcb0c84620e12', 'Admin', 'Derra Zulkifli', 'an.png', 99),
(45, 'ana', '2971516570844224b9071649ee90f9cb1955b7c4', 'User', 'Ana Wihana', 'an.png', 1),
(46, 'billy', '3a06564ac55248e80fe309eb0896825b8123202a', 'User', 'Billy Christian', 'an.png', 100),
(47, 'dyah', 'b328bd3aff2e8a4e7fd3f03c8289657ca446709a', 'Admin', 'Dyah Yanti ', 'an.png', 99),
(48, 'febi', '3606c337343854f88102ea08a019ccb3faea6f5d', 'User', 'Febi Abdarosad', 'an.png', 3),
(49, 'lusy', 'ecff9e6ada76c9e5a38b109c1218d3e211870f20', 'User', 'Lusy Nurochmah', 'an.png', 2),
(50, 'novi', '595d4b436be73a5e550a4f70c0cddbe124d299aa', 'User', 'Novita Sumiaty', 'an.png', 100),
(51, 'oky', 'ba1843c0e4efc9ee95933e12187c817417e973bf', 'User', 'Oky soniansyah', 'an.png', 3),
(52, 'sinta', '50c76d3dc5b1c674027d6a416aae04f65601dd65', 'User', 'Sinta Rahayu', 'an.png', 2),
(53, 'shylla', '421ded87dbc5e04a67c60e0fc79726adcf22c238', 'User', 'Shylla Rizki', 'an.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taddpoint`
--
ALTER TABLE `taddpoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmstdivisi`
--
ALTER TABLE `tmstdivisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmstgift`
--
ALTER TABLE `tmstgift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmstjabatan`
--
ALTER TABLE `tmstjabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmstoutlet`
--
ALTER TABLE `tmstoutlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmststaff`
--
ALTER TABLE `tmststaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmsttask`
--
ALTER TABLE `tmsttask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toutletpoint`
--
ALTER TABLE `toutletpoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tredeempoint`
--
ALTER TABLE `tredeempoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttasklist`
--
ALTER TABLE `ttasklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taddpoint`
--
ALTER TABLE `taddpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `tmstdivisi`
--
ALTER TABLE `tmstdivisi`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tmstgift`
--
ALTER TABLE `tmstgift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tmstjabatan`
--
ALTER TABLE `tmstjabatan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tmstoutlet`
--
ALTER TABLE `tmstoutlet`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tmststaff`
--
ALTER TABLE `tmststaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `tmsttask`
--
ALTER TABLE `tmsttask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `toutletpoint`
--
ALTER TABLE `toutletpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tredeempoint`
--
ALTER TABLE `tredeempoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ttasklist`
--
ALTER TABLE `ttasklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
