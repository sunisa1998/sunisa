-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 08:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehearsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `username`, `password`, `status`) VALUES
(7, 'สุนิสา', 'วงศ์พรม', 'beem', '123', 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `id` int(5) NOT NULL,
  `devicename` varchar(100) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `date` varchar(60) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `devicename`, `serial_number`, `date`, `status`) VALUES
(5, 'คีบอด', 'b123456', '9/11/2018', 'กำลังซ่อม'),
(11, 'โน๊ตบุ๊ค', 'J123456', '9/11/2018', 'ซ่อมเสร็จแล้ว'),
(12, 'เมาส์', 'k123456', '9/11/2018', 'กำลังซ่อม');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(60) NOT NULL,
  `devicename` varchar(100) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `tell` varchar(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `lastname`, `address`, `email`, `date`, `devicename`, `cause`, `tell`, `id`) VALUES
('นางสาวแบม', 'ปณิดา', 'บ้านหนองบัวขาว', 'bam@gmail.com', '9/11/2018', 'คีบอด', 'ปุ่มกดพัง', '0957165342', 11),
('นางสาวจอย', 'ศิริลักณ์', 'ชัยภูมิ', 'j@gmail.com', '9/11/2018', 'โน๊ตบุ๊ค', 'ลงวินโด่', '0986186462', 12),
('เป็ด', 'จิตรใจ', 'โนนสมอ', 'k@gmail.com', '9/11/2018', 'เมาส์', 'คลิกไม่ได้', '0957165342', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
