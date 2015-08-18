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
-- Table structure for table `symptons_table`
--

DROP TABLE IF EXISTS `symptons_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `symptons_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `HCId` varchar(20) NOT NULL,
  `symptom1` text,
  `symptom2` text,
  `symptom3` text,
  `symptom4` text,
  `symptom5` text,
  `symptom6` text,
  `symptom7` text,
  `date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptons_table`
--

LOCK TABLES `symptons_table` WRITE;
/*!40000 ALTER TABLE `symptons_table` DISABLE KEYS */;
INSERT INTO `symptons_table` VALUES (2,'GE10001','normales','ascddscsc','csdcsdc','vvfgbf','dwqdqw','xas asd asd asd as asd a','dscs sdfsfd sdfsjkdf skjdnf ksjdnfk sndkfjn ksdjsd','2015-08-18 10:50:36',0),(3,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-18 14:20:45',0),(4,'GE10002',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-08-18 14:22:09',0);
/*!40000 ALTER TABLE `symptons_table` ENABLE KEYS */;
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
