-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 05, 2016 at 01:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novosti_zelina`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id` int(11) NOT NULL,
  `path` text COLLATE cp1250_croatian_ci,
  `naziv` text COLLATE cp1250_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id`, `path`, `naziv`) VALUES
(1, 'slike/galerija/slika1 (1).jpg', 'Palas zimi'),
(2, 'slike/galerija/slika1 (2).jpg', 'Pogled na Zelingrad s okolnih brežuljaka'),
(3, 'slike/galerija/slika1 (3).jpg', 'Sjeverna strana palasa'),
(4, 'slike/galerija/slika1 (4).jpg', 'Sjeverozapadna strana palasa'),
(5, 'slike/galerija/slika1 (5).jpg', 'Palas i ulazna polukula'),
(6, 'slike/galerija/slika1 (6).jpg', 'Ulazna i istočna polukula prije istraživanja'),
(7, 'slike/galerija/slika1 (7).jpg', 'Ulazna polukula nakon postavljanja prilazne rampe'),
(8, 'slike/galerija/slika1 (8).jpg', 'Ulaz u istočnu polukulu iz unutarnjeg dvorišta'),
(9, 'slike/galerija/slika1 (9).jpg', 'Konzervatorski radovi iz 1961. godine'),
(10, 'slike/galerija/slika1 (10).jpg', 'Jugoistočni ugao palasa prije istraživanja 2001. godine'),
(11, 'slike/galerija/slika1 (11).jpg', 'Jugoistočni ugao nakon istraživanja'),
(12, 'slike/galerija/slika1 (12).jpg', 'Istraživanje cisterne za vodu u unutarnjem dvorištu 2001. godine'),
(13, 'slike/galerija/slika1 (13).jpg', 'Pregledavanje materijala izvađenog iz cisterne'),
(14, 'slike/galerija/slika1 (14).jpg', 'Pogled u cisternu nakon čišćenja'),
(15, 'slike/galerija/slika1 (15).jpg', 'Žbuka na zidu istočne stambene prostorije'),
(16, 'slike/galerija/slika1 (16).jpg', 'Dijelovi poda u istočnoj stambenoj prostoriji'),
(17, 'slike/galerija/slika1 (17).jpg', 'Raščišćavanje urušenog materijala iz unutarnjeg dvorišta'),
(18, 'slike/galerija/slika1 (18).jpg', 'Arheološka istraživanja vanjskog dvorišta'),
(19, 'slike/galerija/slika1 (19).jpg', 'Istraživanje starog ulaza u grad'),
(20, 'slike/galerija/slika1 (20).jpg', 'Ugao starog ulaza u grad i spoj s istočnom pnlukulom nakon arheoloških istraživanja'),
(21, 'slike/galerija/slika1 (21).jpg', 'Konzervatorski radovi na spoju starog ulaza i istočne polukule'),
(22, 'slike/galerija/slika1 (22).jpg', 'Niša u istočnoj polukuli u kojoj su se nalazile stepenice nakon istraživanja'),
(23, 'slike/galerija/slika1 (23).jpg', 'Niša nakon konzervatorskih radova'),
(24, 'slike/galerija/slika1 (24).jpg', 'Konzervatorski radovi na vanjskom spoju ulazne i istočne polukule'),
(25, 'slike/galerija/slika1 (25).jpg', 'Postavljanje prilazne rampe na ulazu u polukulu'),
(26, 'slike/galerija/slika1 (26).jpg', 'Postavljanje zaštitne ograde u istočnoj polukuli'),
(27, 'slike/galerija/slika1 (27).jpg', 'Brončani vrč'),
(28, 'slike/galerija/slika1 (28).jpg', 'Novac datiran 1533. godine'),
(29, 'slike/galerija/slika1 (29).jpg', 'Srebrna žlica'),
(30, 'slike/galerija/slika1 (30).jpg', 'Dio kamene plastike pronađene na Zelingradu'),
(31, 'slike/galerija/slika1 (31).jpg', 'Dio postava izložbe Zelingrad'),
(32, 'slike/galerija/slika1 (32).jpg', 'Gosti u ugodnom raspoloženju uz «dvorsko ognjište'),
(33, 'slike/galerija/slika1 (33).jpg', 'Božično-novogodišnji domjenak 2002. godine - igrokaz « Veselo društvo Zelingradsko»'),
(34, 'slike/galerija/slika1 (34).jpg', 'čari dvorskog ognjišta'),
(35, 'slike/galerija/slika1 (35).jpg', 'Zelingrad'),
(36, 'slike/galerija/slika1 (36).jpg', 'Arheološka istraživanja'),
(37, 'slike/galerija/slika1 (37).jpg', 'zelingrad'),
(38, 'slike/galerija/slika1 (38).jpg', 'zelingrad'),
(39, 'slike/galerija/slika1 (39).jpg', 'zelingrad'),
(40, 'slike/galerija/slika1 (40).jpg', 'Arheološka istraživanja'),
(41, 'slike/galerija/slika1 (41).jpg', 'zelingrad'),
(42, 'slike/galerija/slika1 (42).jpg', 'radovi na zelingradu'),
(43, 'slike/galerija/slika1 (43).jpg', 'zelingrad'),
(44, 'slike/galerija/slika1 (44).jpg', 'arheološka istraživanja'),
(45, 'slike/galerija/slika1 (45).jpg', 'arheološka istraživanja'),
(46, 'slike/galerija/slika1 (46).jpg', 'klesanje-ugaonih-kamena'),
(47, 'slike/galerija/slika1 (47).jpg', 'arheološka istraživanja'),
(48, 'slike/galerija/slika1 (48).jpg', 'Kamen s natpisom iz 1535. godine'),
(49, 'slike/galerija/slika1 (49).jpg', 'Stambeni dio grada'),
(50, 'slike/galerija/slikav (1).jpg', 'dobrodoslica-domacina'),
(51, 'slike/galerija/slikav (2).jpg', 'druzenje-uz-vatru'),
(52, 'slike/galerija/slikav (3).jpg', 'vitez-iz-Stubice-Gornje'),
(53, 'slike/galerija/slikav (4).jpg', 'viteski-turnir'),
(54, 'slike/galerija/slikav (5).jpg', 'viteski-turnir'),
(55, 'slike/galerija/slikav (6).jpg', 'igrokaz');

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `id` int(11) NOT NULL,
  `zaposlenici` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `radno_vrijeme` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`id`, `zaposlenici`, `radno_vrijeme`) VALUES
(8, 'Mladen Houška, dipl. iur. – ravnatelj', 'pon-pet (8-12) , sub (8-13)'),
(9, 'Romana Mačković, dipl arheolog - viši kustos', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `pass` varchar(50) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pass`) VALUES
(1, 'muzejzelina', 'muzej1962016');

-- --------------------------------------------------------

--
-- Table structure for table `naklade`
--

CREATE TABLE `naklade` (
  `id` int(11) NOT NULL,
  `h1` text COLLATE cp1250_croatian_ci,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` text COLLATE cp1250_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `naklade`
--

INSERT INTO `naklade` (`id`, `h1`, `paragraf`, `path`) VALUES
(1, 'Fotografija u Sv. Ivanu Zelini', 'Katalog izložbe: 120 godina fotografije u Sv. Ivanu Zelini Muzej Sveti Ivan Zelina, 2005. 111 str., 32x22 cm, meki uvez, 206 c/b fotografija', 'slike/naklada/1.gif'),
(2, 'Crkva Sv. Tri kralja u Kominu', 'Monografija Muzej Sv. Ivan Zelina, Matica hrvatska ogranak Sv. I. Zelina, 2005. 79 str., 29x23 cm, tvrdi uvez, fotografije u boji', 'slike/naklada/2.gif'),
(3, 'Sedam stoljeća obrtništva u Sv. Ivanu Zelini', 'Monografija izdana povodom obilježavanja 20 obljetnice osnutka Udruženja obrtnika Sv. Ivan Zelina Muzej Sv. Ivan Zelina, Matica hrvatska ogranak Sv. I. Zelina, 2006. 107 str., 30x22 cm, tvrdi uvez, fotografije u boji', 'slike/naklada/3.gif'),
(4, 'Sveta Helena', 'Monografija izdana povodom 450 obljetnice bitke kod Sv. Helene Muzej Sv. Ivan Zelina, Matica hrvatska ogranak Sv. I. Zelina, 2007. 62 str.,25x18,5 cm, meki uvez, fotografije u boji', 'slike/naklada/4.gif'),
(5, 'Zelinski kraj kroz prošlost', 'Monografija izdana povodom obilježavanja 20 godina Muzeja Sveti Ivan Zelina, pregled povijesti Sv. I. Zeline od prapovijesti do početka 20. st. Muzej Sv. Ivan Zelina, 2007. 167 str, 28x22 cm, meki uvez, fotografije u boji', 'slike/naklada/5.gif'),
(6, 'Priča o Zelini', 'Popratno izdanje uz izložbu otvorenu povodom obilježavanja 20 obljetnice Muzeja Sv. Ivan Zelina Muzej Sv. Ivan Zelina, 2008. 22 str., 29,5x21, meki uvez, fotografije u boji', 'slike/naklada/6.gif'),
(7, 'Templari i njihovo naslijeđe', 'Katalog izložbe: Templari i njihovo naslijeđe, otvorene povodom 800 godina dolaska templara na Zemlju Sv. Martina. Tekstove u katalogu napisali: prof. Vladimir P. Goss, dr. Juraj Belaj, Ivan Srša, Mladen Houška. Muzej Sveti Ivan Zelina, 2009. 57 str., 29 x 21 cm, meki uvez, fotografije u boji', 'slike/naklada/7.gif');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE `novosti` (
  `id` int(11) NOT NULL,
  `h1` text COLLATE cp1250_croatian_ci,
  `path` text COLLATE cp1250_croatian_ci,
  `paragraf` text COLLATE cp1250_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `h1`, `path`, `paragraf`) VALUES
(1, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(2, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(3, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(4, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(5, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(6, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(7, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(8, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(9, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(10, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(11, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.'),
(12, 'Neki naslov', 'slike/novosti/blender4web2.jpg', 'Počeci Muzeja Sveti Ivan Zelina se naziru od 1977. godine kada je osnovana Zavičajna zbirka, da bi 1988 godine bio osnovan Zavičajni muzej, danas Muzej Sveti Ivan Zelina. Muzej nalazi se u centru grada Svetog Ivan Zeline u zgradi koju je 1951. godine projektirao poznati hrvatski arhitekt Stjepan Planić. Zgrada je prvotno bila namijenjena za Zadružni dom, da bi kasnije tu bila smještena škola, a nakon toga i pogon tekstilne industrije "Zelinka". U Muzeju se nalaze predmeti od prapovijesti do današnjih dana, a kako Muzej nema stalni postav, građa se izlaže na povremenim izložbama.');

-- --------------------------------------------------------

--
-- Table structure for table `pristupi`
--

CREATE TABLE `pristupi` (
  `id` int(11) NOT NULL,
  `path` text COLLATE cp1250_croatian_ci,
  `h1` text COLLATE cp1250_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `pristupi`
--

INSERT INTO `pristupi` (`id`, `path`, `h1`) VALUES
(5, 'slike/pristup/1.pdf', 'dasdgwe'),
(7, 'slike/pristup/1_prikupljanje i uporaba trzisnih informacija.pdf', 'Pdf neki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontakti`
--
ALTER TABLE `kontakti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naklade`
--
ALTER TABLE `naklade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novosti`
--
ALTER TABLE `novosti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pristupi`
--
ALTER TABLE `pristupi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `kontakti`
--
ALTER TABLE `kontakti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `naklade`
--
ALTER TABLE `naklade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `novosti`
--
ALTER TABLE `novosti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pristupi`
--
ALTER TABLE `pristupi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
