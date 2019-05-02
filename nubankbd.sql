-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: nubank
-- ------------------------------------------------------
-- Server version	5.0.41-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `nconta` int(6) NOT NULL auto_increment,
  `nome` varchar(40) collate utf8_unicode_ci NOT NULL,
  `senha` varchar(40) collate utf8_unicode_ci default NULL,
  `cpf` varchar(11) collate utf8_unicode_ci NOT NULL,
  `rg` varchar(9) collate utf8_unicode_ci NOT NULL,
  `datanas` varchar(10) collate utf8_unicode_ci NOT NULL,
  `datacria` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`nconta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Ama','81dc9bdb52d04dc20036dbd8313ed055','12345678954','975454545','01/03/2025','Sdatahora');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contac`
--

DROP TABLE IF EXISTS `contac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contac` (
  `nconta` int(6) NOT NULL auto_increment,
  `saldo` float(10,2) default NULL,
  `saques` varchar(40) collate utf8_unicode_ci default NULL,
  `deposito` varchar(40) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`nconta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contac`
--

LOCK TABLES `contac` WRITE;
/*!40000 ALTER TABLE `contac` DISABLE KEYS */;
INSERT INTO `contac` VALUES (1,150.00,NULL,NULL),(2,150.00,NULL,NULL);
/*!40000 ALTER TABLE `contac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contap`
--

DROP TABLE IF EXISTS `contap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contap` (
  `nconta` int(6) default NULL,
  `saldo` float(10,2) default NULL,
  `resgates` varchar(40) collate utf8_unicode_ci default NULL,
  `deposito` varchar(40) collate utf8_unicode_ci default NULL,
  `datacria` varchar(10) collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contap`
--

LOCK TABLES `contap` WRITE;
/*!40000 ALTER TABLE `contap` DISABLE KEYS */;
/*!40000 ALTER TABLE `contap` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-26 16:16:18
