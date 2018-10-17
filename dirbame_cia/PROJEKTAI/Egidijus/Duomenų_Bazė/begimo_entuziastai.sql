-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2018 at 10:55 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `begimo_entuziastai`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `Aprasymas` text COLLATE utf16_unicode_ci NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `pavadinimas`, `Aprasymas`, `timeStamp`) VALUES
(1, 'run1.jpg', 'Lorem ipsum donec id elit non mi porta gravida at eget metus.', '2018-10-08 09:16:51'),
(2, 'run2.jpg', '', '2018-10-08 09:16:51'),
(3, 'run3.jpg', '', '2018-10-08 09:16:51'),
(4, 'run4.jpg', '', '2018-10-08 09:16:51'),
(5, 'run5.jpg', '', '2018-10-08 09:16:51'),
(6, 'run6.jpg', '', '2018-10-08 09:16:51'),
(7, 'run7.jpg', '', '2018-10-08 09:16:51'),
(8, 'run8.jpg', '', '2018-10-08 09:16:51'),
(9, 'run9.jpg', '', '2018-10-08 09:16:51'),
(10, 'run10.jpg', '', '2018-10-08 09:16:51'),
(11, 'run11.jpg', '', '2018-10-08 09:16:51'),
(12, 'run12.jpg', '', '2018-10-08 09:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `patarimai`
--

CREATE TABLE `patarimai` (
  `id` int(11) NOT NULL,
  `Patarimas` text COLLATE utf16_unicode_ci NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `patarimai`
--

INSERT INTO `patarimai` (`id`, `Patarimas`, `TimeStamp`) VALUES
(1, 'Nam id semper nunc. Sed vitae dui vel dui interdum blandit vitae ut diam. Donec augue justo, placerat at metus sed, pharetra placerat ligula. Duis mauris eros, iaculis non aliquet vel, pretium in turpis.', '2018-10-07 17:24:32'),
(2, '\r\nNam id semper nunc. Sed vitae dui vel dui interdum blandit vitae ut diam. Donec augue justo, placerat at metus sed, pharetra placerat ligula. Duis mauris eros, iaculis non aliquet vel, pretium in turpis.', '2018-10-07 17:24:32'),
(3, 'Aliquam vitae porttitor dolor, vel sodales nibh. Morbi non ex a orci consequat ultricies ut ac mauris. Nullam sed scelerisque sem, a convallis erat.', '2018-10-07 17:26:23'),
(4, 'Aliquam vitae porttitor dolor, vel sodales nibh. Morbi non ex a orci consequat ultricies ut ac mauris. Nullam sed scelerisque sem, a convallis erat.', '2018-10-07 17:26:23'),
(5, 'Cras consequat felis lacus, in varius neque viverra eu. Vestibulum ullamcorper ante justo, eu lobortis purus sollicitudin sed.', '2018-10-07 17:30:13'),
(6, 'Cras consequat felis lacus, in varius neque viverra eu. Vestibulum ullamcorper ante justo, eu lobortis purus sollicitudin sed.', '2018-10-07 17:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `paveiksliukai`
--

CREATE TABLE `paveiksliukai` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `aprašymas` varchar(500) COLLATE utf16_unicode_ci NOT NULL,
  `pozicija` int(11) NOT NULL,
  `adresas` varchar(200) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `paveiksliukai`
--

INSERT INTO `paveiksliukai` (`id`, `pavadinimas`, `aprašymas`, `pozicija`, `adresas`) VALUES
(1, 'begimas1.jpg', 'bėgantis žmogus parke', 0, ''),
(2, 'begimas2.jpg', 'bėgimas stadione', 0, ''),
(3, 'begimas3.jpg', 'begantis šuo', 0, ''),
(4, 'begimas4.jpg', 'vyras bėgantis laiptais', 0, ''),
(5, 'begimas5.jpg', 'beganti moteris', 0, ''),
(6, 'run1.jpg---', '', 0, ''),
(7, 'run2.jpg', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `straipsniai`
--

CREATE TABLE `straipsniai` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(600) COLLATE utf16_unicode_ci NOT NULL,
  `straipsnis` text COLLATE utf16_unicode_ci NOT NULL,
  `autorius` varchar(600) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `straipsniai`
--

INSERT INTO `straipsniai` (`id`, `pavadinimas`, `straipsnis`, `autorius`) VALUES
(1, 'Straipsnis #12 ėėėėė', '   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales elit tempus, suscipit massa sit amet, gravida purus. Nulla accumsan nibh in metus consectetur ultricies. Nullam non blandit ex. In dui arcu, fermentum in maximus vel, auctor ut risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas luctus, erat quis tempus fringilla, neque quam efficitur neque, vitae lacinia metus quam a mi. Sed mollis, erat fringilla sodales tristique, elit eros accumsan nisl, vitae aliquet felis orci eget quam. Sed elementum volutpat quam, sit amet egestas purus blandit non. Fusce nunc purus, lobortis sed nulla vitae, laoreet imperdiet est. Sed id leo nisl. Donec non elementum justo, et molestie magna. Cras vel iaculis ante, ac mattis erat. Donec condimentum rhoncus quam, nec ornare felis. Aenean hendrerit lacus at viverra mollis. Nam vitae ultrices quam, nec mollis ante. Praesent scelerisque at magna ut varius.', 'Petras Petraitis'),
(2, 'Straipsnis #2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales elit tempus, suscipit massa sit amet, gravida purus. Nulla accumsan nibh in metus consectetur ultricies. Nullam non blandit ex. In dui arcu, fermentum in maximus vel, auctor ut risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas luctus, erat quis tempus fringilla, neque quam efficitur neque, vitae lacinia metus quam a mi. Sed mollis, erat fringilla sodales tristique, elit eros accumsan nisl, vitae aliquet felis orci eget quam. Sed elementum volutpat quam, sit amet egestas purus blandit non. Fusce nunc purus, lobortis sed nulla vitae, laoreet imperdiet est. Sed id leo nisl. Donec non elementum justo, et molestie magna. Cras vel iaculis ante, ac mattis erat. Donec condimentum rhoncus quam, nec ornare felis. Aenean hendrerit lacus at viverra mollis. Nam vitae ultrices quam, nec mollis ante. Praesent scelerisque at magna ut varius.', 'Jonas Jonaitis'),
(3, 'Straipsnis #3', '444444444444444444444444444Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales elit tempus, suscipit massa sit amet, gravida purus. Nulla accumsan nibh in metus consectetur ultricies. Nullam non blandit ex. In dui arcu, fermentum in maximus vel, auctor ut risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas luctus, erat quis tempus fringilla, neque quam efficitur neque, vitae lacinia metus quam a mi. Sed mollis, erat fringilla sodales tristique, elit eros accumsan nisl, vitae aliquet felis orci eget quam. Sed elementum volutpat quam, sit amet egestas purus blandit non. Fusce nunc purus, lobortis sed nulla vitae, laoreet imperdiet est. Sed id leo nisl. Donec non elementum justo, et molestie magna. Cras vel iaculis ante, ac mattis erat. Donec condimentum rhoncus quam, nec ornare felis. Aenean hendrerit lacus at viverra mollis. Nam vitae ultrices quam, nec mollis ante. Praesent scelerisque at magna ut varius.', 'Paulius Paulauskas'),
(4, 'Straipsnis #4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales elit tempus, suscipit massa sit amet, gravida purus. Nulla accumsan nibh in metus consectetur ultricies. Nullam non blandit ex. In dui arcu, fermentum in maximus vel, auctor ut risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas luctus, erat quis tempus fringilla, neque quam efficitur neque, vitae lacinia metus quam a mi. Sed mollis, erat fringilla sodales tristique, elit eros accumsan nisl, vitae aliquet felis orci eget quam. Sed elementum volutpat quam, sit amet egestas purus blandit non. Fusce nunc purus, lobortis sed nulla vitae, laoreet imperdiet est. Sed id leo nisl. Donec non elementum justo, et molestie magna. Cras vel iaculis ante, ac mattis erat. Donec condimentum rhoncus quam, nec ornare felis. Aenean hendrerit lacus at viverra mollis. Nam vitae ultrices quam, nec mollis ante. Praesent scelerisque at magna ut varius.', 'Tomas Tomauskis');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `ID` int(11) NOT NULL,
  `Vardas` varchar(600) COLLATE utf16_unicode_ci NOT NULL,
  `Vartotojo_vardas` varchar(600) COLLATE utf16_unicode_ci NOT NULL,
  `Slaptazodis` varchar(255) COLLATE utf16_unicode_ci NOT NULL,
  `Begimas` varchar(600) COLLATE utf16_unicode_ci NOT NULL,
  `Distancija` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `Laikas` time NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`ID`, `Vardas`, `Vartotojo_vardas`, `Slaptazodis`, `Begimas`, `Distancija`, `Laikas`, `TimeStamp`) VALUES
(1, 'Benas', 'benas15', '', 'Trakų pusmaratonis', 'Pusmaratonis', '01:35:15', '2018-10-03 14:08:05'),
(2, 'Tomas', 'begikas88', '', 'Kauno maratonas', 'Maratonas', '03:30:22', '2018-10-03 14:08:05'),
(3, 'Egle', 'eglute', '', 'Kauno maratonas', 'Maratonas', '03:53:25', '2018-10-03 14:12:14'),
(4, 'Andrius', 'begantis_vilkas', '', 'Kauno maratonas', 'Pusmaratonis', '02:06:11', '2018-10-03 14:19:09'),
(5, 'Donatas', 'donce', '', 'Vilniaus maratonas', 'Maratonas', '03:42:40', '2018-10-03 14:19:09'),
(6, 'Agnė', 'puma19', '', 'Ąžuolyno bėgimas', '10 kilometrų', '01:09:20', '2018-10-04 06:02:08'),
(7, 'Artūras', 'artur89', '', 'Color run', '5 kilometrai', '00:35:31', '2018-10-04 06:02:08'),
(8, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '00:00:00', '2018-10-14 15:51:52'),
(9, '', 'level', '$2y$10$/499o61sRs6MdPt/9gK7bua7OfyqjgCDxHg3xFWal66Vdz9e4oDhm', '', '', '00:00:00', '2018-10-14 17:07:06'),
(10, '', 'Egidijus', '$2y$10$oec6I8BsFVRlyJ2pk3ZmY.AnZ7tVpICcx42jrkp7UXEYJ8sozSdDq', '', '', '00:00:00', '2018-10-14 17:07:42'),
(11, '', 'Antanas', '$2y$10$EpcAKWgo7O/9X/GCAE4gu.pKqnYep05nzFE9Sxbj9ECe/dIT58psG', '', '', '00:00:00', '2018-10-14 17:56:04'),
(12, '', '', '', 'PanemunÄ—s Å¡ilo bÄ—gimas', '10 km', '01:10:00', '2018-10-15 13:04:20'),
(13, '', '', '', '', '', '00:00:00', '2018-10-15 13:34:19'),
(14, '', '', '', '', '', '00:00:00', '2018-10-15 13:35:02'),
(15, '', '', '', '', '', '00:00:00', '2018-10-15 13:36:37'),
(16, '', '', '', '', '', '00:00:00', '2018-10-15 13:36:41'),
(17, '', '', '', 'lengvas pabÄ—giojimas', '5 km', '00:30:00', '2018-10-15 13:46:07'),
(18, '', '', '', '', '', '00:00:00', '2018-10-15 14:04:03'),
(19, '', '', '', 'aaaa', '55', '00:00:10', '2018-10-16 09:48:24'),
(20, '', 'aaaaaa', '$2y$10$eODA9vwTp2GhMukjGq3dvOWVkT2Ft/Fk/1jrUk8BbmIKKouztJqQK', '', '', '00:00:00', '2018-10-16 09:53:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patarimai`
--
ALTER TABLE `patarimai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paveiksliukai`
--
ALTER TABLE `paveiksliukai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `straipsniai`
--
ALTER TABLE `straipsniai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `patarimai`
--
ALTER TABLE `patarimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paveiksliukai`
--
ALTER TABLE `paveiksliukai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `straipsniai`
--
ALTER TABLE `straipsniai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
