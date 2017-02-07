-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 11:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvv`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) DEFAULT NULL,
  `komentar` text NOT NULL,
  `idSadrzaj` int(11) NOT NULL,
  `idRegister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `naslov`, `komentar`, `idSadrzaj`, `idRegister`) VALUES
(1, NULL, 'neki test tamo', 1, 1),
(2, NULL, 'neki test tamo vamo bla bla', 2, 2),
(3, NULL, 'neki test tamo vamo bla bla 213124534', 3, 1),
(4, NULL, 'neki novi test sam da probam', 1, 1),
(5, NULL, 'test 123 123', 2, 1),
(66, NULL, 'sad da vidimo jel ili nije :)				\r\n				', 3, 32),
(67, NULL, 'test za ovaj drugi :D				\r\n				', 2, 32),
(68, NULL, 'hehe radi :)				\r\n				', 3, 32),
(71, NULL, 'neki novi za error				\r\n				', 3, 32),
(72, NULL, 'jel radi sad :O?				\r\n				', 3, 32),
(73, NULL, 'gffgh fdga df d hjgfj gfjhgfjhg kdgk mj opsidafgn idfngipaodfng oidfn omfdšp gmpšfom gpoi mnopi g				\r\n				', 3, 32),
(74, NULL, 'ertgaergaergreg				\r\n				', 3, 32),
(75, NULL, 'ertgaergaergreg				\r\n				', 3, 32),
(76, NULL, 'radi sad?', 3, 32),
(77, NULL, 'sghsfghfghsfgh\r\n		fgfsghgf		', 3, 32),
(78, NULL, 'hrthrthrth				\r\n				', 3, 32),
(79, NULL, 'da vidimo ce se insertat', 2, 32),
(80, NULL, 'facebook', 1, 33),
(81, NULL, 'dogs', 4, 33),
(82, NULL, 'nesto novo', 1, 33),
(83, NULL, 'test', 3, 33),
(84, NULL, 'test', 3, 33),
(85, NULL, 'test', 3, 33),
(86, NULL, 'opet test', 3, 33),
(87, NULL, 'opet test', 3, 33),
(88, NULL, 'komentar', 4, 32),
(89, NULL, 'komentar', 4, 32),
(90, NULL, 'komentar', 4, 32),
(91, NULL, 'komentar', 4, 32),
(92, NULL, 'novi komentar', 4, 32),
(93, NULL, 'Hehehehh', 5, 32),
(94, NULL, 'Hehehehh', 5, 32),
(95, NULL, 'Hehehehh', 5, 32),
(96, NULL, 'neki novi test', 5, 32),
(97, NULL, 'sad?', 5, 32),
(98, NULL, 'a sad=?', 5, 32),
(99, NULL, 'Mirela voli macke :D', 6, 32),
(100, NULL, 'Neki novi komentar', 10, 34);

-- --------------------------------------------------------

--
-- Table structure for table `likebutton`
--

CREATE TABLE `likebutton` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `like1` int(11) NOT NULL,
  `like2` int(11) NOT NULL,
  `idSadrzaj` int(11) NOT NULL,
  `idRegister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Dumping data for table `likebutton`
--

INSERT INTO `likebutton` (`id`, `naziv`, `like1`, `like2`, `idSadrzaj`, `idRegister`) VALUES
(1, 'facebook vs twitter', 6, 3, 1, 1),
(2, 'youtube vs twitch', 8, 2, 2, 1),
(3, 'whatsapp vs skype', 1, 2, 3, 1),
(6, '', 4, 0, 1, 32),
(8, '', 2, 0, 1, 33),
(9, 'Dogs vs Cats', 4, 0, 4, 1),
(13, '', 2, 0, 4, 32),
(14, '', 3, 0, 2, 32),
(16, 'Duck vs Rooster', 2, 0, 5, 1),
(17, '', 2, 0, 5, 32),
(18, 'Cat vs Mouse', 2, 1, 6, 1),
(19, '', 2, 1, 6, 32),
(20, 'Dog vs Horse', 2, 0, 7, 1),
(21, 'Shower vs Bath', 1, 1, 8, 1),
(22, 'Sea vs Lake', 3, 3, 9, 1),
(23, 'Train vs Bus', 2, 5, 10, 1),
(24, '', 1, 1, 8, 32),
(28, '', 3, 1, 9, 32),
(30, '', 2, 0, 7, 32),
(31, '', 1, 2, 3, 32),
(45, '', 0, 1, 10, 34),
(46, '', 1, 0, 2, 34),
(47, '', 1, 0, 6, 34),
(48, '', 0, 1, 3, 34),
(49, '', 2, 0, 9, 34),
(50, '', 1, 0, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET cp1250 NOT NULL,
  `image` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=cp852;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `surname`, `email`, `password`, `image`, `time`) VALUES
(1, 'd', 'a', 'testing@gmail.com', '', 'https://lh5.googleusercontent.com/-MemO_rhAskc/AAAAAAAAAAI/AAAAAAAAABA/IGp8Xp0WiHA/s96-c/photo.jpg', '2017-02-04 12:05:35'),
(2, 'd', 'a', 'test@gmail.com', '', 'https://lh6.googleusercontent.com/-PiCySnxTHng/AAAAAAAAAAI/AAAAAAAAAbA/XwthRN_E0sw/s96-c/photo.jpg', '2017-02-04 12:04:57'),
(3, 'd', 'a', 'test2@gmail.com', 'denis', NULL, '2017-02-04 12:05:20'),
(32, 'd', 'a', 'test3@gmail.com', 'test2', NULL, '2017-02-07 22:56:06'),
(33, 'd', 'a', 'test4@gmail.com', 'test', NULL, '2017-02-07 22:55:59'),
(34, 'd', 'a', 'test5@gmail.com', 'mi', NULL, '2017-02-07 22:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `sadrzaj`
--

CREATE TABLE `sadrzaj` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `naziv1` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `naziv2` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path1` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path2` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `opis1` text COLLATE cp1250_croatian_ci NOT NULL,
  `opis2` text COLLATE cp1250_croatian_ci NOT NULL,
  `link1` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `link2` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `sadrzaj`
--

INSERT INTO `sadrzaj` (`id`, `naslov`, `naziv1`, `naziv2`, `path1`, `path2`, `opis1`, `opis2`, `link1`, `link2`, `time`) VALUES
(1, 'Facebook vs Twitter', 'Facebook', 'Twitter', 'images/vs/facebook.jpg', 'images/vs/twitter.png', 'Facebook is a popular free social networking website that allows registered users to create profiles, upload photos and video, send messages and keep in touch with friends, family and colleagues.', 'Twitter is an online social networking service that enables users to send and read short 140-character messages called tweets', 'https://www.facebook.com/', 'https://twitter.com/', '2016-08-03 16:18:39'),
(2, 'Youtube vs Twitch', 'Youtube', 'Twitch', 'images/vs/youtube.png', 'images/vs/twitch.png', 'YouTube is a free video sharing website that makes it easy to watch online videos. You can even create and upload your own videos to share with others.', 'Twitch is the world’s leading social video platform and community for gamers. Each month, more than 100 million community members gather to watch and talk about video games with more than 1.7 million broadcasters. ', 'https://www.youtube.com/', 'https://www.twitch.tv/', '2016-08-03 16:20:31'),
(3, 'Whatsapp vs Skype', 'Whatsapp', 'Skype', 'images/vs/whatsapp.jpg', 'images/vs/skype.png', 'WhatsApp Messenger is a cross-platform mobile messaging app which allows you to exchange messages without having to pay for SMS. WhatsApp Messenger is available for iPhone, BlackBerry, Android, Windows Phone and Nokia', 'With the Skype app, you can do more together:  Message, voice and video call, all from one app. Get everyone together with free group video calls. Send pictures and files, or share your screen. Translate your calls and messages to speak with anyone around the world.', 'https://www.whatsapp.com/', 'https://www.skype.com/en/', '2016-08-19 17:12:33'),
(4, 'Dogs vs cats', 'Dogs', 'Cats', 'images/vs/dogs.jpg', 'images/vs/cats.jpg', 'The domestic dog (Canis lupus familiaris or Canis familiaris) is a domesticated canid which has been selectively bred ', 'The domestic cat (Latin: Felis catus) or the feral cat (Latin: Felis silvestris catus) is a small, typically furry, ', '', '', '2016-08-18 16:42:47'),
(5, 'Duck vs Rooster', 'Duck', 'Rooster', 'images/vs/duck.jpg', 'images/vs/rooster.jpg', 'Duck is the common name for a large number of species in the waterfowl family Anatidae, which also includes swans and geese', 'A rooster, also known as a cockerel or cock, is a male gallinaceous bird, usually a male chicken (Gallus gallus).', '', '', '2016-08-18 18:58:02'),
(6, 'Cat vs Mouse', 'Cat', 'Mouse', 'images/vs/cat.jpg', 'images/vs/mouse.jpg', 'The domestic cat (Latin: Felis catus) or the feral cat (Latin: Felis silvestris catus) is a small, typically furry,carnivorous mammal', 'A mouse (plural: mice) is a small rodent characteristically having a pointed snout, small rounded ears, a body-length scaly tail and a high breeding rate', '', '', '2016-08-18 20:11:49'),
(7, 'Dog vs Horse', 'Dog', 'Horse', 'images/vs/dog.jpg', 'images/vs/horse.jpg', 'The domestic dog (Canis lupus familiaris or Canis familiaris) is a domesticated canid which has been selectively bred over millennia for various behaviours, sensory capabilities, and physical attributes', 'The horse (Equus ferus caballus) is one of two extant subspecies of Equus ferus. It is an odd-toed ungulate mammal belonging to the taxonomic family Equidae.', '', '', '2016-08-18 21:11:16'),
(8, 'Shower vs Bath', 'Shower', 'Bath', 'images/vs/shower.jpg', 'images/vs/bath.jpg', 'A shower is a place in which a person bathes under a spray of typically warm or hot water. ', 'Bath may refer to: Bathing, immersion in a fluid. Bathtub, a large open container for water, in which a person may wash their body.', '', '', '2016-08-18 21:21:05'),
(9, 'Sea vs Lake', 'Sea', 'Lake', 'images/vs/sea.jpg', 'images/vs/lake.jpg', 'A sea is a large body of salt water that is surrounded in whole or in part by land.', 'A lake (from Latin lacus) is a large body of water (larger and deeper than a pond) within a body of land. ', '', '', '2016-08-19 17:12:57'),
(10, 'Train vs Bus', 'Train', 'Bus', 'images/vs/train.jpg', 'images/vs/bus.png', 'A train is a form of rail transport consisting of a series of vehicles that usually runs along a rail track to transport cargo or passengers.', 'A bus is a road vehicle designed to carry many passengers. Buses can have a capacity as high as 300 passengers.', '', '', '2016-08-19 17:13:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSadrzaj` (`idSadrzaj`),
  ADD KEY `idRegister` (`idRegister`);

--
-- Indexes for table `likebutton`
--
ALTER TABLE `likebutton`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSadrzaj` (`idSadrzaj`),
  ADD KEY `idRegister` (`idRegister`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sadrzaj`
--
ALTER TABLE `sadrzaj`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sadrzaj` ADD FULLTEXT KEY `socialmedia` (`naslov`);
ALTER TABLE `sadrzaj` ADD FULLTEXT KEY `naslov` (`naslov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `likebutton`
--
ALTER TABLE `likebutton`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `sadrzaj`
--
ALTER TABLE `sadrzaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idSadrzaj`) REFERENCES `sadrzaj` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`idRegister`) REFERENCES `register` (`id`);

--
-- Constraints for table `likebutton`
--
ALTER TABLE `likebutton`
  ADD CONSTRAINT `likebutton_ibfk_1` FOREIGN KEY (`idSadrzaj`) REFERENCES `sadrzaj` (`id`),
  ADD CONSTRAINT `likebutton_ibfk_2` FOREIGN KEY (`idRegister`) REFERENCES `register` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
