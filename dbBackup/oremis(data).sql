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

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('admin','adminD',NULL,'N;'),('author','authorB',NULL,'N;'),('editor','editorC',NULL,'N;'),('reader','readerA',NULL,'N;');

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('admin',2,'',NULL,'N;'),('author',2,'',NULL,'N;'),('createPost',0,'create a post',NULL,'N;'),('deletePost',0,'delete a post',NULL,'N;'),('editor',2,'',NULL,'N;'),('reader',2,'',NULL,'N;'),('readPost',0,'read a post',NULL,'N;'),('updateOwnPost',1,'update a post by author himself','return Yii::app()->user->id==$params[\"post\"]->authID;','N;'),('updatePost',0,'update a post',NULL,'N;');

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('admin','author'),('author','createPost'),('admin','deletePost'),('admin','editor'),('author','reader'),('editor','reader'),('reader','readPost'),('author','updateOwnPost'),('editor','updatePost'),('updateOwnPost','updatePost');

/*Data for the table `ent_propdetail` */

/*Data for the table `ent_proprecommendation` */

/*Data for the table `ent_proprequirement` */

/*Data for the table `ent_proptype` */

/*Data for the table `ent_user` */

insert  into `ent_user`(`id`,`usrtype`,`fullname`,`username`,`address`,`phone`,`email`,`password`) values (2,'Admin','Oremis Administrator','admin','676-80108, KLF','0716674111','admin@oremis.net','nirpxjWri3BBI'),(3,'Property Owner','Oremis Property Owner','pown','6889','0716674188','pown@oremis.net','ni6cwPZ9sHaXA'),(4,'Client','Oremis Client','clnt','76','0299832898','clnt@oremis.net','nixAfxcFBG0a6');

/*Data for the table `ent_visitschedule` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
