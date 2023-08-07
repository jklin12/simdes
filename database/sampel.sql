-- MySQL dump 10.13  Distrib 8.0.33, for macos13.3 (x86_64)
--
-- Host: localhost    Database: db_simdes
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `data_isi_surats`
--

DROP TABLE IF EXISTS `data_isi_surats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_isi_surats` (
  `id_isi_surat` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_surat` int NOT NULL,
  `id_kolom_surat` int NOT NULL,
  `isi_kolom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_isi_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_isi_surats`
--

LOCK TABLES `data_isi_surats` WRITE;
/*!40000 ALTER TABLE `data_isi_surats` DISABLE KEYS */;
INSERT INTO `data_isi_surats` VALUES (1,1,1,'Faris Aizy'),(2,1,2,'35200618012938'),(3,1,3,'Laki-laki'),(4,1,4,'Magetan'),(5,1,5,'1998-07-23'),(6,1,6,'WNI'),(7,1,7,'Islam'),(8,1,8,'Swasta'),(9,1,9,'Jl jaksa agung s no 27B'),(10,2,10,'Faris Aizy'),(11,2,11,'35200618012938'),(12,2,12,'Laki-laki'),(13,2,13,'Magetan'),(14,2,14,'1998-07-23'),(15,2,15,'WNI'),(16,2,16,'Islam'),(17,2,17,'Swasta'),(18,2,18,'Jl jaksa agung s no 27B'),(19,2,19,'Jeualan Pentol'),(20,2,20,'pedagang'),(21,2,21,'20 juli 2023'),(22,2,22,'Jl ABC'),(23,2,23,'Bantuan Negara'),(24,3,24,'Faris Aizy'),(25,3,25,'35200618012938'),(26,3,26,'Laki-laki'),(27,3,27,'Magetan'),(28,3,28,'1998-07-23'),(29,3,29,'WNI'),(30,3,30,'Islam'),(31,3,31,'Swasta'),(32,3,32,'Jl jaksa agung s no 27B'),(33,3,33,'Pentol Bakar'),(34,3,34,'20 Agustus 2023'),(35,3,35,'Jl Paris'),(36,3,36,'Kredit BRI'),(37,4,24,'Faris Aizy'),(38,4,25,'35200618012938'),(39,4,26,'Laki-laki'),(40,4,27,'Magetan'),(41,4,28,'1998-07-23'),(42,4,29,'WNI'),(43,4,30,'Islam'),(44,4,31,'Swasta'),(45,4,32,'Jl jaksa agung s no 27B'),(46,4,33,'Pentol Bakar'),(47,4,34,'20 Agustus 2023'),(48,4,35,'Jl Paris'),(49,4,36,'Kredit BRI'),(50,5,24,'Faris Aizy'),(51,5,25,'35200618012938'),(52,5,26,'Laki-laki'),(53,5,27,'Magetan'),(54,5,28,'1998-07-23'),(55,5,29,'WNI'),(56,5,30,'Islam'),(57,5,31,'Swasta'),(58,5,32,'Jl jaksa agung s no 27B'),(59,5,33,'Pentol Bakar'),(60,5,34,'20 Agustus 2023'),(61,5,35,'Jl Paris'),(62,5,36,'Kredit BRI'),(63,6,37,'Faris Aizy'),(64,6,38,'35200618012938'),(65,6,39,'Laki-laki'),(66,6,40,'Magetan'),(67,6,41,'1998-07-23'),(68,6,42,'WNI'),(69,6,43,'Islam'),(70,6,44,'Swasta'),(71,6,45,'Belum Kawin'),(72,6,46,'Jl jaksa agung s no 27B'),(73,7,47,'Faris Aizy'),(74,7,48,'Maemunah'),(75,7,49,'35200618012938'),(76,7,50,'Laki-laki'),(77,7,51,'Magetan'),(78,7,52,'1998-07-23'),(79,7,53,'WNI'),(80,7,54,'Islam'),(81,7,55,'Swasta'),(82,7,56,'Belum Kawin'),(83,7,57,'Jl jaksa agung s no 27B'),(84,7,58,'20-Juli-2023'),(85,7,59,'10:10'),(86,7,60,'Rumah Sakit'),(87,7,61,'Sakit Hati'),(88,7,62,'Mrx'),(89,7,63,'128371837'),(90,7,64,'Yogyakrta,'),(91,7,65,'20 januari 1993'),(92,7,66,'Jl ABCD'),(93,8,24,'Faris Aizy'),(94,8,25,'35200618012938'),(95,8,26,'Laki-laki'),(96,8,27,'Magetan'),(97,8,28,'1998-07-23'),(98,8,29,'WNI'),(99,8,30,'Islam'),(100,8,31,'Swasta'),(101,8,32,'Jl jaksa agung s no 27B'),(102,8,33,'Pentol Bakar'),(103,8,34,'20 Agustus 2023'),(104,8,35,'Jl Paris'),(105,8,36,'Kredit BRI'),(106,9,1,'Faris Aizy'),(107,9,2,'35200618012938'),(108,9,3,'Laki-laki'),(109,9,4,'Magetan'),(110,9,5,'1998-07-23'),(111,9,6,'WNI'),(112,9,7,'Islam'),(113,9,8,'Swasta'),(114,9,9,'Jl jaksa agung s no 27B'),(115,10,47,'Faris Aizy'),(116,10,48,'Maemunah'),(117,10,49,'35200618012938'),(118,10,50,'Laki-laki'),(119,10,51,'Magetan'),(120,10,52,'1998-07-23'),(121,10,53,'WNI'),(122,10,54,'Islam'),(123,10,55,'Swasta'),(124,10,56,'Kawin'),(125,10,57,'Jl jaksa agung s no 27B'),(126,10,58,'20-Juli-2023'),(127,10,59,'10:10'),(128,10,60,'Rumah Sakit'),(129,10,61,'Sakit Hati'),(130,10,62,'Mrx'),(131,10,63,'128371837'),(132,10,64,'Yogyakrta,'),(133,10,65,'20 januari 1993'),(134,10,66,'Jl ABCD');
/*!40000 ALTER TABLE `data_isi_surats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_penduduks`
--

DROP TABLE IF EXISTS `data_penduduks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_penduduks` (
  `nik` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_perkawinan` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=35200618012939 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_penduduks`
--

LOCK TABLES `data_penduduks` WRITE;
/*!40000 ALTER TABLE `data_penduduks` DISABLE KEYS */;
INSERT INTO `data_penduduks` VALUES (35200618012938,'Faris Aizy','Laki-laki','Magetan','1998-07-23','WNI','Islam','Swasta','Kawin','Jl jaksa agung s no 27B',1,1,'2023-07-22 11:01:44','2023-08-01 01:38:09');
/*!40000 ALTER TABLE `data_penduduks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_surats`
--

DROP TABLE IF EXISTS `data_surats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_surats` (
  `id_surat` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` int NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_surats`
--

LOCK TABLES `data_surats` WRITE;
/*!40000 ALTER TABLE `data_surats` DISABLE KEYS */;
INSERT INTO `data_surats` VALUES (1,2,'0123/01/2023','2023-07-22',1,1,'2023-07-22 11:33:44','2023-07-22 11:33:44'),(2,4,'04.22.00/01/2023','2023-07-25',1,1,'2023-07-25 05:56:46','2023-07-25 05:56:46'),(3,5,'510/01/2023','2023-07-25',1,1,'2023-07-25 06:18:45','2023-07-25 06:18:45'),(4,5,'510/01/2023','2023-07-25',1,1,'2023-07-25 06:21:02','2023-07-25 06:21:02'),(6,6,'123/01/2023','2023-07-25',1,1,'2023-07-25 06:48:13','2023-07-25 06:48:13'),(7,7,'321/01/2023','2023-07-25',1,1,'2023-07-25 07:07:27','2023-07-25 07:07:27'),(8,5,'510/01/2023','2023-07-31',1,1,'2023-07-31 09:11:22','2023-07-31 09:11:22'),(9,2,'0123/02/2023','2023-08-01',1,1,'2023-08-01 01:51:28','2023-08-01 01:51:28'),(10,7,'321/02/2023','2023-08-01',1,1,'2023-08-01 02:18:49','2023-08-01 02:18:49');
/*!40000 ALTER TABLE `data_surats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_07_18_041500_create_data_penduduks_table',1),(6,'2023_07_18_041609_create_ref_jenis_surats_table',1),(7,'2023_07_18_041630_create_ref_kolom_surats_table',1),(8,'2023_07_18_041649_create_data_surats_table',1),(9,'2023_07_18_041713_create_data_isi_surats_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_jenis_surats`
--

DROP TABLE IF EXISTS `ref_jenis_surats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_jenis_surats` (
  `id_jenis_surat` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_surat` int DEFAULT NULL,
  `keterangan_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_jenis_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_jenis_surats`
--

LOCK TABLES `ref_jenis_surats` WRITE;
/*!40000 ALTER TABLE `ref_jenis_surats` DISABLE KEYS */;
INSERT INTO `ref_jenis_surats` VALUES (2,'Surat Keterangan Belum Menikah','0123',2,'Untuk Syarat Menikah'),(4,'Surat Keterangan Tidak Mampu','04.22.00',1,'Untuk keperluan bantuan'),(5,'Surat Keterangan usaha','510',1,'Untuk Pembuatan Usaha'),(6,'Surat Keterangan Beda Identitas','123',1,'--'),(7,'Surat Keterangan Kematian','321',2,'--');
/*!40000 ALTER TABLE `ref_jenis_surats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_kolom_surats`
--

DROP TABLE IF EXISTS `ref_kolom_surats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ref_kolom_surats` (
  `id_kolom_surat` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` int NOT NULL,
  `nama_kolom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_kolom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_kolom_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_kolom_surats`
--

LOCK TABLES `ref_kolom_surats` WRITE;
/*!40000 ALTER TABLE `ref_kolom_surats` DISABLE KEYS */;
INSERT INTO `ref_kolom_surats` VALUES (1,2,'nama','Nama'),(2,2,'nik','NIK'),(3,2,'jenis_kelamin','Jenis Kelamin'),(4,2,'tempat_lahir','Tempat Lahir'),(5,2,'tanggal_lahir','Tanggal Lahir'),(6,2,'kewarganegaraan','Kewarganegaraan'),(7,2,'agama','Agama'),(8,2,'pekerjaan','Pekerjaan'),(9,2,'alamat','Alamat'),(10,4,'nama','Nama'),(11,4,'nik','NIK'),(12,4,'jenis_kelamin','Jenis Kelamin'),(13,4,'tempat_lahir','Tempat Lahir'),(14,4,'tanggal_lahir','Tanggal Lahir'),(15,4,'kewarganegaraan','Kewarganegaraan'),(16,4,'agama','Agama'),(17,4,'pekerjaan','Pekerjaan'),(18,4,'alamat','Alamat'),(23,4,'keperluan','Keperluan'),(24,5,'nama','Nama'),(25,5,'nik','NIK'),(26,5,'jenis_kelamin','Jenis Kelamin'),(27,5,'tempat_lahir','Tempat Lahir'),(28,5,'tanggal_lahir','Tanggal Lahir'),(29,5,'kewarganegaraan','Kewarganegaraan'),(30,5,'agama','Agama'),(31,5,'pekerjaan','Pekerjaan'),(32,5,'alamat','Alamat'),(33,5,'nama_usaha','Nama Usaha'),(34,5,'mulai_usaha','Mulai Usaha'),(35,5,'alamat_usaha','Alamat Usaha'),(36,5,'tujuan','Tujuan'),(37,6,'nama','Nama'),(38,6,'nik','NIK'),(39,6,'jenis_kelamin','Jenis Kelamin'),(40,6,'tempat_lahir','Tempat Lahir'),(41,6,'tanggal_lahir','Tanggal Lahir'),(42,6,'kewarganegaraan','Kewarganegaraan'),(43,6,'agama','Agama'),(44,6,'pekerjaan','Pekerjaan'),(45,6,'status_perkawinan','Status Perkawinan'),(46,6,'alamat','Alamat'),(47,7,'nama','Nama'),(48,7,'bin_binti','Bin / Binti'),(49,7,'nik','NIK'),(50,7,'jenis_kelamin','Jenis Kelamin'),(51,7,'tempat_lahir','Tempat Lahir'),(52,7,'tanggal_lahir','Tanggal Lahir'),(53,7,'kewarganegaraan','Kewarganegaraan'),(54,7,'agama','Agama'),(55,7,'pekerjaan','Pekerjaan'),(56,7,'status_perkawinan','Status Perkawinan'),(57,7,'alamat','Alamat'),(58,7,'tanggal_meninggal','Tanggal Meninggal'),(59,7,'jam_meninggal','Jam Meninggal'),(60,7,'tempat_meninggal','Tempat Meninggal'),(61,7,'sebab_meninggal','Sebab Kematian'),(62,7,'nama_pelapor','Nama Pelapor'),(63,7,'nik_pelapor','NIK Pelapor'),(64,7,'tempat_lahir_pelapor','Tempat Lahir Pelapor'),(65,7,'tanggal_lahir_pelapor','Tanggal Lahir Pelapor'),(66,7,'alamat_pelapor','Alamat Pelapor');
/*!40000 ALTER TABLE `ref_kolom_surats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$JRPwGDeR3sidZbl1sG.IDenNU4iRaIR880/mYZFgLhW.JQUDy7MF2','Ya',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-07 18:10:42
