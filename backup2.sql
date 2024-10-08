-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: stage
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('10440ad6b670f7a1a7055ef36a42241e','i:1;',1725458212),('10440ad6b670f7a1a7055ef36a42241e:timer','i:1725458212;',1725458212),('5a6288048dc5b0b19dd2ae0a6ba5ab29','i:1;',1726483348),('5a6288048dc5b0b19dd2ae0a6ba5ab29:timer','i:1726483348;',1726483348),('f1ffb291372e63948548c755edadc540','i:1;',1726557813),('f1ffb291372e63948548c755edadc540:timer','i:1726557813;',1726557813);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domaines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

LOCK TABLES `domaines` WRITE;
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES (17,'d├®fense aerienne','2024-09-05 07:00:43','2024-09-05 07:00:43','Quand le ballon monte dans les airs, tu te sens comme un mur\n                                infranchissable o├╣ il y a des ajustements ├á faire ?'),(18,'d├®fense au sol','2024-09-05 07:00:43','2024-09-05 07:00:43','Est-ce que tu te sens serein dans les un contre un au sol ou tu aimerais\n                                encore affiner ton jeu d├®fensif ?'),(19,'r├®cuperation','2024-09-05 07:00:43','2024-09-05 07:00:43','Est-ce que tu es le premier sur chaque ballon perdu ou tu penses quÔÇÖil te manque un peu de mordant ?'),(20,'distribution','2024-09-05 07:00:43','2024-09-05 07:00:43','Tu te sens ├á lÔÇÖaise pour organiser le jeu et relancer proprement ou tu\n                                penses quÔÇÖil y a encore du boulot ?'),(21,'percussion','2024-09-05 07:00:43','2024-09-05 07:00:43','Est-ce que tu arrives ├á casser les lignes par ta vitesse et tes dribbles\n                                ou tu souhaites encore peaufiner cette arme ?'),(22,'mise en danger','2024-09-05 07:00:43','2024-09-05 07:00:43','Quand tu es pr├¿s de la surface, est-ce que tu as le flair pour cr├®er des\n                                occasions ou tu penses que tu pourrais ├¬tre encore plus mena├ºant ?'),(23,'finition','2024-09-05 07:00:43','2024-09-05 07:00:43','Est-ce que tu te sens comme un tueur devant le but ou il te manque encore\n                                un peu de sang-froid pour faire la diff├®rence ├á chaque fois ?'),(24,'attaque aerienne','2024-09-05 07:00:43','2024-09-05 07:00:43','Les attaques a├®riennes, ├ºa dit quoi ? Tu tÔÇÖen sens capable ou cÔÇÖest encore une notion sur laquelle tu souhaites progresser ?');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrainements`
--

DROP TABLE IF EXISTS `entrainements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entrainements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `domaine_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difficulte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dur├®e` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entrainements_domaine_id_foreign` (`domaine_id`),
  CONSTRAINT `entrainements_domaine_id_foreign` FOREIGN KEY (`domaine_id`) REFERENCES `domaines` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrainements`
--

LOCK TABLES `entrainements` WRITE;
/*!40000 ALTER TABLE `entrainements` DISABLE KEYS */;
INSERT INTO `entrainements` VALUES (2,21,'Apprendre les jongles','https://www.youtube.com/embed/CwWAFgXnhrI?si=odttX7NCb2B3VLiZ&autoplay=1','Facile','6min',NULL,'2024-09-16 08:54:57'),(3,22,'Am├®liorez votre vitesse','https://www.youtube.com/watch?v=tTJ1_CftK3o','Moyen','7min','2024-09-11 06:03:13','2024-09-11 07:20:02'),(6,17,'dfsfsds','https://www.youtube.com/watch_popup?v=5pFWlcYhEIk','Moyen','2min','2024-09-11 07:44:35','2024-09-11 09:49:40'),(7,20,'fjerfjfjz','https://www.youtube.com/embed/z7jP3moQi9c?si=tqKfZ8njFR4Im31u&autoplay=1','Difficile','4min','2024-09-12 06:07:08','2024-09-12 06:20:59');
/*!40000 ALTER TABLE `entrainements` ENABLE KEYS */;
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
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_00_134648_create_profiles_table',1),(2,'0001_01_01_000000_create_users_table',1),(3,'0001_01_01_000001_create_cache_table',1),(4,'0001_01_01_000002_create_jobs_table',1),(5,'2024_07_18_074749_add_two_factor_columns_to_users_table',1),(6,'2024_07_18_074811_create_personal_access_tokens_table',1),(7,'2024_08_06_091206_create_domaines_table',1),(8,'2024_08_08_142621_create_stats_table',1),(9,'2024_09_02_092212_create_entrainements_table',1),(10,'2024_09_05_075622_add_order_preference_to_users_table',2),(11,'2024_09_05_083839_add_description_to_domaine_table',3),(12,'2024_09_10_090220_add_identifiant_to_profile_table',4),(13,'2024_09_10_131137_add_role_to_users_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identifiant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profiles_identifiant_unique` (`identifiant`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (31,'bloqueur sol-air','images/bloqueur_sol_air.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','1'),(32,'bloqueur air distributeur','images/bloqueur_air_distributeur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','2'),(33,'bloqueur air ratisseur','images/bloqueur_air_ratisseur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','3'),(34,'bloqueur sol ratisseur','images/bloqueur_sol_ratisseur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','4'),(35,'bloqueur sol distributeur','images/ratisseur_distributeur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','5'),(36,'ratisseur distributeur','images/bloqueur_sol_distributeur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','6'),(37,'percuteur d├®fensif','images/percuteur_defensif.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','7'),(38,'distributeur percuteur','images/distributeur_percuteur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','8'),(39,'tireur d├®fensif','images/tireur_defensif.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','9'),(40,'distributeur cr├®ateur','images/distributeur_createur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','10'),(41,'percuteur cr├®ateur','images/percuteur_createur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','11'),(42,'tireur percuteur','images/tireur_percuteur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','12'),(43,'tireur cr├®ateur','images/tireur_createur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','13'),(44,'cible offensive tout terrain','images/cible_offensive_tout_terrain.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','14'),(45,'cible offensive tireur','images/cible_offensive_tireur.jpg','2024-09-10 07:12:13','2024-09-10 07:12:13','15');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('0YfqSWfNSX1NxdFvpWi9UupXZ67iACGl76X8EF2w',5,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYkdPYzJvUk1kTHlTQkthZ3JxM09GYVFnNGdZRk5yZUNYanNKUkQ3ayI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vc3RhZ2UudGVzdC9kb21haW5lLzIxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRhaTdpenA5LlVHYnpod2FiZWhKR24uUVI5Vkx0bmdEQkpVdnBTZjZhdkRxQ3RkTEtFUFUwQyI7fQ==',1726557755),('GtW0QQQKIh0eyWPPihAYFyE62vK3IVfXUYd2GYKK',6,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMTBlMnk2U2l1Y0xJV3ozdXhheDVoMHo5dEJHVUR5U1RSa1BOSVZvbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9zdGFnZS50ZXN0L2RvbWFpbmUvMjEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJFZRUGFoNU9OQmRQRlBIVmFNT1FhSHVNYUI4ZERKRVF4UlRKS1VIL3pqbTdEOVo3SkJucldhIjt9',1726484154);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `domaine_id` bigint unsigned NOT NULL,
  `note` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stats_user_id_foreign` (`user_id`),
  KEY `stats_domaine_id_foreign` (`domaine_id`),
  CONSTRAINT `stats_domaine_id_foreign` FOREIGN KEY (`domaine_id`) REFERENCES `domaines` (`id`) ON DELETE CASCADE,
  CONSTRAINT `stats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stats`
--

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` VALUES (41,5,17,1,'2024-09-10 07:18:50','2024-09-10 10:09:26'),(42,5,18,1,'2024-09-10 07:18:50','2024-09-10 10:09:26'),(43,5,19,1,'2024-09-10 07:18:50','2024-09-10 10:11:13'),(44,5,20,1,'2024-09-10 07:18:50','2024-09-10 10:11:13'),(45,5,21,10,'2024-09-10 07:18:50','2024-09-10 10:11:13'),(46,5,22,10,'2024-09-10 07:18:50','2024-09-10 10:11:13'),(47,5,23,1,'2024-09-10 07:18:50','2024-09-10 07:59:56'),(48,5,24,1,'2024-09-10 07:18:50','2024-09-10 07:59:56'),(49,6,17,1,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(50,6,18,1,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(51,6,19,1,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(52,6,20,10,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(53,6,21,10,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(54,6,22,9,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(55,6,23,1,'2024-09-16 08:41:51','2024-09-16 08:41:51'),(56,6,24,2,'2024-09-16 08:41:51','2024-09-16 08:41:51');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_preference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_profile_id_foreign` (`profile_id`),
  CONSTRAINT `users_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'test','test14@test.com',NULL,'$2y$12$ablwjWqo6qvJH5zakWCU7eLl9Q1NpYaYeOQLknjllbEJUGUkcjHLS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-09-10 05:58:36','2024-09-10 05:58:36',NULL,'user'),(5,'rebeu','rebeudu25@gmail.com',NULL,'$2y$12$ai7izp9.UGbzhwabehJGn.QR9VLtngDBJUvpSf6avDqCtdLKEPU0C',NULL,NULL,NULL,NULL,NULL,NULL,41,'2024-09-10 07:14:53','2024-09-10 10:29:48','desc','user'),(6,'romain','rom.mouchot@orange.fr',NULL,'$2y$12$VQPah5ONBdPFPHVaMOQaHuMaB8dDJEQxRTJKUH/zjm7D9Z7JBnrWa',NULL,NULL,NULL,NULL,NULL,NULL,41,'2024-09-16 08:40:42','2024-09-16 08:41:58','desc','admin');
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

-- Dump completed on 2024-09-17 10:04:39
