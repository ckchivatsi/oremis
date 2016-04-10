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

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','admin0',NULL,'N;'),('Client','client',NULL,'N;'),('PropertyOwner','pown',NULL,'N;');

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

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,'','','N;'),('Client',2,'','','N;'),('CreateProperty',0,'','','N;'),('CreatePropertyType',0,'','','N;'),('CreateRequirement',0,'','','N;'),('CreateSchedule',0,'','','N;'),('CreateUser',0,'','','N;'),('DeleteProperty',0,'','','N;'),('DeletePropertyType',0,'','','N;'),('DeleteRecords',1,'','','N;'),('DeleteRequirement',0,'','','N;'),('DeleteSchedule',0,'','','N;'),('DeleteUser',0,'','','N;'),('FindProperty',1,'','','N;'),('FindRequirements',1,'','','N;'),('ListOwnProperty',0,'','','N;'),('ListOwnRequirement',0,'','','N;'),('ListOwnSchedule',0,'','','N;'),('ListProperty',0,'','','N;'),('ListPropertyTypes',0,'','','N;'),('ListRequirements',0,'','','N;'),('ListSchedules',0,'','','N;'),('ListUsers',0,'','','N;'),('ManageProperty',1,'','','N;'),('ManagePropertyTypes',1,'','','N;'),('ManageRequirements',1,'','','N;'),('ManageSchedules',1,'','','N;'),('ManageUsers',1,'','','N;'),('MyProfile',1,'','','N;'),('MyProperty',1,'','','N;'),('MyRequirements',1,'','','N;'),('MySchedule',1,'','','N;'),('PropertyOwner',2,'','','N;'),('SearchOwnProperty',0,'','','N;'),('SearchOwnRequirement',0,'','','N;'),('SearchOwnSchedule',0,'','','N;'),('SearchProperty',0,'','','N;'),('SearchPropertyType',0,'','','N;'),('SearchRequirement',0,'','','N;'),('SearchSchedule',0,'','','N;'),('SearchUser',0,'','','N;'),('UpdateOwnProfile',0,'','','N;'),('UpdateOwnProperty',0,'','','N;'),('UpdateOwnRequirement',0,'','','N;'),('UpdateOwnSchedule',0,'','','N;'),('UpdateProperty',0,'','','N;'),('UpdatePropertyType',0,'','','N;'),('UpdateRequirement',0,'','','N;'),('UpdateSchedule',0,'','','N;'),('UpdateUser',0,'','','N;'),('ViewOwnProfile',0,'','','N;'),('ViewOwnProperty',0,'','','N;'),('ViewOwnRequirement',0,'','','N;'),('ViewOwnSchedule',0,'','','N;'),('ViewProperty',0,'','','N;'),('ViewPropertyType',0,'','','N;'),('ViewRequirement',0,'','','N;'),('ViewSchedule',0,'','','N;'),('ViewUser',0,'','','N;');

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

insert  into `authitemchild`(`parent`,`child`) values ('Admin','Client'),('MyProperty','CreateProperty'),('ManagePropertyTypes','CreatePropertyType'),('MyRequirements','CreateRequirement'),('MySchedule','CreateSchedule'),('ManageUsers','CreateUser'),('DeleteRecords','DeleteProperty'),('DeleteRecords','DeletePropertyType'),('ManagePropertyTypes','DeletePropertyType'),('Admin','DeleteRecords'),('DeleteRecords','DeleteRequirement'),('DeleteRecords','DeleteSchedule'),('DeleteRecords','DeleteUser'),('Client','FindProperty'),('ManageProperty','FindProperty'),('ManageRequirements','FindRequirements'),('PropertyOwner','FindRequirements'),('MyProperty','ListOwnProperty'),('MyRequirements','ListOwnRequirement'),('MySchedule','ListOwnSchedule'),('FindProperty','ListProperty'),('ListOwnProperty','ListProperty'),('ManagePropertyTypes','ListPropertyTypes'),('FindRequirements','ListRequirements'),('ListOwnRequirement','ListRequirements'),('ListOwnSchedule','ListSchedules'),('ManageSchedules','ListSchedules'),('ManageUsers','ListUsers'),('Admin','ManageProperty'),('Admin','ManagePropertyTypes'),('Admin','ManageRequirements'),('Admin','ManageSchedules'),('Admin','ManageUsers'),('Client','MyProfile'),('PropertyOwner','MyProfile'),('ManageProperty','MyProperty'),('PropertyOwner','MyProperty'),('Client','MyRequirements'),('ManageRequirements','MyRequirements'),('Client','MySchedule'),('ManageSchedules','MySchedule'),('Admin','PropertyOwner'),('MyProperty','SearchOwnProperty'),('MyRequirements','SearchOwnRequirement'),('MySchedule','SearchOwnSchedule'),('FindProperty','SearchProperty'),('SearchOwnProperty','SearchProperty'),('ManagePropertyTypes','SearchPropertyType'),('FindRequirements','SearchRequirement'),('SearchOwnRequirement','SearchRequirement'),('ManageSchedules','SearchSchedule'),('SearchOwnSchedule','SearchSchedule'),('ManageUsers','SearchUser'),('MyProfile','UpdateOwnProfile'),('MyProperty','UpdateOwnProperty'),('MyRequirements','UpdateOwnRequirement'),('MySchedule','UpdateOwnSchedule'),('ManageProperty','UpdateProperty'),('UpdateOwnProperty','UpdateProperty'),('ManagePropertyTypes','UpdatePropertyType'),('ManageRequirements','UpdateRequirement'),('UpdateOwnRequirement','UpdateRequirement'),('ManageSchedules','UpdateSchedule'),('UpdateOwnSchedule','UpdateSchedule'),('ManageUsers','UpdateUser'),('UpdateOwnProfile','UpdateUser'),('MyProfile','ViewOwnProfile'),('MyProperty','ViewOwnProperty'),('MyRequirements','ViewOwnRequirement'),('MySchedule','ViewOwnSchedule'),('FindProperty','ViewProperty'),('ViewOwnProperty','ViewProperty'),('ManagePropertyTypes','ViewPropertyType'),('FindRequirements','ViewRequirement'),('ViewOwnRequirement','ViewRequirement'),('ManageSchedules','ViewSchedule'),('ViewOwnSchedule','ViewSchedule'),('ManageUsers','ViewUser'),('ViewOwnProfile','ViewUser');

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
  `dateposted` datetime NOT NULL,
  `status` enum('Available','Leased','Sold') NOT NULL DEFAULT 'Available',
  `photos` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propowner` (`fk_owner`),
  KEY `fk_proptype` (`fk_proptype`),
  CONSTRAINT `fk_propowner` FOREIGN KEY (`fk_owner`) REFERENCES `ent_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_proptype` FOREIGN KEY (`fk_proptype`) REFERENCES `ent_proptype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ent_propdetail` */

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
  `dateposted` datetime NOT NULL,
  `status` enum('Pending','Closed') NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`),
  KEY `fk_client` (`fk_client`),
  KEY `fk_requiredproptype` (`fk_proptype`),
  CONSTRAINT `fk_client` FOREIGN KEY (`fk_client`) REFERENCES `ent_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_requiredproptype` FOREIGN KEY (`fk_proptype`) REFERENCES `ent_proptype` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ent_proprequirement` */

insert  into `ent_proprequirement`(`id`,`category`,`fk_proptype`,`location`,`description`,`fk_client`,`budget`,`dateposted`,`status`) values (1,'Rent',1,'Mombasa','bla bla bla bla',2,'20Million','2016-04-08 15:31:14','Pending');

/*Table structure for table `ent_proptype` */

DROP TABLE IF EXISTS `ent_proptype`;

CREATE TABLE `ent_proptype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ent_proptype` */

insert  into `ent_proptype`(`id`,`name`) values (1,'Flat');

/*Table structure for table `ent_user` */

DROP TABLE IF EXISTS `ent_user`;

CREATE TABLE `ent_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usrtype` enum('Admin','PropertyOwner','Client') NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `regdate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usrname` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ent_user` */

insert  into `ent_user`(`id`,`usrtype`,`fullname`,`username`,`address`,`phone`,`email`,`password`,`regdate`) values (1,'Admin','Oremis Client','admin0','676-80108, KLF','0299832898','asa@ads','nizjiRPTnADdE','2016-03-30 21:24:27'),(2,'Client','Oremis Client','client','6889','0716674111','scs@ks','nizjiRPTnADdE','2016-03-31 15:34:21'),(3,'PropertyOwner','Oremis Property Owner','pown','676-80108, KLF','0299832898','jnhas@knmsd','nizjiRPTnADdE','2016-03-31 16:34:28');

/*Table structure for table `ent_visitschedule` */

DROP TABLE IF EXISTS `ent_visitschedule`;

CREATE TABLE `ent_visitschedule` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `fk_propdetail` int(10) NOT NULL,
  `fk_client` int(10) NOT NULL,
  `datetime` datetime NOT NULL,
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
