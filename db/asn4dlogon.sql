/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.13-MariaDB : Database - asn4dlogon
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`asn4dlogon` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `asn4dlogon`;

/*Table structure for table `asn` */

DROP TABLE IF EXISTS `asn`;

CREATE TABLE `asn` (
  `Id` text COLLATE utf8_unicode_ci,
  `FromName` text COLLATE utf8_unicode_ci,
  `ToName` text COLLATE utf8_unicode_ci,
  `CustomerName` text COLLATE utf8_unicode_ci,
  `ShipMode` text COLLATE utf8_unicode_ci,
  `Destination` text COLLATE utf8_unicode_ci,
  `XFTYDate` text COLLATE utf8_unicode_ci,
  `HandoverDate` text COLLATE utf8_unicode_ci,
  `Division` text COLLATE utf8_unicode_ci,
  `InvoiceNumber` text COLLATE utf8_unicode_ci,
  `HMSPONumber_RelationalKey` text COLLATE utf8_unicode_ci,
  `StyleNumber` text COLLATE utf8_unicode_ci,
  `Container` text COLLATE utf8_unicode_ci,
  `Dimention` text COLLATE utf8_unicode_ci,
  `NW` text COLLATE utf8_unicode_ci,
  `GW` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asn` */

insert  into `asn`(`Id`,`FromName`,`ToName`,`CustomerName`,`ShipMode`,`Destination`,`XFTYDate`,`HandoverDate`,`Division`,`InvoiceNumber`,`HMSPONumber_RelationalKey`,`StyleNumber`,`Container`,`Dimention`,`NW`,`GW`) values 
('129329','Ningbo Brother','HMS PRODUCTIONS LLC','Nordstrom Rack Plus','SEA','LDP at LA','11/08/2017','11/29/2017','07-T`s','324','129329','NR32498W','423','23','4','2'),
('129027','Haoning','HMS PRODUCTIONS LLC','Ross','SEA','LDP at LA','11/02/2017','12/19/2017','01-Blouses','53','129027','RP38595','34','34','5','2'),
('109025','Haoning','HMS PRODUCTIONS LLC','Stock','SEA','Sea to LA','11/06/2017','11/08/2017','01-Blouses','sa','109025','SP21400','345','5','3','6'),
('109030','MAX','HMS PRODUCTIONS LLC','Ross Womans','SEA','Sea to LA','11/28/2017','12/20/2017','08-Cable & Gauge Sport','435','109030','RZ20190w','62','3445','5','2');

/*Table structure for table `asnitems` */

DROP TABLE IF EXISTS `asnitems`;

CREATE TABLE `asnitems` (
  `Id` text COLLATE utf8_unicode_ci,
  `HMSPONumber_RelationalKey` text COLLATE utf8_unicode_ci,
  `CTNNo` text COLLATE utf8_unicode_ci,
  `NumberofCTNs` text COLLATE utf8_unicode_ci,
  `Color` text COLLATE utf8_unicode_ci,
  `Size1Label` text COLLATE utf8_unicode_ci,
  `Size2Label` text COLLATE utf8_unicode_ci,
  `Size3Label` text COLLATE utf8_unicode_ci,
  `Size4Label` text COLLATE utf8_unicode_ci,
  `Size5Label` text COLLATE utf8_unicode_ci,
  `Size6Label` text COLLATE utf8_unicode_ci,
  `Size7Label` text COLLATE utf8_unicode_ci,
  `Size8Label` text COLLATE utf8_unicode_ci,
  `Size9Label` text COLLATE utf8_unicode_ci,
  `Size10Label` text COLLATE utf8_unicode_ci,
  `Size1Qty` text COLLATE utf8_unicode_ci,
  `Size2Qty` text COLLATE utf8_unicode_ci,
  `Size3Qty` text COLLATE utf8_unicode_ci,
  `Size4Qty` text COLLATE utf8_unicode_ci,
  `Size5Qty` text COLLATE utf8_unicode_ci,
  `Size6Qty` text COLLATE utf8_unicode_ci,
  `Size7Qty` text COLLATE utf8_unicode_ci,
  `Size8Qty` text COLLATE utf8_unicode_ci,
  `Size9Qty` text COLLATE utf8_unicode_ci,
  `Size10Qty` text COLLATE utf8_unicode_ci,
  `Packs` text COLLATE utf8_unicode_ci,
  `CustomerPO` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `asnitems` */

/*Table structure for table `geonames` */

DROP TABLE IF EXISTS `geonames`;

CREATE TABLE `geonames` (
  `fcodeName` text COLLATE utf8_unicode_ci,
  `toponymName` text COLLATE utf8_unicode_ci,
  `countrycode` text COLLATE utf8_unicode_ci,
  `fcl` text COLLATE utf8_unicode_ci,
  `fclName` text COLLATE utf8_unicode_ci,
  `name` text COLLATE utf8_unicode_ci,
  `wikipedia` text COLLATE utf8_unicode_ci,
  `fcode` text COLLATE utf8_unicode_ci,
  `geonameId` text COLLATE utf8_unicode_ci,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `division` text COLLATE utf8_unicode_ci,
  `population` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `geonames` */

insert  into `geonames`(`fcodeName`,`toponymName`,`countrycode`,`fcl`,`fclName`,`name`,`wikipedia`,`fcode`,`geonameId`,`lat`,`lng`,`division`,`population`) values 
('capital of a political entity','129027','MX12345W','P','city, village,...','Mexico City',NULL,'PPLC','3530597',19.4285,-99.1277,'01-Blouse','8619;Black'),
('capital of a political entity','109025','PH12345P','P','city, village,...','Manila','','PPLC','1701668',14.6042,120.982,'03-Cupio','2968;Navy'),
('capital of a political entity','109030','PY32432','P','City','NY','','PPLC','2346435',15.32,100.454,'04-Pi','345346');

/*Table structure for table `shiping_advise` */

DROP TABLE IF EXISTS `shiping_advise`;

CREATE TABLE `shiping_advise` (
  `from` text COLLATE utf8_unicode_ci,
  `to` text COLLATE utf8_unicode_ci,
  `customer_name` text COLLATE utf8_unicode_ci,
  `ship_mode` text COLLATE utf8_unicode_ci,
  `destination` text COLLATE utf8_unicode_ci,
  `x_fty_date` date DEFAULT NULL,
  `handover_date` date DEFAULT NULL,
  `division_code` text COLLATE utf8_unicode_ci,
  `invoice` text COLLATE utf8_unicode_ci,
  `hms_po` text COLLATE utf8_unicode_ci,
  `style` text COLLATE utf8_unicode_ci,
  `container_air_bill` text COLLATE utf8_unicode_ci,
  `dimention` text COLLATE utf8_unicode_ci,
  `n_w` text COLLATE utf8_unicode_ci,
  `g_w` text COLLATE utf8_unicode_ci,
  `size_range` text COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shiping_advise` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `password` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`username`,`password`) values 
('user1','user1'),
('test','test');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
