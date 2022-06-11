-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: cafe_db
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beverage`
--

DROP TABLE IF EXISTS `beverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beverage` (
  `bid` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(20) NOT NULL,
  `bprice` int NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beverage`
--

LOCK TABLES `beverage` WRITE;
/*!40000 ALTER TABLE `beverage` DISABLE KEYS */;
INSERT INTO `beverage` VALUES (1,'?꾨찓由ъ뭅??,3700,'americano.jpg'),(2,'移댄럹?쇰뼹',4000,'caffelatte.jpg'),(3,'移댄럹紐⑥뭅',4000,'caffemocha.jpg'),(4,'肄쒕뱶釉뚮（',4000,'coldbrew.jpg'),(5,'?쇨렇?덉씠??,4000,'earlgreytea.jpg'),(6,'?멸린?쇰뼹',4000,'strawberrylatte.jpg');
/*!40000 ALTER TABLE `beverage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `uid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('dmsdl7531','1234','ryeeun');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `oid` varchar(30) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `odtime` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`oid`),
  KEY `uid` (`uid`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `members` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES ('20220611_0219b7','dmsdl7531','2022-06-11 19:08:30'),('20220611_224dde','dmsdl7531','2022-06-11 19:12:08'),('20220611_244661','dmsdl7531','2022-06-11 19:18:36'),('20220611_53463a','dmsdl7531','2022-06-11 19:23:56'),('20220611_5ceb0a','dmsdl7531','2022-06-11 18:05:15'),('20220611_650b3b','dmsdl7531','2022-06-11 19:31:36'),('20220611_663020','dmsdl7531','2022-06-11 19:25:02'),('20220611_72ba2b','dmsdl7531','2022-06-11 19:22:39'),('20220611_a39383','dmsdl7531','2022-06-11 19:24:30'),('20220611_b54c1d','dmsdl7531','2022-06-11 19:26:40');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tables` (
  `tid` int NOT NULL,
  `num` int NOT NULL,
  `oid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `oid` (`oid`),
  CONSTRAINT `tables_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
INSERT INTO `tables` VALUES (101,1,NULL),(102,2,NULL),(103,3,'20220611_5ceb0a'),(104,4,NULL),(105,5,'20220611_650b3b'),(106,6,NULL),(107,7,NULL),(108,8,NULL),(109,9,NULL),(110,10,NULL),(111,11,NULL),(112,12,NULL);
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-12  2:33:02
