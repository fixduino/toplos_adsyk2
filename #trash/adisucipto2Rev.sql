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

insert  into `tb_act`(`id`,`act`) values (101,'topping/penyalu'),(102,'lossing/penimbu'),(103,'nothing/mainten'),(201,'active topping'),(202,'active lossing');

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
  `level` int(10) NOT NULL,
  `pa` int(6) NOT NULL DEFAULT '0',
  `max_level` int(10) NOT NULL,
  `max_pa` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `sisipan` int(20) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `deadstok` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_tank_fk0` (`status`),
  CONSTRAINT `tb_tank_fk0` FOREIGN KEY (`status`) REFERENCES `tb_act` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_tank` */

insert  into `tb_tank`(`id`,`tank`,`level`,`pa`,`max_level`,`max_pa`,`status`,`sisipan`,`time`,`deadstok`) values (1,'T1',139,4000,1000,61410,102,500,'2017-09-25 18:54:55',4180),(2,'T2',154,4000,2000,62090,102,500,'2017-10-06 11:00:16',3920),(3,'T3',200,4000,200,62230,101,500,'2017-07-30 06:31:48',3320),(4,'T4',192,4000,200,62930,201,500,'2017-10-09 10:42:57',3600),(5,'T5',200,5000,200,106200,102,500,'2017-07-30 06:31:48',3530),(6,'T6',200,5000,200,102350,102,500,'2017-07-30 06:31:48',4550),(7,'T7',200,7290,200,101930,102,500,'2017-07-30 06:31:48',1920),(8,'T8',200,5320,200,104050,102,500,'2017-07-30 06:31:48',2180);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tb_topp` */

insert  into `tb_topp`(`id`,`time`,`ref`,`qty_req`,`tank_asal`) values (1,'2017-10-06 10:59:55',1,3000,2),(2,'2017-10-06 11:00:04',1,800,2),(3,'2017-10-06 11:00:12',1,1800,2),(4,'2017-10-06 11:00:16',1,900,2),(5,'2017-10-06 11:03:04',6,500,4),(6,'2017-10-06 11:06:37',4,450,4),(7,'2017-10-06 11:08:04',7,250,4),(8,'2017-10-06 11:12:08',8,777,4),(9,'2017-10-06 11:22:54',4,780,4),(10,'2017-10-06 11:29:53',2,1000,4),(11,'2017-10-07 07:01:37',5,300,4),(12,'2017-10-07 07:04:01',3,690,4),(13,'2017-10-07 07:26:27',6,900,4),(14,'2017-10-07 07:40:45',5,900,4),(15,'2017-10-07 08:31:27',5,800,4),(16,'2017-10-07 08:36:44',9,80,4),(17,'2017-10-07 08:56:51',6,800,4),(18,'2017-10-07 09:01:19',9,80,4),(19,'2017-10-07 09:05:14',5,899,4),(20,'2017-10-07 09:09:11',5,80,4),(21,'2017-10-07 09:11:51',7,900,4),(22,'2017-10-09 10:40:14',4,80,4),(23,'2017-10-09 10:41:58',2,100,4),(24,'2017-10-09 10:42:57',5,70,4);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
