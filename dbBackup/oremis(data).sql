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

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','admin',NULL,'N;'),('Client','client1',NULL,'N;'),('Client','client2',NULL,'N;'),('PropertyOwner','powner1',NULL,'N;'),('PropertyOwner','powner2',NULL,'N;');

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,'','','N;'),('Client',2,'','','N;'),('CreateProperty',0,'','','N;'),('CreatePropertyType',0,'','','N;'),('CreateRequirement',0,'','','N;'),('CreateSchedule',0,'','','N;'),('CreateUser',0,'','','N;'),('DeleteProperty',0,'','','N;'),('DeletePropertyType',0,'','','N;'),('DeleteRecords',1,'','','N;'),('DeleteRequirement',0,'','','N;'),('DeleteSchedule',0,'','','N;'),('DeleteUser',0,'','','N;'),('FindProperty',1,'','','N;'),('FindRequirements',1,'','','N;'),('ListProperty',0,'','','N;'),('ListPropertyTypes',0,'','','N;'),('ListRequirements',0,'','','N;'),('ListSchedules',0,'','','N;'),('ListUsers',0,'','','N;'),('ManageProperty',1,'','','N;'),('ManagePropertyTypes',1,'','','N;'),('ManageRequirements',1,'','','N;'),('ManageSchedules',1,'','','N;'),('ManageUsers',1,'','','N;'),('MyProfile',1,'','','N;'),('MyProperty',1,'','','N;'),('MyRequirements',1,'','','N;'),('MySchedule',1,'','','N;'),('PropertyOwner',2,'','','N;'),('SearchProperty',0,'','','N;'),('SearchPropertyType',0,'','','N;'),('SearchRequirement',0,'','','N;'),('SearchSchedule',0,'','','N;'),('SearchUser',0,'','','N;'),('UpdateOwnProfile',0,'','','N;'),('UpdateOwnProperty',0,'','','N;'),('UpdateOwnRequirement',0,'','','N;'),('UpdateOwnSchedule',0,'','','N;'),('UpdateProperty',0,'','','N;'),('UpdatePropertyType',0,'','','N;'),('UpdateRequirement',0,'','','N;'),('UpdateSchedule',0,'','','N;'),('UpdateUser',0,'','','N;'),('ViewOwnProfile',0,'','','N;'),('ViewOwnProperty',0,'','','N;'),('ViewOwnRequirement',0,'','','N;'),('ViewOwnSchedule',0,'','','N;'),('ViewProperty',0,'','','N;'),('ViewPropertyType',0,'','','N;'),('ViewRequirement',0,'','','N;'),('ViewSchedule',0,'','','N;'),('ViewUser',0,'','','N;');

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('Admin','Client'),('MyProperty','CreateProperty'),('ManagePropertyTypes','CreatePropertyType'),('MyRequirements','CreateRequirement'),('MySchedule','CreateSchedule'),('ManageUsers','CreateUser'),('DeleteRecords','DeleteProperty'),('DeleteRecords','DeletePropertyType'),('Admin','DeleteRecords'),('DeleteRecords','DeleteRequirement'),('DeleteRecords','DeleteSchedule'),('DeleteRecords','DeleteUser'),('Client','FindProperty'),('ManageProperty','FindProperty'),('ManageRequirements','FindRequirements'),('PropertyOwner','FindRequirements'),('MyProperty','ListProperty'),('ManagePropertyTypes','ListPropertyTypes'),('MyRequirements','ListRequirements'),('MySchedule','ListSchedules'),('ManageUsers','ListUsers'),('Admin','ManageProperty'),('Admin','ManagePropertyTypes'),('Admin','ManageRequirements'),('Admin','ManageSchedules'),('Admin','ManageUsers'),('Client','MyProfile'),('PropertyOwner','MyProfile'),('ManageProperty','MyProperty'),('PropertyOwner','MyProperty'),('Client','MyRequirements'),('ManageRequirements','MyRequirements'),('Client','MySchedule'),('ManageSchedules','MySchedule'),('Admin','PropertyOwner'),('FindProperty','SearchProperty'),('ManagePropertyTypes','SearchPropertyType'),('FindRequirements','SearchRequirement'),('ManageSchedules','SearchSchedule'),('ManageUsers','SearchUser'),('MyProfile','UpdateOwnProfile'),('MyProperty','UpdateOwnProperty'),('MyRequirements','UpdateOwnRequirement'),('MySchedule','UpdateOwnSchedule'),('ManageProperty','UpdateProperty'),('UpdateOwnProperty','UpdateProperty'),('ManagePropertyTypes','UpdatePropertyType'),('ManageRequirements','UpdateRequirement'),('UpdateOwnRequirement','UpdateRequirement'),('ManageSchedules','UpdateSchedule'),('UpdateOwnSchedule','UpdateSchedule'),('ManageUsers','UpdateUser'),('UpdateOwnProfile','UpdateUser'),('MyProfile','ViewOwnProfile'),('MyProperty','ViewOwnProperty'),('MyRequirements','ViewOwnRequirement'),('MySchedule','ViewOwnSchedule'),('FindProperty','ViewProperty'),('ViewOwnProperty','ViewProperty'),('ManagePropertyTypes','ViewPropertyType'),('FindRequirements','ViewRequirement'),('ViewOwnRequirement','ViewRequirement'),('ManageSchedules','ViewSchedule'),('ViewOwnSchedule','ViewSchedule'),('ManageUsers','ViewUser'),('ViewOwnProfile','ViewUser');

/*Data for the table `ent_location` */

insert  into `ent_location`(`id`,`name`) values (30,'Baringo'),(36,'Bomet'),(39,'Bungoma'),(40,'Busia'),(28,'Elgeyo-Marakwet'),(14,'Embu'),(7,'Garissa'),(43,'Homa Bay'),(11,'Isiolo'),(34,'Kajiado'),(37,'Kakamega'),(35,'Kericho'),(22,'Kiambu'),(3,'Kilifi'),(20,'Kirinyaga'),(45,'Kisii'),(42,'Kisumu'),(15,'Kitui'),(2,'Kwale'),(31,'Laikipia'),(5,'Lamu'),(16,'Machakos'),(17,'Makueni'),(9,'Mandera'),(10,'Marsabit'),(12,'Meru'),(44,'Migori'),(1,'Mombasa (County)'),(21,'Murang\'a'),(47,'Nairobi (County)'),(32,'Nakuru'),(29,'Nandi'),(33,'Narok'),(46,'Nyamira'),(18,'Nyandarua'),(19,'Nyeri'),(25,'Samburu'),(41,'Siaya'),(6,'Taita-Taveta'),(4,'Tana River'),(13,'Tharaka-Nithi'),(26,'Trans-Nzoia'),(23,'Turkana'),(27,'Uasin Gishu'),(38,'Vihiga'),(8,'Wajir'),(24,'West Pokot');

/*Data for the table `ent_propdetail` */

insert  into `ent_propdetail`(`id`,`category`,`fk_proptype`,`name`,`location`,`description`,`fk_owner`,`value`,`dateposted`,`status`,`photos`) values (1,'Rent',12,'Red Palace','Kajiado','> A magnificent 4 bedrooms\r\n> Sitting on 1-acre plot with mature garden \r\n> Fully furnished \r\n',3,'500,000','2016-04-24 18:00:57','Available','Red Palace.jpg'),(2,'Sell',13,'The Crib','Kwale','This is a lavish 4 bedroom house well finished and located in a serene environment, a secure neighborhood, with easy access from the Kwale Shopping center ',3,'23 Million','2016-04-24 18:04:08','Available','The Crib.jpg'),(3,'Sell',3,'Home Choice Apartments','Kilifi','A 3 BEDROOM EXECUTIVE APARTMENT + DSQ  (ALL  ENSUITE, very Spacious,   INTERNET, BOREHOLE, GENERATOR, DSTV, SWIMMING POOL, GYM, CLUB HOUSE, Two Car parks , Electric fence, excellent landscaping,   ',3,'100 Million','2016-04-24 18:05:53','Available','Home Choice Apartments.jpg'),(4,'Sell',12,'Eden Palace','Kisumu','4 BEDROOM EXECUTIVE TOWNHOUSE + one Guest Wing+ GARDEN on 0.5 of an ACRE (All Ensuite, Ample Parking for 5 Cars, landscaped Gardens Gated Community',5,'75 Million','2016-04-24 18:08:27','Available','Eden Palace.jpg'),(5,'Rent',11,'Villa de\' Marina','Kericho','5 Bedrooms double story ',5,'200,000','2016-04-24 18:10:53','Available','Villa de\' Marina.jpg'),(6,'Rent',2,'Chisakha Offices','Kitui','Executive offices with AC and ample parking',1,'12 Million','2016-04-24 18:23:38','Available','Chisakha Offices.jpg');

/*Data for the table `ent_proprequirement` */

insert  into `ent_proprequirement`(`id`,`category`,`fk_proptype`,`location`,`description`,`fk_client`,`budget`,`dateposted`,`status`) values (1,'Buy',7,'Kirinyaga','I need a 5acres Plot that is near the road.',4,'5 Million','2016-04-24 18:26:03','Pending'),(2,'Rent',5,'Kirinyaga','Am looking for someone selling a 5-star hotel within the county',4,'50 Million','2016-04-24 18:27:40','Pending'),(3,'Buy',11,'Kilifi','I need a nice villa next to the beach with a swimming pool',2,'75 Million','2016-04-24 18:37:38','Pending');

/*Data for the table `ent_proptype` */

insert  into `ent_proptype`(`id`,`name`) values (3,'Apartment'),(13,'Bungalow'),(10,'Commercial Building'),(6,'Development Site'),(9,'Estate'),(5,'Hotel'),(1,'Industrial'),(8,'Land'),(12,'Mansion'),(2,'Office'),(7,'Plot'),(4,'Retail'),(11,'Villa');

/*Data for the table `ent_user` */

insert  into `ent_user`(`id`,`usrtype`,`fullname`,`username`,`address`,`phone`,`email`,`password`,`regdate`) values (1,'Admin','Oremis Admin','admin','676-80108, KILIFI','0789482389','admin@oremis.net','nirpxjWri3BBI','2016-03-30 21:24:27'),(2,'Client','Test Client One','client1','2431-00100, NAIROBI','0716454111','client1@oremis.net','nidhXF9WSo7Cs','2016-03-31 15:34:21'),(3,'PropertyOwner','Test Powner One','powner1','6736-23108, KISUMU','0719832898','powner1@oremis.net','niD0BfKXyDuLM','2016-03-31 16:34:28'),(4,'Client','Test Client Two','client2','42-80438, NAKURU','0739832899','client2@oremis.net','niAj2IFXJYYSI','2016-04-10 14:36:46'),(5,'PropertyOwner','Test Powner Two','powner2','264-80438, NAKURU','0713060941','powner2@oremis.net','ni2Wg9bgBV0WM','2016-04-14 14:51:25');

/*Data for the table `ent_visitschedule` */

insert  into `ent_visitschedule`(`id`,`fk_propdetail`,`fk_client`,`datetime`,`paymentcode`,`status`) values (1,3,2,'2016-05-10 08:00:00','XYGHRTSD','Pending'),(2,2,2,'2016-05-18 10:00:00','H325JWESd','Pending');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
