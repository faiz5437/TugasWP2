-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 04:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpa_inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(8) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `satuan` enum('Pcs','Unit','Box') DEFAULT 'Pcs',
  `id_operator` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `satuan`, `id_operator`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '01', 'Minuman', 120000, 'Pcs', 1, '2022-06-21 15:59:49', '2022-06-21 15:59:49', '2022-06-23 13:59:20'),
(5, '0212', 'Soto Ayam', 12000, 'Pcs', 1, '2022-06-22 11:42:06', '2022-06-22 11:42:06', '2022-06-23 13:59:22'),
(6, '01', 'Minuman', 12389, 'Pcs', 1, '2022-06-22 14:57:03', '2022-06-22 14:57:03', '2022-06-23 13:59:24'),
(7, '01234', 'mamba', 45000, 'Pcs', 3, '2022-06-22 15:12:38', '2022-06-22 15:12:38', '2022-07-28 11:11:19'),
(8, '0212', 'ads', 1329, 'Pcs', 6, '2022-06-22 15:17:00', '2022-06-22 15:17:00', '2022-07-28 11:11:17'),
(9, '0212', 'soto ayam daging', 350000, 'Unit', 8, '2022-06-23 13:58:00', '2022-06-23 13:58:00', '2022-07-28 11:11:14'),
(10, '132', 'mamsfsafs', 1212378, 'Pcs', 5, '2022-06-23 14:50:00', '2022-06-23 14:50:00', '2022-06-23 15:14:09'),
(11, '111', 'hha', 1234555, 'Pcs', 3, '2022-06-23 15:58:00', '2022-06-23 15:58:00', '2022-07-28 11:11:12'),
(12, '010101', 'Batagor', 1000, 'Pcs', 9, '2022-06-23 16:00:00', '2022-06-23 16:00:00', '2022-06-23 16:00:38'),
(13, '001', 'Teh Botol', 20000, 'Box', 12, '2022-07-28 11:17:00', '2022-07-28 11:17:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_keluar`
--

CREATE TABLE `tbl_barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `qty_keluar` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_keluar`
--

INSERT INTO `tbl_barang_keluar` (`id_barang_keluar`, `qty_keluar`, `id_barang`, `id_operator`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, '2022-06-22 08:43:41', '2022-06-22 08:43:41', '2022-06-22 08:43:41'),
(2, 12384, 9, 1, '2022-06-23 14:56:18', '2022-06-23 14:56:18', '2022-07-28 11:10:32'),
(3, 123, 9, 1, '2022-06-23 14:56:27', '2022-06-23 14:56:27', '2022-07-28 11:10:30'),
(4, 223, 7, 1, '2022-06-23 14:56:45', '2022-06-23 14:56:45', '2022-06-23 16:11:39'),
(5, 2147483647, 7, 1, '2022-06-23 15:00:36', '2022-06-23 15:00:36', '2022-06-23 16:11:35'),
(6, 2147483647, 9, 1, '2022-06-23 15:00:57', '2022-06-23 15:00:57', '2022-06-23 16:11:30'),
(7, 212222222, 8, 1, '2022-06-23 15:01:17', '2022-06-23 15:01:17', '2022-06-23 16:11:27'),
(8, 11, 8, 1, '2022-06-23 15:03:00', '2022-06-23 15:03:00', '2022-06-23 16:11:24'),
(9, 21, 8, 1, '2022-06-23 15:03:53', '2022-06-23 15:03:53', '2022-06-23 16:10:50'),
(10, 2, 9, 1, '2022-06-23 15:12:14', '2022-06-23 15:12:14', '2022-06-23 16:09:41'),
(11, 1, 11, 1, '2022-07-26 13:29:49', '2022-07-26 13:29:49', '2022-07-28 11:10:27'),
(15, 2, 7, 1, '2022-07-28 23:31:37', '2022-07-28 23:31:37', '2022-07-28 23:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_masuk`
--

CREATE TABLE `tbl_barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `qty_masuk` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_masuk`
--

INSERT INTO `tbl_barang_masuk` (`id_barang_masuk`, `qty_masuk`, `id_barang`, `id_operator`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 5, 1, '2022-06-22 14:05:46', '2022-06-22 14:05:46', '2022-06-24 15:51:23'),
(2, 7, 7, 1, '2022-06-23 13:56:02', '2022-06-23 13:56:02', '2022-07-28 11:10:54'),
(3, 11111, 10, 1, '2022-06-23 14:59:11', '2022-06-23 14:59:11', '2022-07-28 11:10:52'),
(4, 3, 8, 1, '2022-06-23 15:05:04', '2022-06-23 15:05:04', '2022-07-28 11:10:50'),
(5, 2, 9, 1, '2022-06-23 15:23:47', '2022-06-23 15:23:47', '2022-07-28 11:10:48'),
(6, 213, 8, 1, '2022-06-23 15:33:37', '2022-06-23 15:33:37', '2022-06-24 15:51:25'),
(7, 776, 9, 9, '2022-06-23 15:47:03', '2022-06-23 15:47:03', '2022-07-28 11:10:46'),
(8, 776, 8, 3, '2022-06-23 15:48:26', '2022-06-23 15:48:26', '2022-07-28 11:10:44'),
(9, 222, 7, 3, '2022-06-23 15:53:48', '2022-06-23 15:53:48', '2022-07-28 11:10:41'),
(10, 1233, 7, 1, '2022-06-24 15:51:16', '2022-06-24 15:51:16', '2022-07-28 11:10:39');

--
-- Triggers `tbl_barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `sisa` AFTER INSERT ON `tbl_barang_masuk` FOR EACH ROW BEGIN

   UPDATE tbl_barang_masuk SET qty_masuk = qty_masuk - NEW.qty_masuk

   WHERE id_barang_masuk = NEW.id_barang_masuk;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`id_operator`, `nama_operator`, `username`, `password`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Muhamad Faiz', 'faiz', '123', 'faiz@uculd@gmail.com', '2022-06-21 16:04:08', '2022-06-21 11:04:08', '2022-06-21 11:04:08'),
(2, 'Muhamad', 'faiz', '1234', 'faizuculd@gmail.com', '2022-06-22 05:43:53', '2022-06-22 05:43:53', '2022-06-22 05:43:53'),
(3, 'nisa handiani 123', 'nisaaaa', 'nisa123', 'handianinisa@gmail.com', '2022-06-22 10:45:53', '2022-06-22 11:14:24', '2022-06-22 13:15:41'),
(4, 'mm', 'asdf', '1234', 'fa@gmail.com', '2022-06-22 10:47:06', '2022-06-22 10:47:06', '2022-06-22 11:17:28'),
(5, 'Muhamad Faiz', 'faiz123', 'faiz345', 'faizuculd@gmail.com', '2022-06-22 11:30:33', '2022-06-22 11:30:33', '0000-00-00 00:00:00'),
(6, 'Muhamad Faiz', 'faiz222', 'faiz345', 'faizuculd@gmail.com', '2022-06-22 11:32:10', '2022-06-22 11:32:10', '0000-00-00 00:00:00'),
(7, 'Muhamad Faiz', 'faiz', '123', 'faizuculd@gmail.com', '2022-06-22 13:17:03', '2022-06-22 13:17:03', '2022-07-28 11:16:50'),
(8, 'Nisa Handiani', 'nisa', '123', 'handianinisa@gmail.com', '2022-06-22 13:17:48', '2022-06-22 13:17:48', '2022-07-28 11:16:43'),
(9, 'Surya Purnama Putra', 'Surya', 'qweasd123', 'vtaugak@gmail,com', '2022-06-23 15:21:48', '2022-06-23 15:21:48', '2022-07-28 11:16:46'),
(10, 'Risman', 'Risman', 'qweasd123', 'Risman@gmail.com', '2022-06-23 15:22:27', '2022-06-23 15:22:27', '2022-07-28 11:16:52'),
(11, 'Rifqi Muahammad Fadholi', 'Lord', 'qweasd123', 'rifki@gmail.com', '2022-06-23 15:23:04', '2022-06-23 15:23:04', '2022-07-28 11:16:54'),
(12, 'Muhamad Faiz', 'faiz5437', 'faiz@uculd', 'faizuculd@gmail.com', '2022-07-28 11:16:30', '2022-07-28 11:16:30', NULL),
(13, 'Bidin', 'adminmm', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'adittyasubagja13@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'anjani', 'faiz', '699a474e923b8da5d7aefbfc54a8a2bd', 'jinan@ars.id', '2022-07-28 15:55:21', '2022-07-28 15:55:21', NULL),
(15, 'Muamad Faiz', 'user', '47bce5c74f589f4867dbd57e9ca9f808', 'faizuculd@gmail.com', '2022-07-28 16:05:23', '2022-07-28 16:05:23', NULL),
(16, 'Muamad Faiz', 'user', '47bce5c74f589f4867dbd57e9ca9f808', 'faizuculd@gmail.com', '2022-07-28 16:07:08', '2022-07-28 16:07:08', NULL),
(17, '', 'dd', 'd41d8cd98f00b204e9800998ecf8427e', '', '2022-07-28 16:24:21', '2022-07-28 16:24:21', NULL),
(18, 'Muhamad Faiz', 'dda', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'faiz@uculd.com', '2022-07-28 16:26:04', '2022-07-28 16:26:04', NULL),
(19, 'Muamad Faiz', 'kkl', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'adittyasubagja13@gmail.com', '2022-07-28 16:27:30', '2022-07-28 16:27:30', NULL),
(20, 'Muhamad Faiz', 'laddaa', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'adittyasubagja13@gmail.com', '2022-07-28 16:28:15', '2022-07-28 16:28:15', NULL),
(21, 'Muamad Faiz', 'ssammv', 'd2aa5d5f015269b9848125ba6517be4f', 'adittyasubagja13@gmail.com', '2022-07-28 16:28:45', '2022-07-28 16:28:45', NULL),
(22, 'mmk', 'fakla', '0d2e00d2c8b42eefcd3b0b97be31dcaa', 'asdad@fd.vv', '2022-07-28 16:29:44', '2022-07-28 16:29:44', NULL),
(23, 'Muhamad Faiz', 'wooppr', '196b0f14eba66e10fba74dbf9e99c22f', 'handianinisa@gmail.com', '2022-07-28 16:30:25', '2022-07-28 16:30:25', NULL),
(24, 'Muhamad Faiz', 'ppoeowe', 'b453ba1edc232db82fa7181b0e387479', 'handianinisa@gmail.com', '2022-07-28 16:32:58', '2022-07-28 16:32:58', NULL),
(25, 'Muamad Faiz', 'nisa5437', '9d4d4ab0dfdb72a54b895d78b90b09c7', 'handianinisa@gmail.com', '2022-07-28 16:44:16', '2022-07-28 16:44:16', NULL),
(26, 'Muamad Faiz', 'lkotetihfdg', 'a5b1c9fda61b0e018d51f0a5c4952658', 'adittyasubagja13@gmail.com', '2022-07-28 16:52:23', '2022-07-28 16:52:23', NULL),
(27, 'Muhamad Faiz', 'faiz40159', 'aa2717dddc496e99e28989905eac5a0e', 'faizuculd@gmail.com', '2022-07-28 17:11:18', '2022-07-28 17:11:18', NULL),
(28, 'Muamad Faiz', 'admin', 'adbf5a778175ee757c34d0eba4e932bc', 'faizuculd@gmail.com', '2022-07-28 18:11:29', '2022-07-28 18:11:29', NULL),
(29, 'Muhamad Faiz', 'kklglg', '20f4b1f7ed85da7144f1a6d7f7d2b815', 'Muhamad Faiz', '2022-07-28 18:12:29', '2022-07-28 18:12:29', NULL),
(30, 'Muamad Faiz', 'mmmmmmm', 'c99a11a53a3748269e3f86d7ac38df11', 'adittyasubagja13@gmail.com', '2022-07-28 18:13:47', '2022-07-28 18:13:47', NULL),
(31, 'anjani', 'aaaaaaaaaaaaaaaaaaa', '60390c7e429e38e8449519011a24f79d', 'adittyasubagja13@gmail.com', '2022-07-28 18:15:32', '2022-07-28 18:15:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `tbl_barang_masuk`
--
ALTER TABLE `tbl_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_barang_masuk`
--
ALTER TABLE `tbl_barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
