/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.36 : Database - formation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`formation` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `formation`;

/*Table structure for table `appart` */

DROP TABLE IF EXISTS `appart`;

CREATE TABLE `appart` (
  `matricule` int(11) NOT NULL,
  `id_niv` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `appart` */

insert  into `appart`(`matricule`,`id_niv`,`id_mat`) values 
(1,3,1);

/*Table structure for table `etudiant` */

DROP TABLE IF EXISTS `etudiant`;

CREATE TABLE `etudiant` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `id_niv` int(11) DEFAULT NULL,
  `id_fil` int(11) DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `etudiant` */

insert  into `etudiant`(`matricule`,`nom`,`prenom`,`pseudo`,`mail`,`mdp`,`id_niv`,`id_fil`) values 
(1,'Rakoto','Ranto','Penjy','ranto@gmail.com','$2y$10$ej4Q3s3v7Pz.OpfWz5X8jOr2hoyeL5gXgY94vqz0sWMqkWJTtBaDe',3,1),
(2,'Randria','Anja','anja','anja@gmail.com','$2y$10$rdnulHD7RhFBIK7XvxFlLebvpH/gkJPA0whnuPBoH.RXcV5ibyvce',3,2);

/*Table structure for table `exercice` */

DROP TABLE IF EXISTS `exercice`;

CREATE TABLE `exercice` (
  `id_exo` int(11) NOT NULL AUTO_INCREMENT,
  `titre_exo` varchar(255) NOT NULL,
  `id_lec` int(11) NOT NULL,
  `id_niv` int(11) NOT NULL,
  PRIMARY KEY (`id_exo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `exercice` */

/*Table structure for table `fichier` */

DROP TABLE IF EXISTS `fichier`;

CREATE TABLE `fichier` (
  `id_fich` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fich` varchar(255) NOT NULL,
  `id_lec` int(11) DEFAULT NULL,
  `id_exo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_fich`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `fichier` */

/*Table structure for table `filiere` */

DROP TABLE IF EXISTS `filiere`;

CREATE TABLE `filiere` (
  `id_fil` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fil` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fil`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `filiere` */

insert  into `filiere`(`id_fil`,`nom_fil`) values 
(1,'Informatique'),
(2,'Gestion'),
(3,'Multimédia');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) DEFAULT NULL,
  `matricule` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`id_image`,`chemin`,`matricule`) values 
(3,'Photo CV.jpg',1),
(4,'IMG_20220616_113145-01.jpeg',2);

/*Table structure for table `lecon` */

DROP TABLE IF EXISTS `lecon`;

CREATE TABLE `lecon` (
  `id_lec` int(11) NOT NULL AUTO_INCREMENT,
  `titre_lec` varchar(11) NOT NULL,
  `id_mat` int(11) NOT NULL,
  `id_niv` int(11) NOT NULL,
  PRIMARY KEY (`id_lec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `lecon` */

/*Table structure for table `matiere` */

DROP TABLE IF EXISTS `matiere`;

CREATE TABLE `matiere` (
  `id_mat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_mat` varchar(255) NOT NULL,
  `id_fil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mat`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `matiere` */

insert  into `matiere`(`id_mat`,`nom_mat`,`id_fil`) values 
(1,'Java',1),
(2,'PHP',1),
(3,'Integration Web',1),
(4,'MERISE',1),
(5,'UML',1),
(6,'Organisation d\'entreprise',2),
(7,'Marketing',2),
(8,'Droit des affaires',2);

/*Table structure for table `niveau` */

DROP TABLE IF EXISTS `niveau`;

CREATE TABLE `niveau` (
  `id_niv` int(11) NOT NULL AUTO_INCREMENT,
  `nom_niv` varchar(255) NOT NULL,
  `annee_acad` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_niv`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `niveau` */

insert  into `niveau`(`id_niv`,`nom_niv`,`annee_acad`) values 
(1,'L1',NULL),
(2,'L2',NULL),
(3,'L3',NULL),
(4,'M1',NULL),
(5,'M2',NULL);

/*Table structure for table `s_visite` */

DROP TABLE IF EXISTS `s_visite`;

CREATE TABLE `s_visite` (
  `id_visit` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `date_visite` datetime NOT NULL,
  PRIMARY KEY (`id_visit`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

/*Data for the table `s_visite` */

insert  into `s_visite`(`id_visit`,`matricule`,`date_visite`) values 
(30,1,'2022-08-28 15:21:39'),
(29,1,'2022-08-28 14:50:14'),
(28,1,'2022-08-28 14:36:40'),
(31,1,'2022-08-28 15:22:12'),
(32,2,'2022-08-28 15:25:28'),
(33,2,'2022-08-28 15:50:44'),
(34,2,'2022-08-28 15:51:00'),
(35,2,'2022-08-28 15:54:09'),
(36,1,'2022-08-28 15:56:13'),
(37,1,'2022-08-28 15:56:37'),
(38,1,'2022-08-28 15:57:12'),
(39,1,'2022-08-28 15:57:21'),
(40,1,'2022-08-28 16:10:55'),
(41,1,'2022-08-28 16:13:09'),
(42,1,'2022-08-28 16:42:18'),
(43,1,'2022-08-30 07:06:49'),
(44,1,'2022-08-30 11:53:13'),
(45,1,'2022-08-30 11:54:30'),
(46,2,'2022-08-30 11:58:39'),
(47,1,'2022-08-30 12:11:41'),
(48,2,'2022-08-30 13:21:16'),
(49,1,'2022-09-05 17:13:19'),
(50,1,'2022-09-05 17:21:58'),
(51,2,'2022-09-05 17:22:15'),
(52,1,'2022-09-09 15:29:04'),
(53,1,'2022-09-11 09:51:51'),
(54,1,'2022-09-11 09:55:20'),
(55,2,'2022-09-11 09:59:16'),
(56,2,'2022-09-11 09:59:39'),
(57,2,'2022-09-11 10:00:00'),
(58,2,'2022-09-11 10:05:56'),
(59,1,'2022-09-12 23:18:30'),
(60,2,'2022-09-12 23:18:54'),
(61,1,'2022-09-12 23:21:16'),
(62,1,'2022-09-12 23:30:50'),
(63,1,'2022-09-12 23:39:15'),
(64,2,'2022-09-13 08:26:56'),
(65,1,'2022-09-13 08:34:14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
