-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 07:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `records`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`) VALUES
(14, 'adsadsa', 'adadad'),
(8, 'shiv', 'dangi'),
(9, 'walkover', 'web sol'),
(10, 'msg91', 'msg91ss'),
(15, 'sdfsd', 'sdsd'),
(12, 'asdasda', 'adada'),
(18, 'John', 'Smith'),
(17, 'Fred', 'Smith'),
(19, 'Michael', 'Smith'),
(20, 'mmFjjjred2', 'Smith'),
(21, 'John2', 'Smith'),
(22, 'ajjaaaMichael2', 'Smith'),
(23, 'sdfFred', 'Smith'),
(24, 'fffJohn', 'Smith'),
(25, 'jjbbbMichael', 'Smith'),
(26, 'Fred', 'Smith'),
(27, 'jjsdfJohn', 'Smith'),
(28, 'hhhfffMnsdgvichael', 'Smith'),
(29, 'Fred', 'Smith'),
(30, 'John', 'Smith'),
(31, 'Mic34dfghael', 'Smith'),
(32, 'Frgdfged', 'Smith'),
(33, 'Jogsghn', 'Smith'),
(34, 'Mihjulchael', 'Smith'),
(35, 'Fresdfd', 'Smith'),
(36, 'Josdfhn', 'Smith'),
(37, 'Maqxichael', 'Smith'),
(38, 'Fred', 'Smith'),
(39, 'Jffohn', 'Smith'),
(40, 'Michael', 'Smith'),
(41, 'Fred', 'Smith'),
(42, 'John', 'Smith'),
(43, 'Michael', 'Smith'),
(44, 'Robert', 'Smith'),
(45, 'ASAS', 'ASASA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
