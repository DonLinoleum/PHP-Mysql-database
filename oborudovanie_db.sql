-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: oborudovanie_db
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `SNR`
--

DROP TABLE IF EXISTS `SNR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SNR` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SNR`
--

LOCK TABLES `SNR` WRITE;
/*!40000 ALTER TABLE `SNR` DISABLE KEYS */;
INSERT INTO `SNR` VALUES (5,'Fggvvff','Ggffvvg'),(9,'rtyrtyrtyrty','rtyrtyrtyrty'),(11,'супер модель№3','2345235345345');
/*!40000 ALTER TABLE `SNR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SNR_ARENDA`
--

DROP TABLE IF EXISTS `SNR_ARENDA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SNR_ARENDA` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `nomer` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SNR_ARENDA`
--

LOCK TABLES `SNR_ARENDA` WRITE;
/*!40000 ALTER TABLE `SNR_ARENDA` DISABLE KEYS */;
INSERT INTO `SNR_ARENDA` VALUES (3,'супер модель№1','234234234','sdfsdf','sdfsdfsdf'),(4,'rtyrty','rtyrtyrty','sdfsdfdsf','sfsdfsdfdf');
/*!40000 ALTER TABLE `SNR_ARENDA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STB`
--

DROP TABLE IF EXISTS `STB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `STB` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STB`
--

LOCK TABLES `STB` WRITE;
/*!40000 ALTER TABLE `STB` DISABLE KEYS */;
INSERT INTO `STB` VALUES (1,'супер модель№1','24234234234'),(2,'супер модель№2','234234234234'),(5,'45345345','345345345');
/*!40000 ALTER TABLE `STB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STB_ARENDA`
--

DROP TABLE IF EXISTS `STB_ARENDA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `STB_ARENDA` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `nomer` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STB_ARENDA`
--

LOCK TABLES `STB_ARENDA` WRITE;
/*!40000 ALTER TABLE `STB_ARENDA` DISABLE KEYS */;
INSERT INTO `STB_ARENDA` VALUES (3,'супер модель№5','45645645656','3434','343434'),(4,'супер модель№3','345345345345','343434','343434');
/*!40000 ALTER TABLE `STB_ARENDA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `snr`
--

DROP TABLE IF EXISTS `snr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `snr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `snr`
--

LOCK TABLES `snr` WRITE;
/*!40000 ALTER TABLE `snr` DISABLE KEYS */;
/*!40000 ALTER TABLE `snr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `snr_arenda`
--

DROP TABLE IF EXISTS `snr_arenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `snr_arenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `nomer` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `snr_arenda`
--

LOCK TABLES `snr_arenda` WRITE;
/*!40000 ALTER TABLE `snr_arenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `snr_arenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stb`
--

DROP TABLE IF EXISTS `stb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stb`
--

LOCK TABLES `stb` WRITE;
/*!40000 ALTER TABLE `stb` DISABLE KEYS */;
/*!40000 ALTER TABLE `stb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stb_arenda`
--

DROP TABLE IF EXISTS `stb_arenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stb_arenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `nomer` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stb_arenda`
--

LOCK TABLES `stb_arenda` WRITE;
/*!40000 ALTER TABLE `stb_arenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `stb_arenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-06 13:38:48
