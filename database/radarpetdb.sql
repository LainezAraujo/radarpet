/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.34-MariaDB : Database - radarpetdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`radarpetdb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `radarpetdb`;

/*Table structure for table `actions` */

DROP TABLE IF EXISTS `actions`;

CREATE TABLE `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `situation_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situation_fk` (`situation_id`),
  CONSTRAINT `actions_ibfk_1` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `actions` */

/*Table structure for table `animals` */

DROP TABLE IF EXISTS `animals`;

CREATE TABLE `animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` enum('macho','fêmea') NOT NULL,
  `primary_color` varchar(50) NOT NULL,
  `secundary_color` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `coat_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `situation_id` int(11) DEFAULT NULL,
  `specie_id` int(11) DEFAULT NULL,
  `profile_photo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `action_id` (`action_id`),
  KEY `coat_id` (`coat_id`),
  KEY `color_id` (`color_id`),
  KEY `situation_id` (`situation_id`),
  KEY `specie_id` (`specie_id`),
  KEY `profile_photo_id` (`profile_photo_id`),
  CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `animals_ibfk_2` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`),
  CONSTRAINT `animals_ibfk_3` FOREIGN KEY (`coat_id`) REFERENCES `coats` (`id`),
  CONSTRAINT `animals_ibfk_4` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  CONSTRAINT `animals_ibfk_5` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`id`),
  CONSTRAINT `animals_ibfk_6` FOREIGN KEY (`specie_id`) REFERENCES `species` (`id`),
  CONSTRAINT `animals_ibfk_7` FOREIGN KEY (`profile_photo_id`) REFERENCES `profile_photos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `animals` */

/*Table structure for table `breeds` */

DROP TABLE IF EXISTS `breeds`;

CREATE TABLE `breeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `breeds` */

/*Table structure for table `coats` */

DROP TABLE IF EXISTS `coats`;

CREATE TABLE `coats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `coats` */

/*Table structure for table `colors` */

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `colors` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url_image` varchar(100) DEFAULT NULL,
  `situation_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `animal_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situation_id` (`situation_id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`id`),
  CONSTRAINT `images_ibfk_2` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `images` */

/*Table structure for table `locations` */

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `situation_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situation_id` (`situation_id`),
  CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `locations` */

/*Table structure for table `profile_photos` */

DROP TABLE IF EXISTS `profile_photos`;

CREATE TABLE `profile_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `url_photo` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `situation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situation_id` (`situation_id`),
  CONSTRAINT `profile_photos_ibfk_1` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profile_photos` */

/*Table structure for table `situations` */

DROP TABLE IF EXISTS `situations`;

CREATE TABLE `situations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `situations` */

/*Table structure for table `species` */

DROP TABLE IF EXISTS `species`;

CREATE TABLE `species` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `breed_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `breed_id` (`breed_id`),
  CONSTRAINT `species_ibfk_1` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `species` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `primary_phone` varchar(25) DEFAULT NULL,
  `secondary_phone` varchar(25) DEFAULT NULL,
  `ong` enum('sim','não') DEFAULT NULL,
  `gender` enum('masculino','feminino') DEFAULT NULL,
  `profile_photo_id` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `situation_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_photo_id` (`profile_photo_id`),
  KEY `situation_id` (`situation_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`profile_photo_id`) REFERENCES `profile_photos` (`id`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`situation_id`) REFERENCES `situations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`birth`,`email`,`cpf`,`primary_phone`,`secondary_phone`,`ong`,`gender`,`profile_photo_id`,`password`,`situation_id`,`created_at`,`updated_at`) values (1,'Vagner','Garcia',NULL,'Vagner@jhh.mmm','21491818482','9347237471','2831744',NULL,NULL,NULL,'$2y$10$RW6IhQX/WttkKK8b.JnvRuYMntNxhI74Ajs8VQrRaDuOVZUtt0vYC',NULL,'2019-03-21 00:40:59','2019-03-21 00:40:59'),(2,'Marcelo','Ifms',NULL,'marcelo@gmail.com','2391248','1391848','2914875',NULL,NULL,NULL,'$2y$10$1cQLY0cfSWrD14kmyibpzOAsjORoeJaeloGijviYJaDzO8WW3xc3e',NULL,'2019-03-21 00:42:49','2019-03-21 00:42:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
