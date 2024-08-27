-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: autocar
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car` (
  `carid` int NOT NULL AUTO_INCREMENT,
  `carmodel` varchar(45) DEFAULT NULL,
  `year0` int DEFAULT NULL,
  `carcolor` varchar(45) DEFAULT NULL,
  `enginpower` int NOT NULL,
  `carorigin` varchar(45) DEFAULT NULL,
  `fultype` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `additionaliformation` varchar(500) DEFAULT NULL,
  `img` longblob,
  `addduration` int DEFAULT NULL,
  `advertsiername` varchar(80) DEFAULT NULL,
  `phonenum` int DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`carid`,`enginpower`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (32,'Bmw',2023,'Black',1600,'privet','banzen',35200,'bmw',_binary 'bmw11.jpg',5,'sami',455656,'Jerusalem'),(33,'VW',2021,'yallow',1600,'privet','banzen',35600,'vw',_binary 'vw1.jpeg',5,'ahmad',455656,'Nablus'),(116,'Mercedes',2020,'Black',1900,'privet','banzen',600000,'hi black mar',_binary 'mar2.jpg',5,'ahmad',455656,'Tubas'),(117,'Mercedes',2023,'white',5000,'privet','banzen',360000,'white mar',_binary 'mar1.jpg',5,'ahmad',455656,'Tulkarem'),(118,'Bmw',2023,'white',6655,'privet','Desil',35666,'AHMAD',_binary 'marblue.jpg',5,'ahmad',55656,'Jenen');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-13 17:56:35
