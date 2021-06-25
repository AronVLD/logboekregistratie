-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2021 at 01:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logboekregistratie`
--
CREATE DATABASE IF NOT EXISTS `logboekregistratie` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `logboekregistratie`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `userrole` enum('customer','admin','owner') NOT NULL,
  `activated` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `userrole`, `activated`) VALUES
(1, 'a@a.nl', '$2y$10$f82hsY/AqLxyV1FTAKXxe.7/.4xJTEhGLigK02rVf0inUSSbdmAiu', 'customer', b'0'),
(2, 'c@c.nl', '$2y$10$XA4crWKhzrfe2eoYdM631e19Qy9wuS8JL6vRFll.KTAUe/kE0717K', 'customer', b'0'),
(3, 'r@r.nl', '$2y$10$DfqR0VSIm7PmjcW62/RpbO9f0eA152F6fHbmD3DbSTQVSK6zNhVzi', 'customer', b'1'),
(4, 't@t.nl', '$2y$10$.gU7NJsW2iGaCdSFPh7wr.vWCLUSrp0hlftJQOqyxMRyDAF98eo9i', 'customer', b'0'),
(5, 'h@h.nl', '$2y$10$ONY8QGu4XlNN9bSP3Jb70OAL9p.yBODLd2WKATMHZeSoXdIgZBXvK', 'customer', b'0'),
(6, 'rra@mboutrecht.nl', '$2y$10$QS4RiDdMYTIYLNDnOB/qOuF4JvbTXX7U91CU5ix7zb5a6TwEkObBy', 'customer', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
