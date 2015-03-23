CREATE DATABASE  IF NOT EXISTS `coach_wrdp1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `coach_wrdp1`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: coach_wrdp1
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `wm_webinars_lists`
--

DROP TABLE IF EXISTS `wm_webinars_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wm_webinars_lists` (
  `ListID` int(11) NOT NULL AUTO_INCREMENT,
  `ListText` text,
  `ListIcon` text,
  `Visibility` int(11) DEFAULT NULL,
  `TemplateID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ListID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wm_webinars_lists`
--

LOCK TABLES `wm_webinars_lists` WRITE;
/*!40000 ALTER TABLE `wm_webinars_lists` DISABLE KEYS */;
INSERT INTO `wm_webinars_lists` VALUES (1,'You\'ll discover a totally unique way to get incredible results for your clients... even though you\'ll probably be working less than ever on that part of your business.','thumbnails/temporary/20140714065951img_bullet4.png',1,2),(2,'You\'ll discover how to finally get paid what you\'re worth... without having to worry about price being an issue.','thumbnails/temporary/20140714070006img_bullet4.png',1,2),(3,'You\'ll discover a unique four-step formula for attracting customers that allows you to only attract motivated prospects who know the value of what you\'re offering, and are predisposed to trust you.','images/img_bullet4.png',1,2),(4,'You\'ll discover why it\'s often more profitable to do the exact polar opposite of what everyone else is doing, especially in Internet Marketing.','images/img_bullet4.png',1,2),(5,'Test1','',1,2),(6,'Ut a ligula vitae ante vulputate consectetur quis eu urna.','images/no1.png',1,3),(7,'Test3','images/no2.png',1,3),(8,'Test4','',1,3),(9,'How one simple tweak to your headlines can improve conversions by 50%','images/check.png',1,4),(10,'The ONLY button text you should be using for your order buttons','images/check.png',1,4),(11,'The easiest way to create all your marketing pages in minutes.','images/check.png',1,4),(12,'Lorem ipsum dolor sit amet, consectetur adipiscing elit.','images/check.png',1,5),(13,'Aenean eget purus egestas, vulputate erat imperdiet.','images/check.png',1,5),(14,'Sed iaculis sem eu facilisis malesuada.','images/check.png',1,5),(15,'Ut a ligula vitae ante vulputate consectetur quis eu urna.','images/check.png',1,5),(16,'How to carefully set up your profiles across all social media platforms so  you look professional and stand out from the crowd','images/check.png',1,6),(17,'How to find out what your customers really want and give it to them so you increase your sales','images/check.png',1,6),(18,'How to engage and enamour your fans so they always buy from you and tell their friends to do the same','images/check.png',1,6),(19,'And, if you\'ve never used social media for marketing purposes, why it\'s the only place you should be.','images/check.png',1,6),(20,'JemTest\nJeremiah\nlachica','thumbnails/temporary/20140721065416check (1).png',0,6);
/*!40000 ALTER TABLE `wm_webinars_lists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-20 23:46:39
