/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.13-MariaDB : Database - adisucipto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`adisucipto` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `adisucipto`;

/*Table structure for table `tb_act` */

DROP TABLE IF EXISTS `tb_act`;

CREATE TABLE `tb_act` (
  `id` int(10) NOT NULL,
  `act` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_act` */

insert  into `tb_act`(`id`,`act`) values (100,'service'),(101,'top'),(102,'los'),(201,'top-Active'),(202,'los-Active');

/*Table structure for table `tb_ref` */

DROP TABLE IF EXISTS `tb_ref`;

CREATE TABLE `tb_ref` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `platref` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_ref` */

insert  into `tb_ref`(`id`,`platref`,`qty`,`kode`) values (1,'AB2222JN',12000,'ADS.01'),(2,'AB1214HN',0,'ADS.02'),(3,'AB2222JN',16000,'ADS.03'),(4,'AB2222JN',0,'ADS.04'),(5,'AB2222JN',0,'ADS.05'),(6,'AB2222JN',16000,'ADS.06'),(7,'AB2222JN',16000,'ADS.07'),(8,'AB2222JN',13000,'ADS.08'),(9,'AB2222JN',16000,'ADS.09'),(10,'AB2222JN',0,'ADS.10'),(11,'AB2222JN',0,'ADS.11');

/*Table structure for table `tb_tank` */

DROP TABLE IF EXISTS `tb_tank`;

CREATE TABLE `tb_tank` (
  `id` int(10) NOT NULL,
  `tank` varchar(10) NOT NULL,
  `level` int(10) DEFAULT NULL,
  `pa` int(6) DEFAULT '0',
  `max_level` int(10) DEFAULT NULL,
  `max_pa` int(10) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `sisipan` int(20) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `deadstok` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_tank_fk0` (`status`),
  CONSTRAINT `tb_tank_fk0` FOREIGN KEY (`status`) REFERENCES `tb_act` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_tank` */

insert  into `tb_tank`(`id`,`tank`,`level`,`pa`,`max_level`,`max_pa`,`status`,`sisipan`,`time`,`deadstok`) values (1,'T1',42,24011,1000,61410,201,500,'2017-10-15 10:37:29',4180),(2,'T2',128,45596,2000,62090,101,500,'2017-10-15 10:50:38',3920),(3,'T3',200,58109,200,62230,100,500,'2017-07-30 06:31:48',3320),(4,'T4',108,57942,200,62930,202,500,'2017-10-14 08:05:56',3600),(5,'T5',26,99622,200,106200,101,500,'2017-10-14 13:04:49',3530),(6,'T6',200,0,200,102350,100,500,'2017-07-30 06:31:48',4550),(7,'T7',176,78053,200,101930,102,500,'2017-10-14 13:17:51',1920),(8,'T8',189,97520,200,104050,102,500,'2017-10-13 17:51:53',2180);

/*Table structure for table `tb_topp` */

DROP TABLE IF EXISTS `tb_topp`;

CREATE TABLE `tb_topp` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `ref` int(20) NOT NULL,
  `qty_req` int(20) NOT NULL,
  `tank_asal` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_topp_fk0` (`ref`),
  KEY `tb_topp_fk1` (`tank_asal`),
  CONSTRAINT `tb_topp_ibfk_1` FOREIGN KEY (`tank_asal`) REFERENCES `tb_tank` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `tb_topp` */

insert  into `tb_topp`(`id`,`time`,`ref`,`qty_req`,`tank_asal`) values (1,'2017-10-06 10:59:55',1,3000,2),(2,'2017-10-06 11:00:04',1,800,2),(3,'2017-10-06 11:00:12',1,1800,2),(4,'2017-10-06 11:00:16',1,900,2),(5,'2017-10-06 11:03:04',6,500,4),(6,'2017-10-06 11:06:37',4,450,4),(7,'2017-10-06 11:08:04',7,250,4),(8,'2017-10-06 11:12:08',8,777,4),(9,'2017-10-06 11:22:54',4,780,4),(10,'2017-10-06 11:29:53',2,1000,4),(11,'2017-10-07 07:01:37',5,300,4),(12,'2017-10-07 07:04:01',3,690,4),(13,'2017-10-07 07:26:27',6,900,4),(14,'2017-10-07 07:40:45',5,900,4),(15,'2017-10-07 08:31:27',5,800,4),(16,'2017-10-07 08:36:44',9,80,4),(17,'2017-10-07 08:56:51',6,800,4),(18,'2017-10-07 09:01:19',9,80,4),(19,'2017-10-07 09:05:14',5,899,4),(20,'2017-10-07 09:09:11',5,80,4),(21,'2017-10-07 09:11:51',7,900,4),(22,'2017-10-09 10:40:14',4,80,4),(23,'2017-10-09 10:41:58',2,100,4),(24,'2017-10-09 10:42:57',5,70,4),(25,'2017-10-13 13:03:06',5,280,4),(26,'2017-10-13 13:24:24',7,450,4),(27,'2017-10-13 14:11:37',6,10440,4),(28,'2017-10-13 14:20:22',4,580,8),(29,'2017-10-13 17:34:07',2,530,1),(30,'2017-10-13 17:51:53',5,4860,8),(31,'2017-10-13 19:47:06',3,7000,1),(32,'2017-10-14 00:10:05',3,5500,1),(33,'2017-10-14 07:22:04',9,12500,5),(34,'2017-10-14 08:04:02',7,13300,4),(35,'2017-10-14 08:04:59',6,15230,4),(36,'2017-10-14 08:05:56',9,2070,4),(37,'2017-10-14 08:10:16',6,10380,5),(38,'2017-10-14 08:44:20',9,9030,5),(39,'2017-10-14 11:24:24',7,9050,5),(40,'2017-10-14 11:25:17',3,5920,5),(41,'2017-10-14 11:26:21',6,6200,5),(42,'2017-10-14 12:09:21',3,12120,5),(43,'2017-10-14 12:18:52',6,5010,5),(44,'2017-10-14 13:02:52',7,13960,5),(45,'2017-10-14 13:04:49',9,3000,5),(46,'2017-10-14 13:17:51',9,12230,7),(47,'2017-10-15 07:46:50',6,1400,1),(48,'2017-10-15 07:47:51',9,6500,1),(49,'2017-10-15 10:36:29',3,1900,1),(50,'2017-10-15 10:37:29',7,5000,1),(51,'2017-10-15 10:50:38',9,2400,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
