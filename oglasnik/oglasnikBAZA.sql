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
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `auti` */

/*Table structure for table `kontakti` */

DROP TABLE IF EXISTS `kontakti`;

CREATE TABLE `kontakti` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naslov` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `EmailKorisnika` varchar(255) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Objasnjenje` varchar(8000) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `Datum` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `kontakti` */

insert  into `kontakti`(`Id`,`Naslov`,`EmailKorisnika`,`Objasnjenje`,`Datum`) values 
(1,'test','test','test','2018-10-10 19:54:59'),
(2,'test','test','test','2018-10-10 19:55:44');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `users` */

insert  into `users`(`Id`,`Ime`,`Prezime`,`Dob`,`MjestoStanovanja`,`PostanskiBroj`,`Email`,`Password_user`,`Datum`) values 
(1,'Denis','Alibašić',27,'Sveti Ivan Zelina',10382,'dalibasic@tvz.hr','test','2018-10-10 19:33:23'),
(2,'denis','aliba??iÄ‡',0,'27',0,'10382','test','2018-10-10 19:33:23'),
(4,'denis','aliba??iÄ‡',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.com','test','2018-10-10 19:33:23'),
(5,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'email@email.com','test','2018-10-10 19:33:23'),
(6,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'mi-ma5@hotmail.com','test','2018-10-10 19:33:23'),
(7,'','',0,'',0,'eteroox@hotmail.comad','','2018-10-10 19:33:23'),
(8,'','',0,'',0,'denis.alibasic22@gmail.comsfs','','2018-10-10 19:33:23'),
(9,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'mi-ma556@hotmail.com','test','2018-10-10 19:33:23'),
(11,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eterooxxx@hotmail.comx','test','2018-10-10 19:33:23'),
(12,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hrasdafd','test','2018-10-10 19:33:23'),
(13,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hr344','test','2018-10-10 19:33:23'),
(14,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comcxvxcdas','test','2018-10-10 19:33:23'),
(16,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comvcbvbcvb','test','2018-10-10 19:33:23'),
(17,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hr3453454','test','2018-10-10 19:33:23'),
(19,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comxxcvbcvbbnvn','test','2018-10-10 19:33:23'),
(20,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hrxasdwegerg','test','2018-10-10 19:33:23'),
(21,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hrdfgdfg','testsetset','2018-10-10 19:33:23'),
(22,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comfdhfgjgjkk','asdasda','2018-10-10 19:33:23'),
(23,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'denis.alibasic22@gmail.comcxvxcbcvnbffssdf','retzrtzrt','2018-10-10 19:33:23'),
(24,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comxcvxbnn','dsfbghtgmugjuk','2018-10-10 19:33:23'),
(25,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'denis.alibasic@tvz.hrcvbcvbcvnbvmbnmbnmgfhdf','sdbcvbcvnhmrzzhd','2018-10-10 19:33:23'),
(26,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comdsfsdf','asdascyxc','2018-10-10 19:33:23'),
(27,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hrsdfsdf','dffdgdb','2018-10-10 19:33:23'),
(28,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'email@email.comcvxcvxcvxcv','zuizhjkjkzu','2018-10-10 19:33:23'),
(29,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'denis.alibasic@tvz.hryxyxyxyycyxcsdasv','fsdfggsdg','2018-10-10 19:33:23'),
(30,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'email@email.comfgdfdfhdhfg','234235435','2018-10-10 19:33:23'),
(31,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'eteroox@hotmail.comyxcyxccvfsgsfsfwbasdd','testsets','2018-10-10 19:33:23'),
(33,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'dalibasic@tvz.hrxcvxcvcxv','fdggfnbvn','2018-10-10 19:33:23'),
(34,'denis','alibašić',27,'Sv. Ivan Zelina',10382,'123435dalibasic@tvz.hr','test','2018-10-10 19:53:05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
