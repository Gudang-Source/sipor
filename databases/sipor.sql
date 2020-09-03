-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2020 at 03:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u334014520_sipor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_laporan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `latt` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `type_laporan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `alamat`, `email`, `jenis_laporan`, `keterangan`, `latt`, `longi`, `photo`, `tanggal`, `type_laporan`, `status`) VALUES
(7, 'Jl. Raya Dayeuhkolot No.132, Dayeuhkolot, Kec. Dayeuhkolot, Bandung, Jawa Barat 40258, Indonesia', 'Octaviansaja2@gmail.com', 'LAPORAN_AKB', 'BBPK', '-6.9803096', '107.6199549', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja2%40gmail.com-1593659921805?alt=media&token=d1042571-778f-4416-8a04-bc87c14646e2', '02-07-2020', 'LAPORAN_AKB', '1'),
(8, 'Jalan Kebon lega 1 Rt.02 rw.02 no.19, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235', 'octaviansaja2@gmail.com', 'LAPORAN_AKB', 'testing new server', '-6.9454728', '107.5998983', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja2%40gmail.com-1594097859679?alt=media&token=67db82f6-1125-45e2-a45d-281bcb543e67', '07-07-2020', 'LAPORAN_AKB', '3'),
(9, 'Jalan Kebon lega 1 Rt.02 rw.02 no.19, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235', 'octaviansaja2@gmail.com', 'LAPORAN_FASILITAS', 'new server', '-6.9454728', '107.5998983', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja2%40gmail.com-1594097895515?alt=media&token=fef32be0-3554-4842-9993-1b22fd9bef5b', '07-07-2020', 'Lampu Jalan', '1'),
(10, 'Jalan Kebon lega 1 Rt.02 rw.02 no.19, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235', 'octaviansaja2@gmail.com', 'LAPORAN_FASILITAS', '', '-6.9454728', '107.5998983', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja2%40gmail.com-1594097895515?alt=media&token=fef32be0-3554-4842-9993-1b22fd9bef5b', '07-07-2020', 'Lampu Jalan', '1'),
(11, 'Halte Alun - Alun Bandung, Balonggede, Kec. Regol, Kota Bandung, Jawa Barat, Indonesia', 'octaviansaja2@gmail.com', 'LAPORAN_FASILITAS', 'Masjid agung alun-alun sudah dibuka untuk umum, banyak yang tidak pakai masker', '-6.9211126', '107.6072976', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja2%40gmail.com-1594514832110?alt=media&token=dd91ed60-1f87-4369-a7e6-9110c4948ed3', '12-07-2020', 'Masjid', '1'),
(12, 'Jalan Kebon lega 1 Rt.02 rw.02 no.19, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235', 'octaviansaja52@gmail.com', 'LAPORAN_AKB', 'laporan AKB', '-6.9454642', '107.5998922', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja52%40gmail.com-1595420700060?alt=media&token=f7aa1b57-14d3-4ddc-a1b2-0e9d3c9bc6bf', '22-07-2020', 'LAPORAN_AKB', '1'),
(13, 'Jl. Sawargi II No.Kel, Cibaduyut, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40236, Indonesia', 'iyeuroni@gmail.com', 'LAPORAN_AKB', 'tes', '-6.952881299999999', '107.59526769999998', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/iyeuroni%40gmail.com-1595420781805?alt=media&token=1758f43b-c477-42e6-bd4a-d21fb7feccce', '22-07-2020', 'LAPORAN_AKB', '4'),
(14, 'Unnamed Road, Kb. Lega, Bojongloa Kidul, Kota Bandung, Jawa Barat 40235, Indonesia', 'octaviansaja52@gmail.com', 'LAPORAN_AKB', 'test 123', '-6.9453327', '107.5997358', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja52%40gmail.com-1595421812268?alt=media&token=d926c487-ba17-4954-96bd-b542fad8c26b', '22-07-2020', 'LAPORAN_AKB', '1'),
(15, 'Jalan Kebon lega 1 Rt.02 rw.02 no.19, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40235', 'octaviansaja52@gmail.com', 'LAPORAN_FASILITAS', 'rambu rusak', '-6.9454634', '107.5998924', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/octaviansaja52%40gmail.com-1595422071766?alt=media&token=d590db43-e270-479f-a8de-3498f18071bf', '22-07-2020', 'Rambu Lalulintas', '1'),
(16, 'Jl. Sawargi II No.Kel, Cibaduyut, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40236, Indonesia', 'iyeuroni@gmail.com', 'LAPORAN_AKB', 'Test\n', '-6.9528759', '107.5952657', 'https://firebasestorage.googleapis.com/v0/b/sipor-a25b2.appspot.com/o/iyeuroni%40gmail.com-1595776986996?alt=media&token=ce7c5ef8-d0bb-448a-9ad1-b809e7573834', '26-07-2020', 'LAPORAN_AKB', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(12, 'admin', 'admin@email.com', 'default.jpg', '$2y$10$Tis2QcUFKTSzcBPvCMR6N.3bxPY2cU7/Ee4AXkQzscpOPJ1u.2aku', 1, 1, 1593608203);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2),
(10, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(0, 'Menu'),
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 1, 'Users', 'admin/users', 'fas fa-fw fa-user-friends', 1),
(10, 1, 'Laporan', 'admin/laporan', 'fas fa-fw fa-server', 1),
(11, 1, 'Pesan Masuk', 'admin/contact', 'fas fa-fw fa-sticky-note', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
