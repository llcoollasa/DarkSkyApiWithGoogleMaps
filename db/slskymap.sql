-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: slskymap
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.15.10.1

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
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(100) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `show` bit(1) DEFAULT b'0',
  `response` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Walasmulla',6.150880,80.693710,'\0',NULL),(2,'Katuwana',6.264830,80.688090,'\0',NULL),(3,'Kolonna',6.408050,80.686420,'\0',NULL),(4,'Kotapola',6.281380,80.539240,'\0',NULL),(5,'Pasgoda',6.246390,80.607710,'\0',NULL),(6,'Mulatiyana',6.162080,80.585500,'\0',NULL),(7,'Pitabeddara',6.207070,80.463240,'\0',NULL),(8,'Kolonna',6.408050,80.686420,'\0',NULL),(9,'Yakkalamulla',6.101340,80.359100,'\0',NULL),(10,'Nagoda',6.205280,80.284870,'\0',NULL),(11,'Baddegama',6.178330,80.190020,'\0',NULL),(12,'Niyagama',6.241350,80.262100,'\0',NULL),(13,'Nagoda',6.205280,80.284870,'\0',NULL),(14,'Walallawita',6.380550,80.195870,'\0',NULL),(15,'Kuruvita',6.785980,80.369620,'\0',NULL),(16,'Rathnapura',6.710940,80.375030,'\0',NULL),(17,'Bulathkohupitiya',7.108420,80.337420,'\0',NULL),(18,'Ambagamuwa',7.120140,80.624990,'\0',NULL),(19,'Bandaragama',6.702960,79.968450,'\0',NULL),(20,'Imbulpe',6.697150,80.755430,'\0',NULL);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-30 19:52:33
