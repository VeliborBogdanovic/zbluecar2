-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 12:23 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id_ad` int(5) NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `resized_photo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_fuel` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id_ad`, `model`, `year`, `price`, `photo`, `date`, `resized_photo`, `id_fuel`, `id_brand`) VALUES
(1, '147', 2000, 3500, 'images/cars/AlfaRomeo147.jpg', '2016-02-08', NULL, 1, 1),
(2, '159', 2008, 5500, 'images/cars/AlfaRomeo159.jpg', '2016-02-11', NULL, 2, 1),
(3, 'Guilietta', 2012, 9500, 'images/cars/AlfaRomeoGuilietta.jpg', '2016-03-05', NULL, 2, 1),
(4, 'Mito', 2010, 8000, 'images/cars/AlfaRomeoMito.jpg', '2015-12-09', NULL, 2, 1),
(5, 'A3', 2009, 7000, 'images/cars/AudiA3.jpg', '2016-01-04', NULL, 1, 2),
(6, 'A8', 2011, 14000, 'images/cars/AudiA8.jpg', '2015-08-06', NULL, 2, 2),
(7, 'Q7', 2014, 15000, 'images/cars/AudiQ7.jpg', '2015-12-10', NULL, 2, 2),
(8, 'TT', 2006, 5500, 'images/cars/AudiTT.jpg', '2015-12-10', NULL, 1, 2),
(9, '320', 2007, 8300, 'images/cars/BMW320.jpg', '2015-12-09', NULL, 1, 3),
(10, '520', 2008, 9000, 'images/cars/BMW520.jpg', '2016-01-28', NULL, 1, 3),
(11, '760', 2002, 6400, 'images/cars/BMW720.jpg', '2016-03-03', NULL, 2, 3),
(12, 'x5', 2004, 7500, 'images/cars/BMWx5.jpg', '2016-01-23', NULL, 2, 3),
(13, 'G-Class', 2007, 10000, 'images/cars/MercedesBenzGClass2007.jpg', '2015-11-24', NULL, 2, 4),
(14, 'M-Class', 2009, 11000, 'images/cars/MercedesBenzMClass2009.jpg', '2016-02-01', NULL, 1, 4),
(15, 'C-Class', 2005, 6900, 'images/cars/MercedesCclass.jpg', '2015-12-10', NULL, 2, 4),
(16, 'E-Class', 2010, 11500, 'images/cars/MercedesEclass.jpg', '2016-03-02', NULL, 1, 4),
(17, 'Touareg', 2010, 11500, 'images/cars/volkswagen_touareg2006.jpg', '2016-03-03', NULL, 2, 5),
(18, 'Golf-4', 2001, 3000, 'images/cars/volkswagenGolf4.jpg', '2016-02-22', NULL, 1, 5),
(19, 'Golf-5', 2005, 5000, 'images/cars/volkswagenGolf5.jpg', '2016-02-16', NULL, 1, 5),
(20, 'Passat-B6', 2008, 6500, 'images/cars/VolkswagenPassatB6.jpg', '2016-02-13', NULL, 2, 5),
(21, '147', 2001, 3750, 'images/cars/AlfaRomeo147_1.jpg', '2016-02-08', NULL, 1, 1),
(22, '159', 2009, 570, 'images/cars/AlfaRomeo159_1.jpg', '2015-11-09', NULL, 2, 1),
(23, 'Guilietta', 2012, 9500, 'images/cars/AlfaRomeoGuilietta_1.jpg', '2016-01-05', NULL, 2, 1),
(24, 'Mito', 2010, 8100, 'images/cars/AlfaRomeoMito_2.jpg', '2016-01-16', NULL, 2, 1),
(25, 'A3', 2009, 6800, 'images/cars/AudiA3_1.jpg', '2015-11-16', NULL, 1, 2),
(31, 'A8', 2010, 13800, 'images/cars/AudiA8_1.jpg', '2015-07-21', NULL, 2, 2),
(32, 'Q7', 2015, 16000, 'images/cars/AudiQ7_1.jpg', '2015-11-17', NULL, 2, 2),
(33, 'TT', 2007, 6000, 'images/cars/AudiTT_1.jpg', '2015-12-10', NULL, 1, 2),
(34, '320', 2010, 9500, 'images/cars/BMW320_1.jpg', '2015-11-16', NULL, 1, 3),
(35, '520', 2014, 10500, 'images/cars/BMW520_1.jpg', '2016-01-28', NULL, 1, 3),
(36, '760', 2008, 10000, 'images/cars/BMW720_1.jpg', '2015-12-15', NULL, 2, 3),
(37, 'x5', 2015, 2100, 'images/cars/BMWx5_1.jpg', '2016-02-18', NULL, 2, 3),
(38, 'G-Class', 2015, 14000, 'images/cars/MercedesBenzGClass2007_1.jpg', '2015-10-14', NULL, 2, 4),
(39, 'M-Class', 2015, 24000, 'images/cars/MercedesBenzMClass2009_1.jpg', '2016-03-02', NULL, 1, 4),
(40, 'C-Class', 2014, 13000, 'images/cars/MercedesCclass_1.jpg', '2015-12-23', NULL, 2, 4),
(41, 'E-Class', 2014, 12000, 'images/cars/MercedesEclass_1.jpg', '2016-02-26', NULL, 1, 4),
(42, 'Touareg', 2015, 19500, 'images/cars/volkswagen_touareg2006_1.jpg', '2016-02-21', NULL, 2, 5),
(43, 'Golf-4', 2002, 5200, 'images/cars/volkswagenGolf4_1.jpg', '2016-02-03', NULL, 1, 5),
(44, 'Golf-5', 2006, 7500, 'images/cars/volkswagenGolf5_1.jpg', '2016-02-23', NULL, 1, 5),
(45, 'Passat-B6', 2008, 6900, 'images/cars/VolkswagenPassatB6_1.jpg', '2016-02-07', NULL, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ads_users`
--

CREATE TABLE `ads_users` (
  `id_ad` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ads_users`
--

INSERT INTO `ads_users` (`id_ad`, `id_user`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id_answer` int(20) NOT NULL,
  `text_a` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `votes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id_answer`, `text_a`, `votes`) VALUES
(1, 'Alfa-Romeo  147', 13),
(2, 'Alfa-Romeo  156', 13),
(3, 'Alfa-Romeo  Guiletta', 2),
(4, 'Alfa-Romeo  Mito', 2);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id_brand` int(11) NOT NULL,
  `brand` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id_brand`, `brand`) VALUES
(1, 'Alfa-Romeo'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Mercedes-Benz'),
(5, 'Volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id_fuel` int(50) NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id_fuel`, `type`) VALUES
(1, 'Diesel'),
(2, 'Petrol');

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE `meni` (
  `id_meni` int(11) NOT NULL,
  `path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `meni_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id_meni`, `path`, `meni_name`) VALUES
(1, 'home/', 'HOME'),
(2, '/place_ad', 'PLACE YOUR AD'),
(3, '/register', 'LOG IN / REGISTER'),
(4, '/log_out', 'LOG OUT'),
(5, '/author', 'AUTHOR'),
(6, 'adminPanel/', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id_poll` int(20) NOT NULL,
  `acitve` tinyint(1) NOT NULL,
  `id_question` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id_poll`, `acitve`, `id_question`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id_question` int(20) NOT NULL,
  `text` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id_question`, `text`) VALUES
(1, 'Which one is better ? '),
(2, 'Which of these two is prettier?');

-- --------------------------------------------------------

--
-- Table structure for table `questions_answers`
--

CREATE TABLE `questions_answers` (
  `id_answer` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions_answers`
--

INSERT INTO `questions_answers` (`id_answer`, `id_question`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `id_role`) VALUES
(1, 'site_admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'admin@gmail.com', 1),
(2, 'common_user', '5cc32e366c87c4cb49e4309b75f57d64', 'user@gmail.com', 2),
(3, 'korisnik9467', 'bcfb3a7629bfad29966629d009eafd39', 'bojanatasic97@gmail.com', 2),
(4, 'veljavelja', 'b7e22fcd5c64e068185f524928ad66b5', 'veljaslavija@gmail.com', 2),
(6, 'korisnik', 'd41d8cd98f00b204e9800998ecf8427e', 'veljaslavija@gmail.com', 2),
(7, 'admin', 'd687e716e39c51f4c908435d763285ea', '', 2),
(8, 'site_admin', 'f6fdffe48c908deb0f4c3bd36c032e72', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `ads_users`
--
ALTER TABLE `ads_users`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ad` (`id_ad`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
  ADD PRIMARY KEY (`id_fuel`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`id_meni`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id_poll`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `questions_answers`
--
ALTER TABLE `questions_answers`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `id_question` (`id_question`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id_ad` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id_fuel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `id_meni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id_poll` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions_answers`
--
ALTER TABLE `questions_answers`
  ADD CONSTRAINT `questions_answers_ibfk_1` FOREIGN KEY (`id_answer`) REFERENCES `answers` (`id_answer`) ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_answers_ibfk_2` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
