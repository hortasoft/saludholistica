-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: saludholisticadb
-- ------------------------------------------------------
-- Server version	5.6.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `systems_table`
--

DROP TABLE IF EXISTS `systems_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `systems_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `HCId` varchar(20) NOT NULL,
  `sys1` text,
  `sys2` text,
  `sys3` text,
  `sys4` text,
  `sys5` text,
  `sys6` text,
  `sys7` text,
  `sys8` text,
  `sys9` text,
  `sys10` text,
  `sys11` text,
  `sys12` text,
  `date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `systems_table`
--

LOCK TABLES `systems_table` WRITE;
/*!40000 ALTER TABLE `systems_table` DISABLE KEYS */;
INSERT INTO `systems_table` VALUES (1,'GE10001','asd','negros','asdasc','ghng','wefwef','xcvxcvx','qwqeweqw','sd fsdf sdf sd\n- sdsdcs\n-c csdcscs','ascakscnacjksdcsd','sdcsdc','sdcsdc','sdcsdcsdcsd','2015-08-18 10:24:43',0),(2,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-18 14:20:45',0),(3,'GE10002',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-18 14:22:09',0),(4,'GE10003',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-18 17:22:23',0),(5,'GE10004','sddsc\ndsvcdfvdf\ndvfvdf\ndfvdfv\ndfvdf\nvdf\nv\ndf','','','','sdvfdvf','','','','dfvdfvdscd','sd cjsdhbcjs cjd','','','2015-08-18 18:33:12',0),(6,'GE10005',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-18 18:45:40',0),(7,'GE10006',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-31 05:55:57',0),(8,'GE10008',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-04 05:20:17',0);
/*!40000 ALTER TABLE `systems_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-14  8:14:29