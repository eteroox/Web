/*
SQLyog Community v12.2.6 (64 bit)
MySQL - 10.1.36-MariaDB : Database - oglasnik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oglasnik` /*!40100 DEFAULT CHARACTER SET cp1250 COLLATE cp1250_croatian_ci */;

USE `oglasnik`;

/*Table structure for table `auti` */

DROP TABLE IF EXISTS `auti`;

CREATE TABLE `auti` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `MarkaAutomobila` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `ModelAutomobila` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Gorivo` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Mjenjac` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Pogon` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Boja` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Cijena` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Opis` varchar(30) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `DatumKreiranja` datetime DEFAULT CURRENT_TIMESTAMP,
  `DatumUpdejta` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `auti_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `auti` */

insert  into `auti`(`Id`,`MarkaAutomobila`,`ModelAutomobila`,`Gorivo`,`Mjenjac`,`Pogon`,`Boja`,`Cijena`,`Opis`,`users_id`,`DatumKreiranja`,`DatumUpdejta`) values 
(1,'Suzuki','Vitara','Benzin','Ručni','2wd','Bijela','140000','Lorem ipsum dolor sit amet, co',1,'2018-10-14 19:43:40','2018-10-14 19:43:40'),
(6,'Bmw','1','Benzin','Automatik','2wd','Crna','200000','Opis auta',2,'2018-10-20 21:46:16','2018-10-20 21:47:09'),
(7,'Audi','a4','Benzin','Ručni','4wd','Crvena','250000','Opis audi bla bla',2,'2018-10-20 21:50:11','2018-10-20 21:50:11');

/*Table structure for table `kontakti` */

DROP TABLE IF EXISTS `kontakti`;

CREATE TABLE `kontakti` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naslov` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `EmailKorisnika` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Objasnjenje` varchar(8000) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Datum` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `kontakti` */

insert  into `kontakti`(`Id`,`Naslov`,`EmailKorisnika`,`Objasnjenje`,`Datum`) values 
(1,'Test naslov','dalibasic@tvz.hr','test opis','2018-10-14 19:49:08');

/*Table structure for table `slike` */

DROP TABLE IF EXISTS `slike`;

CREATE TABLE `slike` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NazivSlike` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `TipSlike` varchar(10) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `VelicinaSlike` double DEFAULT NULL,
  `LokacijaSlike` varchar(100) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `auti_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `auti_id` (`auti_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `slike_ibfk_1` FOREIGN KEY (`auti_id`) REFERENCES `auti` (`Id`),
  CONSTRAINT `slike_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `slike` */

insert  into `slike`(`Id`,`NazivSlike`,`TipSlike`,`VelicinaSlike`,`LokacijaSlike`,`auti_id`,`users_id`) values 
(1,'vitara2018.JPG','JPG',52223,'uploads/vitara2018.JPG',1,1),
(6,'BMW-1.png','png',205184,'uploads/BMW-1.png',6,2),
(7,'audi-a4.png','png',31644,'uploads/audi-a4.png',7,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Prezime` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Dob` int(11) DEFAULT NULL,
  `MjestoStanovanja` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `PostanskiBroj` int(11) DEFAULT NULL,
  `Email` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Password_user` varchar(150) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Datum` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `users` */

insert  into `users`(`Id`,`Ime`,`Prezime`,`Dob`,`MjestoStanovanja`,`PostanskiBroj`,`Email`,`Password_user`,`Datum`) values 
(1,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hr','$2y$12$ITI3xKRa6qNOghU/EXcIv.DmmN32HaoTLW55vgVL7yebn40IjNQYq','2018-10-14 19:40:50'),
(2,'Denis Alibašić',NULL,NULL,NULL,NULL,'eteroox@hotmail.com','$2y$12$4ODYRpgHVx0fBQVdygeve.nBKAmKjnjOTOh8dPf06mcoLbVYF9g9a','2018-10-20 21:46:16');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
