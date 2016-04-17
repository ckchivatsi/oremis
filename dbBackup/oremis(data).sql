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

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','admin0',NULL,'N;'),('Client','client',NULL,'N;'),('Client','clnt',NULL,'N;'),('Client','gclient',NULL,'N;'),('PropertyOwner','gpown',NULL,'N;'),('PropertyOwner','pown',NULL,'N;');

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,'','','N;'),('Client',2,'','','N;'),('CreateProperty',0,'','','N;'),('CreatePropertyType',0,'','','N;'),('CreateRequirement',0,'','','N;'),('CreateSchedule',0,'','','N;'),('CreateUser',0,'','','N;'),('DeleteProperty',0,'','','N;'),('DeletePropertyType',0,'','','N;'),('DeleteRecords',1,'','','N;'),('DeleteRequirement',0,'','','N;'),('DeleteSchedule',0,'','','N;'),('DeleteUser',0,'','','N;'),('FindProperty',1,'','','N;'),('FindRequirements',1,'','','N;'),('ListProperty',0,'','','N;'),('ListPropertyTypes',0,'','','N;'),('ListRequirements',0,'','','N;'),('ListSchedules',0,'','','N;'),('ListUsers',0,'','','N;'),('ManageProperty',1,'','','N;'),('ManagePropertyTypes',1,'','','N;'),('ManageRequirements',1,'','','N;'),('ManageSchedules',1,'','','N;'),('ManageUsers',1,'','','N;'),('MyProfile',1,'','','N;'),('MyProperty',1,'','','N;'),('MyRequirements',1,'','','N;'),('MySchedule',1,'','','N;'),('PropertyOwner',2,'','','N;'),('SearchProperty',0,'','','N;'),('SearchPropertyType',0,'','','N;'),('SearchRequirement',0,'','','N;'),('SearchSchedule',0,'','','N;'),('SearchUser',0,'','','N;'),('UpdateOwnProfile',0,'','','N;'),('UpdateOwnProperty',0,'','','N;'),('UpdateOwnRequirement',0,'','','N;'),('UpdateOwnSchedule',0,'','','N;'),('UpdateProperty',0,'','','N;'),('UpdatePropertyType',0,'','','N;'),('UpdateRequirement',0,'','','N;'),('UpdateSchedule',0,'','','N;'),('UpdateUser',0,'','','N;'),('ViewOwnProfile',0,'','','N;'),('ViewOwnProperty',0,'','','N;'),('ViewOwnRequirement',0,'','','N;'),('ViewOwnSchedule',0,'','','N;'),('ViewProperty',0,'','','N;'),('ViewPropertyType',0,'','','N;'),('ViewRequirement',0,'','','N;'),('ViewSchedule',0,'','','N;'),('ViewUser',0,'','','N;');

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('Admin','Client'),('MyProperty','CreateProperty'),('ManagePropertyTypes','CreatePropertyType'),('MyRequirements','CreateRequirement'),('MySchedule','CreateSchedule'),('ManageUsers','CreateUser'),('DeleteRecords','DeleteProperty'),('DeleteRecords','DeletePropertyType'),('Admin','DeleteRecords'),('DeleteRecords','DeleteRequirement'),('DeleteRecords','DeleteSchedule'),('DeleteRecords','DeleteUser'),('Client','FindProperty'),('ManageProperty','FindProperty'),('ManageRequirements','FindRequirements'),('PropertyOwner','FindRequirements'),('MyProperty','ListProperty'),('ManagePropertyTypes','ListPropertyTypes'),('MyRequirements','ListRequirements'),('MySchedule','ListSchedules'),('ManageUsers','ListUsers'),('Admin','ManageProperty'),('Admin','ManagePropertyTypes'),('Admin','ManageRequirements'),('Admin','ManageSchedules'),('Admin','ManageUsers'),('Client','MyProfile'),('PropertyOwner','MyProfile'),('ManageProperty','MyProperty'),('PropertyOwner','MyProperty'),('Client','MyRequirements'),('ManageRequirements','MyRequirements'),('Client','MySchedule'),('ManageSchedules','MySchedule'),('Admin','PropertyOwner'),('FindProperty','SearchProperty'),('ManagePropertyTypes','SearchPropertyType'),('FindRequirements','SearchRequirement'),('ManageSchedules','SearchSchedule'),('ManageUsers','SearchUser'),('MyProfile','UpdateOwnProfile'),('MyProperty','UpdateOwnProperty'),('MyRequirements','UpdateOwnRequirement'),('MySchedule','UpdateOwnSchedule'),('ManageProperty','UpdateProperty'),('UpdateOwnProperty','UpdateProperty'),('ManagePropertyTypes','UpdatePropertyType'),('ManageRequirements','UpdateRequirement'),('UpdateOwnRequirement','UpdateRequirement'),('ManageSchedules','UpdateSchedule'),('UpdateOwnSchedule','UpdateSchedule'),('ManageUsers','UpdateUser'),('UpdateOwnProfile','UpdateUser'),('MyProfile','ViewOwnProfile'),('MyProperty','ViewOwnProperty'),('MyRequirements','ViewOwnRequirement'),('MySchedule','ViewOwnSchedule'),('FindProperty','ViewProperty'),('ViewOwnProperty','ViewProperty'),('ManagePropertyTypes','ViewPropertyType'),('FindRequirements','ViewRequirement'),('ViewOwnRequirement','ViewRequirement'),('ManageSchedules','ViewSchedule'),('ViewOwnSchedule','ViewSchedule'),('ManageUsers','ViewUser'),('ViewOwnProfile','ViewUser');

/*Data for the table `ent_location` */

insert  into `ent_location`(`id`,`name`) values (1,'Mombasa (County)'),(2,'Kwale'),(3,'Kilifi'),(4,'Tana River'),(5,'Lamu'),(6,'Taita-Taveta'),(7,'Garissa'),(8,'Wajir'),(9,'Mandera'),(10,'Marsabit'),(11,'Isiolo'),(12,'Meru'),(13,'Tharaka-Nithi'),(14,'Embu'),(15,'Kitui'),(16,'Machakos'),(17,'Makueni'),(18,'Nyandarua'),(19,'Nyeri'),(20,'Kirinyaga'),(21,'Murang\'a'),(22,'Kiambu'),(23,'Turkana'),(24,'West Pokot'),(25,'Samburu'),(26,'Trans-Nzoia'),(27,'Uasin Gishu'),(28,'Elgeyo-Marakwet'),(29,'Nandi'),(30,'Baringo'),(31,'Laikipia'),(32,'Nakuru'),(33,'Narok'),(34,'Kajiado'),(35,'Kericho'),(36,'Bomet'),(37,'Kakamega'),(38,'Vihiga'),(39,'Bungoma'),(40,'Busia'),(41,'Siaya'),(42,'Kisumu'),(43,'Homa Bay'),(44,'Migori'),(45,'Kisii'),(46,'Nyamira'),(47,'Nairobi (County)');

/*Data for the table `ent_propdetail` */

insert  into `ent_propdetail`(`id`,`category`,`fk_proptype`,`name`,`location`,`description`,`fk_owner`,`value`,`dateposted`,`status`,`photos`) values (1,'Sell',1,'Homechoice','Kilifi','very tall building found in a serene environment',3,'10M','2016-04-12 21:52:50','Available',''),(2,'Rent',1,'tttt','Garissa','geggegge',6,'25000','2016-04-14 14:56:09','Available','3500-tttt'),(5,'Rent',1,'Tsunami','Kisumu','Awesome place to be',6,'23M','2016-04-15 17:58:38','Available','3201-ppic.jpg'),(6,'Sell',1,'Kilimanjaro','Kirinyaga','Cool n quite',3,'11M','2016-04-15 18:12:25','Available','3201-ppic.jpg'),(7,'Sell',1,'jbnk','Kwale','kj nk',3,'67','2016-04-15 22:25:23','Available','3027-jbnk.jpg'),(8,'Sell',1,'ehzd','Baringo','sdc',3,'32','2016-04-15 22:27:32','Available','');

/*Data for the table `ent_proprequirement` */

insert  into `ent_proprequirement`(`id`,`category`,`fk_proptype`,`location`,`description`,`fk_client`,`budget`,`dateposted`,`status`) values (1,'Rent',1,'Mombasa (County)','bla bla bla bla',2,'20Million','2016-04-08 15:31:14','Pending'),(2,'Rent',1,'Kilifi','3 bedroom per floor',4,'60M','2016-04-11 10:50:57','Pending');

/*Data for the table `ent_proptype` */

insert  into `ent_proptype`(`id`,`name`) values (1,'Flat');

/*Data for the table `ent_user` */

insert  into `ent_user`(`id`,`usrtype`,`fullname`,`username`,`address`,`phone`,`email`,`password`,`regdate`) values (1,'Admin','Oremis Client','admin0','676-80108, KLF','0299832898','asa@ads','nizjiRPTnADdE','2016-03-30 21:24:27'),(2,'Client','Oremis Client','client','6889','0716674111','scs@ks','nizjiRPTnADdE','2016-03-31 15:34:21'),(3,'PropertyOwner','Oremis Property Owner','pown','676-80108, KLF','0299832898','jnhas@knmsd','nizjiRPTnADdE','2016-03-31 16:34:28'),(4,'Client','Oremis Client','clnt','676-80108, KLF','0299832899','jknjk@fc','nizjiRPTnADdE','2016-04-10 14:36:46'),(5,'Client','grace gicheru','gclient','2344','0713060941','gracegicheru57@gmail.com','niFSRffUffPdQ','2016-04-14 14:51:25'),(6,'PropertyOwner','grace gicheru','gpown','2344','0713060941','gracecielogicheru@ymail.com','niFSRffUffPdQ','2016-04-14 14:53:45');

/*Data for the table `ent_visitschedule` */

insert  into `ent_visitschedule`(`id`,`fk_propdetail`,`fk_client`,`datetime`,`paymentcode`,`status`) values (1,1,4,'2016-05-18 11:59:42','XCCVDSK','Nullified'),(2,1,2,'2016-06-01 12:00:25','23563266342','Verified'),(3,2,4,'2016-04-17 17:00:00','DZCSDNIK','Verified'),(4,2,5,'2016-04-22 08:00:00','SDFJISJIFS','Closed'),(5,1,5,'2016-04-30 15:00:00','424WFWEK','Pending');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
