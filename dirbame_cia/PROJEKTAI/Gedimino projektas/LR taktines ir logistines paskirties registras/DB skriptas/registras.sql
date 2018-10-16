-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2018 at 05:48 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registras`
--

-- --------------------------------------------------------

--
-- Table structure for table `tp_marke`
--

CREATE TABLE `tp_marke` (
  `ID` int(10) UNSIGNED NOT NULL,
  `marke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp_marke`
--

INSERT INTO `tp_marke` (`ID`, `marke`) VALUES
(1, 'Audi'),
(2, 'Opel'),
(3, 'BMW'),
(4, 'Nisan');

-- --------------------------------------------------------

--
-- Table structure for table `tp_naudotojas`
--

CREATE TABLE `tp_naudotojas` (
  `ID` int(11) UNSIGNED NOT NULL,
  `naudotojas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp_naudotojas`
--

INSERT INTO `tp_naudotojas` (`ID`, `naudotojas`) VALUES
(11, 'UAB Viltreta'),
(12, 'UAB Naujakiemis'),
(13, 'UAB Naujakiemis'),
(14, 'UAB Viltreta'),
(15, 'dd'),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, 'Uab Naujas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) UNSIGNED NOT NULL,
  `vardas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pavarde` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pareigos` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `el_pastas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `vardas`, `pavarde`, `pareigos`, `el_pastas`) VALUES
(209, 'Gediminas', 'Digeris', 'Vairuotojas', 'gediminas@gmail.com'),
(210, 'Jonas', 'Pavardenis', 'Specialistas', 'ddd@ff.lt'),
(215, 'Arunas', 'namukas', 'Vairuotojas', 'ddd@ff.lt'),
(216, 'Arunas', 'namukas', 'Vairuotojas', 'ddd@ff.lt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_marke`
--
ALTER TABLE `tp_marke`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tp_naudotojas`
--
ALTER TABLE `tp_naudotojas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_marke`
--
ALTER TABLE `tp_marke`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tp_naudotojas`
--
ALTER TABLE `tp_naudotojas`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
