-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: w1673659_0
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `prodId` int(4) NOT NULL AUTO_INCREMENT,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'HP 15.6 Laptop - Black','hp1.jpg','hp2.jpg','Designed for long-lasting performance, this stylishly designed HP 15.6\" laptop has a long-lasting battery that keeps you connected, entertained, and productive all day.','A sleek and stylish design makes this eye-catching laptop easy to take anywhere. With its beautiful brushed keyboard and colour-matched hinge, the smartly designed HP 15.6\" Jet Black laptop looks as good as it performs. Easily store and enjoy your favourite music, movies, and photos with 1TB of storage and 4GB Memory.\r\n\r\nStay connected and entertained for up to 13.15 hours with a long-lasting HP Fast Charge battery. When your laptop is low on power, no one has time to wait hours to recharge. Power down your device and go from 0 to 50% charge in approximately 45 minutes. The HP 15.6 keeps you connected with integrated HD Intel graphics and HP Webcam with integrated digital microphone for all your streaming, broadcasting and socialising needs.',200.00,50),(2,'HP 15.6 Laptop - Black','hp1.jpg','hp2.jpg','Designed for long-lasting performance, this stylishly designed HP 15.6\" laptop has a long-lasting battery that keeps you connected, entertained, and productive all day.','A sleek and stylish design makes this eye-catching laptop easy to take anywhere. With its beautiful brushed keyboard and colour-matched hinge, the smartly designed HP 15.6\" Jet Black laptop looks as good as it performs. Easily store and enjoy your favourite music, movies, and photos with 1TB of storage and 4GB Memory.\r\n\r\nStay connected and entertained for up to 13.15 hours with a long-lasting HP Fast Charge battery. When your laptop is low on power, no one has time to wait hours to recharge. Power down your device and go from 0 to 50% charge in approximately 45 minutes. The HP 15.6 keeps you connected with integrated HD Intel graphics and HP Webcam with integrated digital microphone for all your streaming, broadcasting and socialising needs.',300.00,50),(3,'huawei P30 Pro','p30l.jpg','p30.jpg','The Huawei P30 Pro mobile features a 6.47inch 16.43 cm display ','The device is powered by Octa core (2.6 GHz, Dual core, Cortex A76 , 1.92 GHz, Dual core, Cortex A76 ,1.8 GHz, Quad core, Cortex A55) processor paired with 8 GB of RAM. As far as the battery is concerned it has 4200 mAh. Over that, as far as the rear camera is concerned this mobile has a 40MP , 20MP , 8MP camera',205.00,15);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-07 23:15:20
