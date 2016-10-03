-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: cluster
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (12,'iZw8sc4Ri5CaU6AfQnFeb0224ZDDz4E6ROAUczoG','https://ucarecdn.com/0c0cf726-9681-4242-bdc6-bb8739c52818/','Алиса Димитрова','2016-09-22 11:42:57','2016-09-22 11:42:57'),(13,'q4VcHtzYZD9tHM9oWPxe7AIxWOMwjlgtwe1jjElz','https://ucarecdn.com/7151f7b0-0971-496c-bd44-5bee489dd396/','Габи','2016-09-22 11:43:31','2016-09-22 11:43:31'),(14,'cgA5e1FB0fl2NhmLaNT0dKJUnKqnVBkuvDSAxjRO','https://ucarecdn.com/d25687eb-9188-4548-ab1e-f0961c292550/','Концерт в галерията','2016-09-22 11:44:22','2016-09-22 11:44:22'),(15,'LXDjzC0hZpYnaDOwE23dXIYI0aLnoAcQ0iNibn4j','https://ucarecdn.com/29314c77-9998-4902-89f6-174b629760cd/','Майсторски клас на Георги Василев','2016-09-22 11:45:29','2016-09-22 11:45:29'),(17,'2J6zy9qA75cxRngpZBQxhwuDf9ts88bNSzZIXrVm','https://ucarecdn.com/5684f4b7-db10-46d7-bd74-6e6214d10138/','Китарен оркестър','2016-09-22 11:46:39','2016-09-22 11:46:39'),(18,'mAyWpfx4E66mFjcdlCd1uYoDsBvyzdnbWTHnodAJ','https://ucarecdn.com/7a5e02d5-68a9-4eb2-8221-6148437039a3/','Концерт в СОУ \"Н. Й. Вапцаров\"','2016-09-22 11:48:23','2016-09-22 11:48:23'),(19,'FiZMIf1JMSv2YIDZIeKsf5bVrddxMDYuUjWDrWGU','https://ucarecdn.com/e1cd4695-c618-4775-92c8-e9405c695bdd/','Марти преди изява','2016-09-25 17:48:18','2016-09-25 17:48:18'),(20,'DeKKMiHkhn0Gn2ggDK6FvjQAselbVjCCt6LTlCTl','https://ucarecdn.com/84d30183-f69d-4bfa-ac24-84594acd5c87/','Дидо във вихъра си','2016-09-25 17:49:32','2016-09-25 17:49:32'),(21,'MkN974lTcZ9ixlW7UCGskx0eyZENbAMKyrvvY4bh','https://ucarecdn.com/418136d8-91d1-4f52-8725-6a5a74fa256b/','Проект \"Ритъм в галерията\"','2016-09-25 17:50:29','2016-09-25 17:50:29'),(22,'kKpkDdrg403qhEHZ2xUpHBZjxj5LEc8wLsExGRPm','https://ucarecdn.com/608803b0-5121-4835-b67e-4a335be60eb9/','Малко блус...','2016-09-25 17:51:21','2016-09-25 17:51:21'),(23,'epuYHIdXVuEWfLU8MbojkB6j5ZHiVnGGM2ghxFap','https://ucarecdn.com/34445f35-237c-487c-a3c3-08498f3aceab/','Иво и Мони','2016-09-25 17:51:59','2016-09-25 17:51:59'),(24,'SfVvGjohl7DJYFhm3ioOi8u3NYX5njhL82FGwlkQ','https://ucarecdn.com/16c67adb-4b92-45b1-a0f4-d2d015a96338/','Мария','2016-09-25 17:52:35','2016-09-25 17:52:35'),(25,'hFPBLnXFm4qXaQm7AjdCVaBu7xpyNzWiwjk41tHm','https://ucarecdn.com/6336535b-dc0c-4842-8dbc-7f8eec59d3a9/','Това сме ние','2016-09-25 17:53:43','2016-09-25 17:53:43'),(26,'HUUyDrrR9I9KdcQkZgWAYbZTS31QPE4DUy6KeaTE','https://ucarecdn.com/b6e21706-290e-443f-8810-1665483b7008/','Майсторски клас на доц. Стела Митева - Динкова','2016-09-25 17:54:53','2016-09-25 17:54:53'),(27,'dCPmfdgXNBYefZSArhJKpVJQqZJ5QSkuCijLgBnT','https://ucarecdn.com/631d927d-6d21-4f6a-8749-47146fc75f3d/','На конкурс в гр. Русе','2016-09-25 17:55:34','2016-09-25 17:55:34'),(28,'l77rMNYPhR750Gm4Ch276q9CqwHuJSATF2THpGY7','https://ucarecdn.com/62ebbf62-e85e-4dea-8668-6276c030b8b9/','На конкурс в гр. Кюстендил','2016-09-25 17:56:11','2016-09-25 17:56:11');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_09_01_081725_create_images_table',2),('2016_09_22_184345_create_videos_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_bg` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content_bg` text NOT NULL,
  `content_en` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Коледен Концерт 2014','Christmas Concert 2014','Клуб Клъстър организира Коледен концерт, който ще се състои на 17.12.2014 от 17 часа в Регионална Библиотека \"Партений Павлович\".','The annual Christmas Concert organized by guitar club Custer will be held this year on 17.12.2014 in the Library.','2015-08-20 08:47:53','0000-00-00 00:00:00'),(2,'Представяне на инструмента Китара','Представяне на инструмента Китара','На 08.03.2016г. г-жа Димитрова запозна учениците от II-е клас, 112 ОУ „Стоян Заимов“, с инструмента китара. Разказа им кратка история за китарата, изсвири им пиеса и им изпя песен. Срещата беше организирана от учителката им Дарина Йовчева. Децата бяха очаровани от звука на инструмента и за финал решиха да изпеят песента „Родина“ под импровизирания акомпанимент на китара! ','На 08.03.2016г. г-жа Димитрова запозна учениците от II-е клас, 112 ОУ „Стоян Заимов“, с инструмента китара. Разказа им кратка история за китарата, изсвири им пиеса и им изпя песен. Срещата беше организирана от учителката им Дарина Йовчева. Децата бяха очаровани от звука на инструмента и за финал решиха да изпеят песента „Родина“ под импровизирания акомпанимент на китара! ','2016-03-12 04:14:28','0000-00-00 00:00:00'),(3,'Концерт в 55-то СОУ, София','Концерт в 55-то СОУ, София','На 10.06.2015г. Гергана Шипчанова от клуб „Клъстър“ изнесе кратък концерт пред V – б клас в 55 СОУ „П. Каравелов“, гр. София. Програмата ѝ включваше класически пиеси за китара, блус импровизация и акомпанимент на популярна песен на която целият клас запя. Беше вълнуващо преживяване. Да пожелаем на Гергана още по-големи успехи!','На 10.06.2015г. Гергана Шипчанова от клуб „Клъстър“ изнесе кратък концерт пред V – б клас в 55 СОУ „П. Каравелов“, гр. София. Програмата ѝ включваше класически пиеси за китара, блус импровизация и акомпанимент на популярна песен на която целият клас запя. Беше вълнуващо преживяване. Да пожелаем на Гергана още по-големи успехи!','2016-06-11 21:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('rossitsadd@gmail.com','0b245da32265cd1b4ed157d6dc0a4808c6ffd8f079cd5c1734bdc5f6b55cba48','2016-09-25 17:45:01');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rossi','rossitsadd@gmail.com','$2y$10$IGcL96YP1zJySCgk8U/PNe1Z93WgLhe4/VNY6j7DcJ8vSC6FY6Eyi','qYXyzBtAaEded8bn0zC7vn8dtrVoIkiM2rUpGjj4MA6zj8me5a40IOCAeS8N','2016-08-15 17:42:20','2016-08-15 17:46:45'),(2,'Dragomir','info@nortiena.com','$2y$10$5txql.ZvRSk31qqIOh.8iOlWpvgZ.81Q47rLjBeBpQvdHLSY4v9qa','L7aMLjvUmxVNC7g559fot5GqWfrssnk83jp7ZURjSglxQN6WVjopqGfREGhY','2016-08-15 17:48:10','2016-09-25 17:23:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'PMkiY9eNwF4','Играта на пингвините върху леда','2016-04-15 10:19:07','2016-04-15 10:19:07'),(2,'JggxKXBdumo','Иво Господинов','2015-08-02 08:44:04','2015-08-02 08:44:04'),(3,'Kqf41vmr9bU','Рей Сато','2015-09-06 14:30:37','2015-09-06 14:30:37'),(4,'qHYHBRwJc8E','Малко блус','2015-09-07 04:16:22','2015-09-07 04:16:22'),(5,'wwcazEVeZ44','Дария Нотева','2015-09-07 04:18:22','2015-09-07 04:18:22'),(6,'DwRA_HONsUI','Иван Русев','2015-09-07 04:19:13','2015-09-07 04:19:13'),(7,'rCuRrvAZE3Y','Диан Димитров','2015-09-07 04:23:52','2015-09-07 04:23:52'),(8,'PMaBMck1XJ8','Дамян Недев','2015-09-09 06:41:33','2015-09-09 06:41:33'),(9,'IaPNmw9xRsU','В. Вълчев - Блус в Ла','2015-09-09 06:43:28','2015-09-09 06:43:28'),(10,'1aU5xskXqPE','J. Ganapes - Blues Rock Tune','2015-09-09 06:47:16','2015-09-09 06:47:16'),(11,'Qnj-ZUNjI5g','Гергана Шипчанова','2015-09-17 07:52:38','2015-09-17 07:52:38'),(12,'BsBZty_eRG0','Дъждовни капки','2015-09-17 07:57:09','2015-09-17 07:57:09'),(13,'4mhWP669Ejw','Край реката','2015-09-17 08:05:16','2015-09-17 08:05:16'),(14,'ruPxfEmsD7k','Мариана - мелодия от Карибите','2015-09-25 09:15:11','2015-09-25 09:15:11'),(15,'pWr6hbIwt4E','Билге Алит','2015-10-01 09:14:45','2015-10-01 09:14:45'),(16,'x8Q6V-E8DBA','Господарят на танца','2015-10-01 09:23:51','2015-10-01 09:23:51'),(17,'ZZ-iPTnDMuA','Getting Funcky','2015-10-01 09:34:11','2015-10-01 09:34:11'),(18,'dQ1a8Hj1pds','Joline','2015-10-01 09:51:26','2015-10-01 09:51:26'),(19,'TQn4xnPZ1OQ','Open Fire','2015-10-01 10:05:51','2015-10-01 10:05:51'),(20,'RAdHU0hPgjk','Иво и Мони','2015-10-15 12:47:39','2015-10-15 12:47:39'),(21,'o2fuTN5uckw','Габи и Ева','2015-10-15 12:49:28','2015-10-15 12:49:28'),(23,'CMLOJe2yfyc','Дни на класическата китара, гр. Варна','2015-10-20 10:33:11','2015-10-20 10:33:11'),(24,'u0KoGxUSuEc','Теди','2015-10-20 15:44:08','2015-10-20 15:44:08'),(25,'dCQEMfk6Kl4','Мария Славова','2015-10-23 04:57:23','2015-10-23 04:57:23'),(26,'_hbyT94GvSk','Blues Deluxe Cover','2015-11-02 14:53:08','2015-11-02 14:53:08'),(27,'TtCNTKNSwxQ','London Bridge','2016-01-11 12:50:51','2016-01-11 12:50:51'),(30,'28ixYy3q0fU','Карай да върви, това е блус!','2016-01-27 09:52:43','2016-01-27 09:52:43'),(31,'rD1GrzETK1M','Яна Обровка - Малка песен','2016-02-07 08:48:46','2016-02-07 08:48:46'),(32,'sc0fFJqzbqE','Mauro Giuliani - Andante','2016-03-15 07:32:24','2016-03-15 07:32:24'),(33,'1xxlsZI3XNc','Карай да върви, това е блус!','2016-03-15 07:35:33','2016-03-15 07:35:33'),(34,'YtnkwsCHEgE','Jorge Morel - Danza Brasilera','2016-03-15 07:40:30','2016-03-15 07:40:30'),(35,'3KTIT8v9Wo0','Hedwig`s Theme','2016-04-15 10:20:23','2016-04-15 10:20:23'),(36,'AhhkQJnlyvo','He`s a Pirate','2016-04-15 10:37:15','2016-04-15 10:37:15'),(37,'7E4I9dqUC2I','Петър Керкелов - Брегът и морето','2016-04-27 09:26:43','2016-04-27 09:26:43'),(38,'hQX3F0CUJog','В. Вълчев - Токата','2016-05-11 14:51:44','2016-05-11 14:51:44'),(39,'SPsWOfEs0f4','В. Вълчев - Разходка из Манхатън','2016-05-11 15:04:04','2016-05-11 15:04:04'),(40,'1cyqZs7VAWI','Руски сувенир','2016-05-30 12:55:50','2016-05-30 12:55:50'),(41,'hm-miDcRxHw','Ф. Карули - Andante','2016-05-30 13:01:49','2016-05-30 13:01:49'),(42,'dW5JOQBNvGA','В. Вълчев - Шанхай','2016-05-30 13:07:11','2016-05-30 13:07:11'),(43,'yA1uXTGxwBg','Goofy Grasshopper Blues','2016-06-08 10:03:16','2016-06-08 10:03:16'),(44,'EjkLn2IIHNo','Blues in A','2016-06-08 10:17:26','2016-06-08 10:17:26'),(46,'sCk4oWODXWQ','Н. Кост - Прелюд','2016-07-21 10:31:18','2016-07-21 10:31:18'),(47,'-4mzcaRQO7Y','В. Вълчев - Блус на V позиция','2016-07-26 11:31:46','2016-07-26 11:31:46');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-03 10:13:42
