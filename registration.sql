-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 06:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `photoext` varchar(10) NOT NULL DEFAULT 'noimage',
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `photoext`, `email`, `password`) VALUES
(22, 'naviny', '.jpg', 'nav_wins@yy.com', ''),
(23, 'navinx', '.jpg', 'nav_wins@yy.com', ''),
(27, 'navinh', '', 'nav_wins@yy.com', ''),
(28, 'navina', 'noimage', 'nav_wins@yy.com', ''),
(29, 'navinp', 'noimage', 'nav_wins@yy.com', ''),
(30, 'navin', '.jpg', 'nav_wins@yy.com', ''),
(32, 'noimage', '.jpg', 'nav_wins@yy.com', ''),
(33, 'prashanth', 'noimage', 'kvmprashanth@gmail.com', 'test'),
(34, 'navink', 'noimage', 'nav_wins@yahoo.co.in', ''),
(35, 'navin.vnk', '.JPG', 'nav_wins@yahoo.co.in', ''),
(36, 'saranya', 'noimage', 'saran_janu22@yahoo.co.in', 'saranya'),
(37, 'naveen', 'noimage', 'nn@yy.com', ''),
(41, 'Selva', 'noimage', 'selva@yahoo.co.in', 'selva'),
(43, 'saranyag', 'noimage', 'saranya@yahoo.co.in', 'saranya'),
(44, 'layanya', 'noimage', 'layanya@yahoo.co.in', 'aaa'),
(47, 'Anand', 'noimage', 'ananad@gmail.com', 'anand'),
(48, 'sai teja', 'noimage', 'sai@gmail.com', 'sai'),
(49, 'saurabh', 'noimage', 'saurabh@gmail.com', 'sau'),
(50, 'josephraymond', 'noimage', 'josephraymond.v@ktr.srmuniv.ac.in', 'jos'),
(53, 'vaishnavi', 'noimage', 'vaishnavisrivastava278@gmail.com', 'vaisnavi'),
(54, 'yuthika', 'noimage', 'yuth@gmail.com', 'yuthika'),
(56, 'shanthini', 'noimage', 'shan@ff.com', 'sha'),
(57, 'tanya', 'noimage', 'tan@gmail.com', 'tanya'),
(58, '', 'noimage', '', ''),
(59, 'aaaaaa', 'noimage', '', ''),
(60, 'navinl', '.jpg', 'nav@yyy.com', ''),
(62, 'selvaraj', 'noimage', 'nav_wins@yyahoo.co.in', ''),
(63, 'navinvnk', '.jpg', 'nav_wins@yahoo.co.in', 'nawin'),
(65, 'nawink', 'noimage', 'navin@gmail.com', ''),
(66, 'navino', '.jpg', 'navin.k@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
