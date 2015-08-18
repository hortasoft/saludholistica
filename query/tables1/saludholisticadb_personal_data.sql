-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: saludholisticadb
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `personal_data`
--

DROP TABLE IF EXISTS `personal_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` int(11) NOT NULL,
  `documentType` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bornDate` date NOT NULL,
  `bornPlace` varchar(255) NOT NULL,
  `civilState` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `ocupation` varchar(255) DEFAULT NULL,
  `procedencia` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `cellphone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `companyPhone` varchar(255) DEFAULT NULL,
  `eps` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_data`
--

LOCK TABLES `personal_data` WRITE;
/*!40000 ALTER TABLE `personal_data` DISABLE KEYS */;
INSERT INTO `personal_data` VALUES (1,1032366065,1,'Juan Daniel Horta castillo','1986-04-11','Bogota','soltero',0,'ingeniero','sdcdfvdfvsd','calle 123 skdjsdcsdcsdc','234567','1234567890','sjdhcbsj cjsb djcb sjdcb sjb','123456','cb','none','pepe','2015-08-17 17:45:05','0000-00-00 00:00:00'),(2,1070955993,1,'Engrid Burgos','1989-11-12','Villavicencio','soltera',1,'enfermera jefe','colombiana','cale 123 sjkd8998','1234567','3203983976','daniel horta','3123280021','compensar','cristiana','juan horta','2015-08-17 13:05:49','2015-08-17 13:42:03'),(3,123456789,1,'qwebw eubqw bejqbhwjq','1988-12-12','bogota','asdbasjdhba',0,'jsdn ksjcn ksjdcsdcsjk','jsdhcbjsd bhcsh csjbh','jcbsjdcbh sdjhdcbjsbhd','jhbcsdjchbsjhd','hsdcbsjbhcs','jhxbsjdbhcsjbh','cbhdsjcbhsj','jhjbhdjbhd','','','2015-08-18 07:02:32','2015-08-18 07:02:32');
/*!40000 ALTER TABLE `personal_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-18 17:09:30
