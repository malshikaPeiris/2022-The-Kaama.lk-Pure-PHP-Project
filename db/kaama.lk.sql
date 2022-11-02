-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: kaama.lk
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Category` (
  `idCategory` int NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(45) NOT NULL,
  `CategoryType` varchar(20) NOT NULL,
  `CategoryDescription` varchar(250) NOT NULL,
  `CategoryPicture` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Category`
--

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;
INSERT INTO `Category` VALUES (13,'Dinner','kottu','Chiken kottu','img/uploads/1651648270_kottu.jpeg'),(14,'Lunch','Rice','Chiken rice','img/uploads/1651648184_lunch.jpeg');
/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminpayment`
--

DROP TABLE IF EXISTS `adminpayment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminpayment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `nic` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `contact` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminpayment`
--

LOCK TABLES `adminpayment` WRITE;
/*!40000 ALTER TABLE `adminpayment` DISABLE KEYS */;
INSERT INTO `adminpayment` VALUES (84,'Thevindu','fthevindu@gmail.com','10,','200101800738','10300',342249874),(86,'Chathula Anusara','chathula@gmail.com','10,Railway rd, Maharagama.','200013242778','10300',764756561),(103,'Gayan Sandakula','gayan@gmail.com','10/5, papiliyana,boralasgmuwa.','200013242422','10300',764178595),(104,'Malshika Peries','malki@gmail.com','11/8,  sama mawatha, horowpathana.','1999689576','10300',768595689),(105,'Anushka Madushan','anushka@gmail.com','11/8,  araliya mawatha, horowpathana.','200001800729','10300',77856897);
/*!40000 ALTER TABLE `adminpayment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (2,'Company 101','&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Nam pulvinar tempus ante sit amet malesuada. Donec quis sem porttitor, varius dolor vel, eleifend enim. Pellentesque vitae elit elementum, tristique nisl vel, varius nisi. Integer massa libero, tincidunt in tincidunt vel, semper ac libero. Suspendisse potenti. Praesent vitae nibh nec nunc sagittis condimentum. Etiam feugiat, ipsum sit amet cursus viverra, purus lacus tincidunt metus, eget commodo enim nunc ac enim. Ut dolor libero, molestie ut lacus ac, imperdiet tempus ligula. Pellentesque suscipit blandit tellus id interdum. Sed vestibulum posuere nisl in condimentum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;','uploads/1628739180_logo.jpg','2021-08-12 11:33:38','2021-08-12 11:34:51'),(3,'Company 102','&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Nam pulvinar tempus ante sit amet malesuada. Donec quis sem porttitor, varius dolor vel, eleifend enim. Pellentesque vitae elit elementum, tristique nisl vel, varius nisi. Integer massa libero, tincidunt in tincidunt vel, semper ac libero. Suspendisse potenti. Praesent vitae nibh nec nunc sagittis condimentum. Etiam feugiat, ipsum sit amet cursus viverra, purus lacus tincidunt metus, eget commodo enim nunc ac enim. Ut dolor libero, molestie ut lacus ac, imperdiet tempus ligula. Pellentesque suscipit blandit tellus id interdum. Sed vestibulum posuere nisl in condimentum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;h3&gt;&lt;a href=&quot;https://sourcecodester.com&quot; target=&quot;_blank&quot;&gt;&lt;b&gt;Sample link for the client\'s company website&lt;/b&gt;&lt;/a&gt;&lt;/h3&gt;&lt;/p&gt;','uploads/1628739360_download.jpg','2021-08-12 11:35:57','2021-08-12 11:36:40');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `meta_field` text,
  `meta_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES ('mobile','0123456789'),('email','info@sampple.com'),('facebook','https://facebook.com/profile'),('twitter',''),('linkin',''),('address','Sample Address, Sample, Sample, 12345');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menutable`
--

DROP TABLE IF EXISTS `menutable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menutable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `menu_description` varchar(255) NOT NULL,
  `menu_unit_price` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `menu_qty` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menutable`
--

LOCK TABLES `menutable` WRITE;
/*!40000 ALTER TABLE `menutable` DISABLE KEYS */;
INSERT INTO `menutable` VALUES (25,'Strawberry Cream bun','Sweets','This is a Strawberry Cream bun','500','img/uploads/1652023384_1651735196_StrawberryShortcakes.jpg','60'),(26,'Maccorone','Sweets','cream maccorene','500','img/uploads/1652023444_1651735270_macaron-rosa-pink-french-pastry-colorful.jpg','20'),(28,'Choco-Cookies ','Sweets','Choco-Cookies with Butter','200','img/uploads/1652025098_1651567613_chocatewithcreamberrycake.jpg','30'),(31,'Berry Juice','Soft Drinks','Strawberry Juice','450','img/uploads/1652025520_1651560794_healthyredsmoothie.jpg','35'),(32,'lava cake','cakes','Choco Lava cake','580','img/uploads/1652025583_1651567613_chocatewithcreamberrycake.jpg','350'),(34,'White Cake','Sweets','White Cheese Cake','590','img/uploads/1652025803_1651943985_cheese cake with buiscuits.jpg','32');
/*!40000 ALTER TABLE `menutable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` text NOT NULL,
  `subject` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'John Smith','Sample Subject Only','09123456789','jsmith@sample.com','Sample Message only',1,'2021-08-12 15:50:02','2021-08-12 16:16:10'),(2,'John Smith','Sample Subject Only','09123456789','jsmith@sample.com','Sample Message only',1,'2021-08-12 15:50:18','2021-08-12 16:15:20'),(3,'John Smith','Sample','09123456798','jsmith@sample.com','Sample Only',1,'2021-08-12 15:51:07','2021-08-12 16:15:57');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text,
  `file_path` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Sample Service 101','&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dapibus arcu, ullamcorper viverra felis. Aenean in diam at ligula interdum laoreet. Mauris quis purus maximus, scelerisque lacus non, malesuada sapien. Sed at vulputate sapien. Sed vitae auctor odio. Nam ac massa luctus, scelerisque odio id, accumsan sem. Ut tincidunt bibendum diam, at tempor leo ornare ut. Donec nibh mi, mattis a dolor vitae, interdum rutrum nisi. Vestibulum eu nulla pharetra leo porta ornare quis ac magna. In blandit diam non tortor accumsan, id finibus odio sollicitudin.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;','uploads/1628734760_2.jpg','2021-08-12 10:12:40','2021-08-12 10:19:20'),(4,'Sample 102','&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Proin commodo turpis massa, quis posuere turpis cursus a. Phasellus ac mauris eget turpis efficitur cursus tempus eget purus. Praesent a est id velit euismod dapibus eu sed turpis. Nulla iaculis velit vitae justo bibendum fermentum. Vestibulum vulputate erat ac ex cursus pharetra. Nulla facilisi. Nullam aliquam lorem nisl, congue posuere mi sollicitudin id. Morbi ornare sagittis posuere. Donec elit urna, congue nec mauris a, tincidunt malesuada mauris. Quisque rutrum felis ligula, nec molestie purus porttitor porta. Aliquam et nibh laoreet, euismod tellus non, fermentum sapien.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://sourcecodester.com&quot; target=&quot;_blank&quot;&gt;Click here to go to link&lt;/a&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','uploads/1628735292_download.jpg','2021-08-12 10:28:12','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_info`
--

DROP TABLE IF EXISTS `system_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `system_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_info`
--

LOCK TABLES `system_info` WRITE;
/*!40000 ALTER TABLE `system_info` DISABLE KEYS */;
INSERT INTO `system_info` VALUES (1,'name','Company Website'),(2,'address','Philippines'),(3,'contact','+1234567890'),(4,'email','info@sample.com'),(6,'short_name','Our Company'),(9,'logo','uploads/1628731260_logo.jpg'),(11,'welcome_message','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dapibus arcu, ullamcorper viverra felis. Aenean in diam at ligula interdum laoreet. Mauris quis purus maximus, scelerisque lacus non, malesuada sapien. '),(12,'banner','uploads/1628750220_hd-background.jpg');
/*!40000 ALTER TABLE `system_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `message_from` text NOT NULL,
  `message` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'John Smith, CEO of Sample Company 101','&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dapibus arcu, ullamcorper viverra felis. Aenean in diam at ligula interdum laoreet. Mauris quis purus maximus, scelerisque lacus non, malesuada sapien. Sed at vulputate sapien. Sed vitae auctor odio. Nam ac massa luctus, scelerisque odio id, accumsan sem. Ut tincidunt bibendum diam, at tempor leo ornare ut. Donec nibh mi, mattis a dolor vitae, interdum rutrum nisi. Vestibulum eu nulla pharetra leo porta ornare quis ac magna. In blandit diam non tortor accumsan, id finibus odio sollicitudin.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif;&quot;&gt;Proin commodo turpis massa, quis posuere turpis cursus a. Phasellus ac mauris eget turpis efficitur cursus tempus eget purus. Praesent a est id velit euismod dapibus eu sed turpis. Nulla iaculis velit vitae justo bibendum fermentum. Vestibulum vulputate erat ac ex cursus pharetra. Nulla facilisi. Nullam aliquam lorem nisl, congue posuere mi sollicitudin id. Morbi ornare sagittis posuere. Donec elit urna, congue nec mauris a, tincidunt malesuada mauris. Quisque rutrum felis ligula, nec molestie purus porttitor porta. Aliquam et nibh laoreet, euismod tellus non, fermentum sapien.&lt;/p&gt;','uploads/1628741365_avatar.jpg','2021-08-12 12:09:25',NULL),(2,'Claire Blake, VP in Accounting and Finance of Sample102','&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif;&quot;&gt;Nam pulvinar tempus ante sit amet malesuada. Donec quis sem porttitor, varius dolor vel, eleifend enim. Pellentesque vitae elit elementum, tristique nisl vel, varius nisi. Integer massa libero, tincidunt in tincidunt vel, semper ac libero. Suspendisse potenti. Praesent vitae nibh nec nunc sagittis condimentum. Etiam feugiat, ipsum sit amet cursus viverra, purus lacus tincidunt metus, eget commodo enim nunc ac enim. Ut dolor libero, molestie ut lacus ac, imperdiet tempus ligula. Pellentesque suscipit blandit tellus id interdum. Sed vestibulum posuere nisl in condimentum.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif;&quot;&gt;Etiam vitae diam tincidunt, vulputate tellus a, tempus sem. Aenean vulputate ultricies tellus, non pellentesque risus volutpat vel. Vestibulum dolor quam, ultrices quis eros et, pharetra porta velit. Aliquam erat volutpat. Nulla eu tortor risus. Aenean tincidunt varius massa at tempor. Ut in felis lacus. Donec volutpat, est at vestibulum auctor, augue risus dapibus leo, et pulvinar sem enim et urna. Quisque volutpat pulvinar nibh.&lt;/p&gt;','uploads/1628745074_ava.jpg','2021-08-12 13:11:14',NULL),(3,'George Wilson,  CFO of SAMPLE102 INC.','&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif;&quot;&gt;Etiam vitae diam tincidunt, vulputate tellus a, tempus sem. Aenean vulputate ultricies tellus, non pellentesque risus volutpat vel. Vestibulum dolor quam, ultrices quis eros et, pharetra porta velit. Aliquam erat volutpat. Nulla eu tortor risus. Aenean tincidunt varius massa at tempor. Ut in felis lacus. Donec volutpat, est at vestibulum auctor, augue risus dapibus leo, et pulvinar sem enim et urna. Quisque volutpat pulvinar nibh.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif;&quot;&gt;Nunc pulvinar volutpat nulla at commodo. Nullam vitae justo lorem. Fusce rutrum urna ut nisi placerat tempus. Morbi a fringilla orci, at sollicitudin elit. Aenean quis arcu pretium, congue ante non, pharetra lectus. Pellentesque iaculis diam velit, vitae vulputate risus vulputate id. Duis fringilla cursus pellentesque. Quisque euismod nisl ac molestie volutpat.&lt;/p&gt;','uploads/1628745156_avatar.png','2021-08-12 13:12:37',NULL);
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','Smith','admin','0192023a7bbd73250516f069df18b500','uploads/1619140500_avatar.png',NULL,'2021-01-20 14:02:37','2021-04-23 15:14:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'kaama.lk'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-08 21:55:19
