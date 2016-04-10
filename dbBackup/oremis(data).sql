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

/*Data for the table `authassignment` */

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','admin0',NULL,'N;'),('Client','client',NULL,'N;'),('PropertyOwner','pown',NULL,'N;');

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,'','','N;'),('Client',2,'','','N;'),('CreateProperty',0,'','','N;'),('CreatePropertyType',0,'','','N;'),('CreateRequirement',0,'','','N;'),('CreateSchedule',0,'','','N;'),('CreateUser',0,'','','N;'),('DeleteProperty',0,'','','N;'),('DeletePropertyType',0,'','','N;'),('DeleteRecords',1,'','','N;'),('DeleteRequirement',0,'','','N;'),('DeleteSchedule',0,'','','N;'),('DeleteUser',0,'','','N;'),('FindProperty',1,'','','N;'),('FindRequirements',1,'','','N;'),('ListOwnProperty',0,'','','N;'),('ListOwnRequirement',0,'','','N;'),('ListOwnSchedule',0,'','','N;'),('ListProperty',0,'','','N;'),('ListPropertyTypes',0,'','','N;'),('ListRequirements',0,'','','N;'),('ListSchedules',0,'','','N;'),('ListUsers',0,'','','N;'),('ManageProperty',1,'','','N;'),('ManagePropertyTypes',1,'','','N;'),('ManageRequirements',1,'','','N;'),('ManageSchedules',1,'','','N;'),('ManageUsers',1,'','','N;'),('MyProfile',1,'','','N;'),('MyProperty',1,'','','N;'),('MyRequirements',1,'','','N;'),('MySchedule',1,'','','N;'),('PropertyOwner',2,'','','N;'),('SearchOwnProperty',0,'','','N;'),('SearchOwnRequirement',0,'','','N;'),('SearchOwnSchedule',0,'','','N;'),('SearchProperty',0,'','','N;'),('SearchPropertyType',0,'','','N;'),('SearchRequirement',0,'','','N;'),('SearchSchedule',0,'','','N;'),('SearchUser',0,'','','N;'),('UpdateOwnProfile',0,'','','N;'),('UpdateOwnProperty',0,'','','N;'),('UpdateOwnRequirement',0,'','','N;'),('UpdateOwnSchedule',0,'','','N;'),('UpdateProperty',0,'','','N;'),('UpdatePropertyType',0,'','','N;'),('UpdateRequirement',0,'','','N;'),('UpdateSchedule',0,'','','N;'),('UpdateUser',0,'','','N;'),('ViewOwnProfile',0,'','','N;'),('ViewOwnProperty',0,'','','N;'),('ViewOwnRequirement',0,'','','N;'),('ViewOwnSchedule',0,'','','N;'),('ViewProperty',0,'','','N;'),('ViewPropertyType',0,'','','N;'),('ViewRequirement',0,'','','N;'),('ViewSchedule',0,'','','N;'),('ViewUser',0,'','','N;');

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('Admin','Client'),('MyProperty','CreateProperty'),('ManagePropertyTypes','CreatePropertyType'),('MyRequirements','CreateRequirement'),('MySchedule','CreateSchedule'),('ManageUsers','CreateUser'),('DeleteRecords','DeleteProperty'),('DeleteRecords','DeletePropertyType'),('ManagePropertyTypes','DeletePropertyType'),('Admin','DeleteRecords'),('DeleteRecords','DeleteRequirement'),('DeleteRecords','DeleteSchedule'),('DeleteRecords','DeleteUser'),('Client','FindProperty'),('ManageProperty','FindProperty'),('ManageRequirements','FindRequirements'),('PropertyOwner','FindRequirements'),('MyProperty','ListOwnProperty'),('MyRequirements','ListOwnRequirement'),('MySchedule','ListOwnSchedule'),('FindProperty','ListProperty'),('ListOwnProperty','ListProperty'),('ManagePropertyTypes','ListPropertyTypes'),('FindRequirements','ListRequirements'),('ListOwnRequirement','ListRequirements'),('ListOwnSchedule','ListSchedules'),('ManageSchedules','ListSchedules'),('ManageUsers','ListUsers'),('Admin','ManageProperty'),('Admin','ManagePropertyTypes'),('Admin','ManageRequirements'),('Admin','ManageSchedules'),('Admin','ManageUsers'),('Client','MyProfile'),('PropertyOwner','MyProfile'),('ManageProperty','MyProperty'),('PropertyOwner','MyProperty'),('Client','MyRequirements'),('ManageRequirements','MyRequirements'),('Client','MySchedule'),('ManageSchedules','MySchedule'),('Admin','PropertyOwner'),('MyProperty','SearchOwnProperty'),('MyRequirements','SearchOwnRequirement'),('MySchedule','SearchOwnSchedule'),('FindProperty','SearchProperty'),('SearchOwnProperty','SearchProperty'),('ManagePropertyTypes','SearchPropertyType'),('FindRequirements','SearchRequirement'),('SearchOwnRequirement','SearchRequirement'),('ManageSchedules','SearchSchedule'),('SearchOwnSchedule','SearchSchedule'),('ManageUsers','SearchUser'),('MyProfile','UpdateOwnProfile'),('MyProperty','UpdateOwnProperty'),('MyRequirements','UpdateOwnRequirement'),('MySchedule','UpdateOwnSchedule'),('ManageProperty','UpdateProperty'),('UpdateOwnProperty','UpdateProperty'),('ManagePropertyTypes','UpdatePropertyType'),('ManageRequirements','UpdateRequirement'),('UpdateOwnRequirement','UpdateRequirement'),('ManageSchedules','UpdateSchedule'),('UpdateOwnSchedule','UpdateSchedule'),('ManageUsers','UpdateUser'),('UpdateOwnProfile','UpdateUser'),('MyProfile','ViewOwnProfile'),('MyProperty','ViewOwnProperty'),('MyRequirements','ViewOwnRequirement'),('MySchedule','ViewOwnSchedule'),('FindProperty','ViewProperty'),('ViewOwnProperty','ViewProperty'),('ManagePropertyTypes','ViewPropertyType'),('FindRequirements','ViewRequirement'),('ViewOwnRequirement','ViewRequirement'),('ManageSchedules','ViewSchedule'),('ViewOwnSchedule','ViewSchedule'),('ManageUsers','ViewUser'),('ViewOwnProfile','ViewUser');

/*Data for the table `ent_propdetail` */

/*Data for the table `ent_proprequirement` */

insert  into `ent_proprequirement`(`id`,`category`,`fk_proptype`,`location`,`description`,`fk_client`,`budget`,`dateposted`,`status`) values (1,'Rent',1,'Mombasa','bla bla bla bla',2,'20Million','2016-04-08 15:31:14','Pending');

/*Data for the table `ent_proptype` */

insert  into `ent_proptype`(`id`,`name`) values (1,'Flat');

/*Data for the table `ent_user` */

insert  into `ent_user`(`id`,`usrtype`,`fullname`,`username`,`address`,`phone`,`email`,`password`,`regdate`) values (1,'Admin','Oremis Client','admin0','676-80108, KLF','0299832898','asa@ads','nizjiRPTnADdE','2016-03-30 21:24:27'),(2,'Client','Oremis Client','client','6889','0716674111','scs@ks','nizjiRPTnADdE','2016-03-31 15:34:21'),(3,'PropertyOwner','Oremis Property Owner','pown','676-80108, KLF','0299832898','jnhas@knmsd','nizjiRPTnADdE','2016-03-31 16:34:28');

/*Data for the table `ent_visitschedule` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
