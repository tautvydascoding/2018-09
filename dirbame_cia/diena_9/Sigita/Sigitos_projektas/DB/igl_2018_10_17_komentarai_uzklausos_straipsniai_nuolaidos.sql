-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2018 at 02:18 PM
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
-- Database: `igl`
--
CREATE DATABASE IF NOT EXISTS `igl` DEFAULT CHARACTER SET utf8 COLLATE utf8_lithuanian_ci;
USE `igl`;

-- --------------------------------------------------------

--
-- Table structure for table `komentarai`
--

CREATE TABLE `komentarai` (
  `ID` int(11) NOT NULL,
  `Vardas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Komentaras` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `komentarai`
--

INSERT INTO `komentarai` (`ID`, `Vardas`, `Komentaras`) VALUES
(17, 'Danguole', 'etyujkhmhngbfvdsaewrtyukj.jhmgfsertyuikljmbhgbcdfs'),
(18, 'Donata', 'asdefrggsrhsdgedrjkgheurhfvsdfnjkgberiodsdkjfhiurdhfjvddrgrg'),
(19, 'Živilė', 'nrfuiaergfubsdkjgfarefubjqwkevhdfuifjesgtrhgzsef'),
(20, 'Martyna', 'wehfdszufurifguiewkjfb;cuieagfviaebzdsfEtzn'),
(21, 'Agne', 'IEWHFudskjbiawrgfibKHEBFkjvdghfbgehthcgxfd'),
(22, 'Ruta', 'weiuigfdsvbjkebfyudscfvhjqewrstjmgchfnxdsfadefsrgxdth'),
(23, 'tomas', ''),
(24, 'Sigita', 'sdsfdbgnvb cx'),
(25, 'Sigita', 'sdsfdbgnvb cx'),
(26, 'paulius', 'gtfrsd nfrdtuycvjh'),
(27, 'Donata', 'txrjgychvb'),
(28, 'tomas', 'wfeggghjgfds');

-- --------------------------------------------------------

--
-- Table structure for table `nariai`
--

CREATE TABLE `nariai` (
  `ID` int(11) NOT NULL,
  `username` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `nariai`
--

INSERT INTO `nariai` (`ID`, `username`, `password`) VALUES
(1, 'administratorius', '42a92d3b636db32fef4edb3308e0804d');

-- --------------------------------------------------------

--
-- Table structure for table `nuolaidos`
--

CREATE TABLE `nuolaidos` (
  `ID` int(11) NOT NULL,
  `Nuotrauka` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tekstas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuolaidos_kodas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `galiojimo_laikas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `nuolaidos`
--

INSERT INTO `nuolaidos` (`ID`, `Nuotrauka`, `Tekstas`, `nuolaidos_kodas`, `galiojimo_laikas`) VALUES
(1, 'pagrindine_nuotrauka.jpg', '50% nuolaida pirmam apsilankymui, būk pirmas ir pasinaudok ja! lauksim Tavęs, nes mums Tu rūpi :)', 'IGL123', '2019-01-09'),
(2, 'pagrindine_nuotrauka.jpg', '50 % nuolaida pirmam apsilankymui, būk pirmas ir pasinaudok ja! lauksim Tavęs, nes mums Tu rūpi :)', 'IGL321', '2019-01-09'),
(3, 'pagrindine_nuotrauka.jpg', '50% nuolaida pirmam apsilankymui! Rezervuok kuponą ir laukiam Tavęs! Prieš atvykstant užsiregistruoti.', 'IGL456', '2019-01-09'),
(4, 'pagrindine_nuotrauka.jpg', '50% nuolaida pirmam apsilankymui! Rezervuok kuponą ir laukiam Tavęs! Prieš atvykstant užsiregistruoti.', 'IGL789  3333', '2019-01-09'),
(5, 'pagrindine_nuotrauka.jpg', '50% Nuolaida pirmam apsilankymui! Prieš atvykstant užsiregistruoti. Pasiimk kuponą ir laukiam Tavęs!', 'IGL456', '2019-01-09'),
(6, 'pagrindine_nuotrauka.jpg', '50% Nuolaida pirmam apsilankymui! Prieš atvykstant užsiregistruoti. Pasiimk kuponą ir laukiam Tavęs!', 'IGL456', '2019-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `nuolaidu_rezervacija`
--

CREATE TABLE `nuolaidu_rezervacija` (
  `ID` int(11) NOT NULL,
  `Vardas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pavarde` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelNr` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `nuolaidu_rezervacija`
--

INSERT INTO `nuolaidu_rezervacija` (`ID`, `Vardas`, `Pavarde`, `TelNr`) VALUES
(1, 'Danguole', '', ''),
(2, 'Danguole', '', '5865895'),
(3, 'Danguole', '', '5865895'),
(4, 'Danguole', '', '5865895'),
(5, 'Danguole', '', '5865895'),
(6, 'Darius', 'Fyfyfyff', '86548214'),
(7, 'Sigita', 'Fyfyfyff', '5865895'),
(8, 'adsfadsf', 'sdfg', 'edgfth'),
(9, 'Sigita', 'Fyfyfyff', '86548214'),
(10, 'Sigita', 'Fyfyfyff', '86548214'),
(11, 'Danguole', 'Fyfyfyff', '8654851235'),
(12, 'tomas', '', ''),
(13, 'Živilė', 'Fyfyfyff', '8654851235'),
(14, 'Donata', 'sdfg', '8654851235');

-- --------------------------------------------------------

--
-- Table structure for table `straipsniai`
--

CREATE TABLE `straipsniai` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Pavadinimas` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Straipsnio _tekstas` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `straipsniai`
--

INSERT INTO `straipsniai` (`ID`, `Pavadinimas`, `Straipsnio _tekstas`, `Data`) VALUES
(1, 'Mes su Jumis jau 16 metų!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-01-03'),
(2, 'Korekcijos privalomos!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '2018-02-03'),
(3, 'Išskirtinė procedūra!', 'Kviečiame Jus atvykti į naujai atsidariusį „IGL“ ir pasimėgauti stipraus poveikio stangrinančia procedūra veidui. Pajuskite grožio jėgą už minimalią kainą – vos už 49 litus ir gaukite drėkinantį kremą dovanų! Taip pat pridėsime 30 Lt nuolaidą sekančiai pasirinktai veido arba kūno procedūrai!\r\n\r\nProcedūros metu atliksime demakiažą su IGL „perliuku“ – hidrofiliniu aliejumi bei žolelių ekstraktu, kurie ne tik pašalins nešvarumus, bet ir prisodrins Jūsų odą drėgmės... Po to atliksime odos šveitinimą su priešraukšliniu šveitikliu su vitaminu C ir uogų ekstraktais, po kurio Jūsų oda taps lygi it šilkas... Tada procedūrą tęsime odą praturtindami greito ir stipraus poveikio koncentratu „Lift Express“, kurio poveikį pastebėsite iš karto... Ampulei įsigėrus, atliksime 10 min. stangrinantį veido masažą su regeneruojančiu kremu. Pabaigai paskirstysime stangrinančią, putojančią kaukę – kremą. Ši intensyvi priemonė pagerins odos elastingumą, akivaizdžiai sumažins raukšlelių gylį bei pastebimai patemps odą. Esame tikri, jog po šios procedūros puikų rezultatą pastebėsite iš karto — oda taps akivaizdžiai stangresnė, skaistesnė ir jaunatviškesnė!', '2018-06-03'),
(4, 'Kodėl reikalinga antakiu korekcija ?', 'Kaktos ir antakių operacija  yra atliekama tuomet, kai pasimato pirmieji senėjimo požymiai. Taip pat tokio pobūdžio operacijų prireikia tokiems žmonėms, kurie yra labai emocionalūs ir mimiški, o jų kaktos raumenys nuolat dirba bei tiems, kurių antakiai ir kakta nuo gimimo yra labai žema.\r\n\r\nKaktos ir antakių pakėlimo metu yra išlyginamos kaktos raukšlės, pakeliami antakiai, koreguojama jų forma ir santykis su viršutiniais vokais. Ši operacija dažnai atliekama kaip viso veido pakėlimo dalis arba kaip atskira procedūra. Pakėlus antakius (kaktą) veidas įgauna jaunatvišką išvaizdą, atrodo ne toks pavargęs.', '2018-09-05'),
(5, 'Ilgalaikis antakių makiažas', 'Permanentinis makiažas - tai puiki alternatyva dekoratyvinei kosmetikai. Kokybiškai atliktas permanentinis makiažas suteikia galimybę pakeisti savo išvaizdą, sukurti ryškų, akį traukiantį veidą. Mes galime Jums sukurti grožį, kurio nereikės koreguoti kelis kartus per dieną, kuris nenusiplaus baseine, nebus \"suvalgytas\" valgio metu, \"nenutekės\" dėl karščio, todėl Jus visada jausitės užtikrinta bet kurioje situacijoje. ', '2018-07-05'),
(6, 'Kokias priemones mes naudojame?', 'Mes naudojam tik pačius geriausius, patikrintus ir sertifikuotus pigmentus.\r\n\r\nTai mums leidžia suteikti garantijas klientėms, užtikrinti, kad spalva išliks ilgai, bluks tolygiai, nekeis spalvos, o blukdama tik šviesės. Šiandien mes renkamies amerikiečių gamintojo Derma International oragninius ir neorganinius pigmentus, kurių dėka mūsų klintės džiaugiasi ryškiomis, skaisčiomis, švariomis spalvomis.\r\n\r\nTai vieninteliai amerikiečių gamintojų pigmentai, kurie yra sertifikuoti ir Europoje, t.y. atitinka pačius aukščiausius kokybės ir saugumo reikalavimus.', '2018-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `uzklausos`
--

CREATE TABLE `uzklausos` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Vardas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono_numeris` int(13) NOT NULL,
  `Gautas_pranešimas` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `uzklausos`
--

INSERT INTO `uzklausos` (`ID`, `Vardas`, `Telefono_numeris`, `Gautas_pranešimas`) VALUES
(1, 'Sigita', 864538446, 'Sveiki,\r\nAr galima butu uzsirasyti pirmadieniu makiazui?'),
(2, 'Donata', 861627319, 'Laba diena\r\nNorejau paklausti ar jus teikiat makiazo nuemimo paslauga? ar imanoma butu kitai savaitei gauti laisva vieta?'),
(3, 'Danguole', 862036548, 'Sveiki,\r\nAr galima butu usirasyti ilgalaikiam makiazui spalio 26?'),
(4, 'Darius', 861625489, 'Labas vakaras,\r\nAr galima butu nupirkti zmonai dovanu kupona Jusu paslaugom?'),
(5, 'ddddd', 5865895, 'fsefdfgdfymdxrtndxrt'),
(6, 'ddddd', 5865895, 'fsefdfgdfymdxrtndxrt'),
(7, 'Donata', 5865895, 'vgfrtgddddadgsgsgsggsd'),
(8, 'Raimis', 2147483647, 'Sveiki, ar galit man paskakbint?'),
(9, 'Sigita', 2147483647, 'esrgdthyghjgfds'),
(10, 'tomas', 549854653, 'gthyjukjmnhygfvdfvrgtyuj'),
(11, 'Sigita', 5865895, 'rxthcyghfdsa'),
(12, 'Sigita', 5865895, 'adsfzgncb'),
(13, 'Sigita', 5865895, 'qrwcgtbunkbhcgs'),
(14, 'Sigita', 5865895, 'sfdcgtfds'),
(15, 'Sigita', 5865895, 'defcgtxeds'),
(16, 'Sigita', 86548214, 'EFzgxfhgq'),
(17, 'Sigita', 86548214, 'EFzgxfhgq'),
(18, 'Sigita', 86548214, 'EFzgxfhgq'),
(19, 'Sigita', 86548214, 'EFzgxfhgq'),
(20, 'Sigita', 86548214, 'EFzgxfhgq'),
(21, 'Sigita', 86548214, 'EFzgxfhgq'),
(22, 'Sigita', 86548214, 'EFzgxfhgq'),
(23, 'Sigita', 86548214, 'EFzgxfhgq'),
(24, 'Sigita', 86548214, 'EFzgxfhgq'),
(25, 'Sigita', 86548214, 'EFzgxfhgq'),
(26, 'Sigita', 86548214, 'EFzgxfhgq'),
(27, 'Sigita', 86548214, 'EFzgxfhgq'),
(28, 'Sigita', 86548214, 'EFzgxfhgq'),
(29, 'Sigita', 86548214, 'EFzgxfhgq'),
(30, 'Sigita', 86548214, 'EFzgxfhgq'),
(31, 'Sigita', 86548214, 'eszgchfds'),
(32, 'Sigita', 5865895, 'wegtrbjk ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nariai`
--
ALTER TABLE `nariai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nuolaidos`
--
ALTER TABLE `nuolaidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nuolaidu_rezervacija`
--
ALTER TABLE `nuolaidu_rezervacija`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `straipsniai`
--
ALTER TABLE `straipsniai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uzklausos`
--
ALTER TABLE `uzklausos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentarai`
--
ALTER TABLE `komentarai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `nariai`
--
ALTER TABLE `nariai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nuolaidos`
--
ALTER TABLE `nuolaidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nuolaidu_rezervacija`
--
ALTER TABLE `nuolaidu_rezervacija`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `straipsniai`
--
ALTER TABLE `straipsniai`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `uzklausos`
--
ALTER TABLE `uzklausos`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
