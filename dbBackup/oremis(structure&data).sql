/*
SQLyog Community v12.12 (64 bit)
MySQL - 5.6.24 : Database - oremis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oremis` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `oremis`;

/*Table structure for table `authassignment` */

DROP TABLE IF EXISTS `authassignment`;

CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authassignment` */

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('admin','adminD',NULL,'N;'),('author','authorB',NULL,'N;'),('editor','editorC',NULL,'N;'),('reader','readerA',NULL,'N;');

/*Table structure for table `authitem` */

DROP TABLE IF EXISTS `authitem`;

CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('admin',2,'',NULL,'N;'),('author',2,'',NULL,'N;'),('createPost',0,'create a post',NULL,'N;'),('deletePost',0,'delete a post',NULL,'N;'),('editor',2,'',NULL,'N;'),('reader',2,'',NULL,'N;'),('readPost',0,'read a post',NULL,'N;'),('updateOwnPost',1,'update a post by author himself','return Yii::app()->user->id==$params[\"post\"]->authID;','N;'),('updatePost',0,'update a post',NULL,'N;');

/*Table structure for table `authitemchild` */

DROP TABLE IF EXISTS `authitemchild`;

CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('admin','author'),('author','createPost'),('admin','deletePost'),('admin','editor'),('author','reader'),('editor','reader'),('reader','readPost'),('author','updateOwnPost'),('editor','updatePost'),('updateOwnPost','updatePost');

/*Table structure for table `ent_propdetail` */

DROP TABLE IF EXISTS `ent_propdetail`;

CREATE TABLE `ent_propdetail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` enum('Sell','Rent') NOT NULL,
  `fk_proptype` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `fk_owner` int(10) NOT NULL,
  `value` varchar(20) NOT NULL,
  `status` enum('Available','Leased','Sold') NOT NULL DEFAULT 'Available',
  `photos` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propowner` (`fk_owner`),
  KEY `fk_proptype` (`fk_proptype`),
  CONSTRAINT `fk_propowner` FOREIGN KEY (`fk_owner`) REFERENCES `ent_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_proptype` FOREIGN KEY (`fk_proptype`) REFERENCES `ent_proptype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ent_propdetail` */

/*Table structure for table `ent_proprecommendation` */

DROP TABLE IF EXISTS `ent_proprecommendation`;

CREATE TABLE `ent_proprecommendation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fk_proprequirement` int(10) NOT NULL,
  `fk_propdetail` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recommendedprop` (`fk_propdetail`),
  KEY `fk_requiredprop` (`fk_proprequirement`),
  CONSTRAINT `fk_recommendedprop` FOREIGN KEY (`fk_propdetail`) REFERENCES `ent_propdetail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_requiredprop` FOREIGN KEY (`fk_proprequirement`) REFERENCES `ent_proprequirement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ent_proprecommendation` */

/*Table structure for table `ent_proprequirement` */

DROP TABLE IF EXISTS `ent_proprequirement`;

CREATE TABLE `ent_proprequirement` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` enum('Buy','Rent') NOT NULL,
  `fk_proptype` int(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `fk_client` int(10) NOT NULL,
  `budget` varchar(20) NOT NULL,
  `status` enum('Pending','Closed') NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `fk_client` (`fk_client`),
  KEY `fk_requiredproptype` (`fk_proptype`),
  CONSTRAINT `fk_client` FOREIGN KEY (`fk_client`) REFERENCES `ent_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_requiredproptype` FOREIGN KEY (`fk_proptype`) REFERENCES `ent_proptype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ent_proprequirement` */

/*Table structure for table `ent_proptype` */

DROP TABLE IF EXISTS `ent_proptype`;

CREATE TABLE `ent_proptype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ent_proptype` */

/*Table structure for table `ent_user` */

DROP TABLE IF EXISTS `ent_user`;

CREATE TABLE `ent_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usrtype` enum('Admin','Property Owner','Client') NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usrname` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ent_user` */

insert  into `ent_user`(`id`,`usrtype`,`fullname`,`username`,`address`,`phone`,`email`,`password`) values (2,'Admin','Oremis Administrator','admin','676-80108, KLF','0716674111','admin@oremis.net','nirpxjWri3BBI'),(3,'Property Owner','Oremis Property Owner','pown','6889','0716674188','pown@oremis.net','ni6cwPZ9sHaXA'),(4,'Client','Oremis Client','clnt','76','0299832898','clnt@oremis.net','nixAfxcFBG0a6');

/*Table structure for table `ent_visitschedule` */

DROP TABLE IF EXISTS `ent_visitschedule`;

CREATE TABLE `ent_visitschedule` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `fk_propdetail` int(10) NOT NULL,
  `fk_client` int(10) NOT NULL,
  `datetime` datetime NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `paymentcode` varchar(20) NOT NULL,
  `status` enum('Pending','Verified','Nullified') NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `fk_visitedprop` (`fk_propdetail`),
  KEY `fk_visitor` (`fk_client`),
  CONSTRAINT `fk_visitedprop` FOREIGN KEY (`fk_propdetail`) REFERENCES `ent_propdetail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_visitor` FOREIGN KEY (`fk_client`) REFERENCES `ent_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ent_visitschedule` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
