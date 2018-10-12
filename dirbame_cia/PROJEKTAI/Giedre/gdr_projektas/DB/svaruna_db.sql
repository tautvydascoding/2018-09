-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2018 at 11:13 AM
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
-- Database: `svaruna_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(20) NOT NULL,
  `vardas` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `slaptazodis` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `vardas`, `slaptazodis`, `TimeStamp`) VALUES
(1, 'direktorius', 'direktorius', '2018-10-10 13:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Foto` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `img_alt` varchar(60) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Paslaugos pavadinimas` varchar(60) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Paslaugos aprašymas` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Rezervacija` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `Foto`, `img_alt`, `Paslaugos pavadinimas`, `Paslaugos aprašymas`, `Rezervacija`) VALUES
(1, 'home_clean1.jpg', 'Namų valymas.', 'Namų valymas111111111111', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, laboriosam aliquid provident et magni totam omnis fuga. Adipisci numquam alias doloribus necessitatibus magnam. Fuga asperiores vero adipisci?', 'Rezervuokite laiką!'),
(2, 'office-cleaning.jpg', 'Biurų valymas.33333', 'Biurų valymas2244555', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quam, eveniet minus numquam porro minima nulla voluptate corporis, et excepturi dolorum necessitatibus libero impedit in! Dolorem fuga nemo aperiam facili!', 'Rezervuokite laiką!'),
(3, 'auto_interior.jpg', 'Automobilių valymas.', 'Automobilių valymas', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quam, eveniet minus numquam porro minima nulla voluptate corporis, et excepturi dolorum necessitatibus libero impedit in! Dolorem fuga nemo aperiam eaque!', 'Rezervuokite laiką!');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `id` int(10) NOT NULL,
  `Paslauga` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL,
  `Vardas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `El. paštas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono nr.` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `Adresas` text COLLATE utf8_unicode_ci NOT NULL,
  `Komentarai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `Paslauga`, `Data`, `Vardas`, `El. paštas`, `Telefono nr.`, `Adresas`, `Komentarai`) VALUES
(1, 'Namų valymas', '2018-11-01', 'Giedrė', 'giedre@mail.lt', '861234567', 'Gatvė g. 1, Kaunas', 'Jokių komentarų.'),
(2, 'NamÅ³ valymas', '2018-12-02', 'Vardas', 'vardas@gmail.com', '862222222', 'Adreso g. 115, Miestas', 'PuikÅ«s komentarai'),
(3, 'NamÅ³ valymas', '2018-12-02', 'Vardas', 'vardas@gmail.com', '862222222', 'Adreso g. 115, Miestas', 'PuikÅ«s komentarai'),
(4, 'AutomobiliÅ³ valymas', '2018-12-10', 'Vardas', 'vardas@gmail.com', '863333333', 'Adreso g. 88, Miestas', 'Bus komentarai'),
(5, 'BiurÅ³ valymas', '2018-12-15', 'Vardas', 'vardas@gmail.com', '863333333', 'Adreso g. 200, Miestas', 'Bus komentarai'),
(6, '', '0000-00-00', '', '', '', '', ''),
(7, '', '0000-00-00', '', '', '', '', ''),
(8, 'automobilio', '2018-10-19', 'Petras', 'petras@mail.com', '864444444', 'Petrausko g. 2, Kaunas', 'SKUBU!'),
(9, 'BiurÅ³ valymas', '2018-10-18', 'Ona', 'ona@ona.lt', '865555555', 'Onos g. 50, Kaunas', 'Komentarai'),
(10, 'NamÅ³ valymas', '2018-10-26', 'Kazys', 'kazys@kazys.lt', '866666666', 'Kazio g. 50, Kaunas', 'KomentarÅ³ nÄ—ra.'),
(11, '', '2018-10-11', 'Vardas', 'hbjgh@gmail.com', '860000000', 'Petrausko g. 2, Kaunas', 'scdfvbnmnbfd'),
(12, '', '2018-10-18', 'Vardas', '', '860000000', 'GatviÅ³ g. 99, Miestas', 'rfgthyujikol;'),
(13, 'NamÅ³ valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(14, 'NamÅ³ valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(15, 'NamÅ³ valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(16, 'NamÅ³ valymas', '2018-10-19', 'Vardas', 'hbjgh@gail.com', '860000000', 'Petrausko g. 5552, Kaunas', 'kommmmm'),
(17, 'NamÅ³ valymas', '2018-11-01', 'giedre', 'giedre@giedre.lt', '552536363', 'vbnmbnjkml', 'hlkcvbjkm,;');

-- --------------------------------------------------------

--
-- Table structure for table `rekvizitai`
--

CREATE TABLE `rekvizitai` (
  `id` int(99) UNSIGNED NOT NULL,
  `pavadinimas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresas` text COLLATE utf8_unicode_ci NOT NULL,
  `darbo_laikas` text COLLATE utf8_unicode_ci NOT NULL,
  `telefonas` text COLLATE utf8_unicode_ci NOT NULL,
  `el.pastas` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rekvizitai`
--

INSERT INTO `rekvizitai` (`id`, `pavadinimas`, `adresas`, `darbo_laikas`, `telefonas`, `el.pastas`) VALUES
(1, '„Švarūna”', 'Pramonės g. 2D\r\n72328 Tauragė, Lietuva', 'I - V 8.00 - 17.00 \r\nVI -VII nedirbame', '+370 600 00000', 'info@svaruna.lt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekvizitai`
--
ALTER TABLE `rekvizitai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `rekvizitai`
--
ALTER TABLE `rekvizitai`
  MODIFY `id` int(99) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
