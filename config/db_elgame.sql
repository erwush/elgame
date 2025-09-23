-
/- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_elgame
CREATE DATABASE IF NOT EXISTS `db_elgame` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_elgame`;

-- Dumping structure for table db_elgame.tb_album
CREATE TABLE IF NOT EXISTS `tb_album` (
  `id` int NOT NULL AUTO_INCREMENT,
  `thumbnail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo_1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo_2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo_3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `trailer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_album: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_dev
CREATE TABLE IF NOT EXISTS `tb_dev` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_dev: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_game
CREATE TABLE IF NOT EXISTS `tb_game` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `rating` decimal(2,2) DEFAULT NULL,
  `deskripsi` longtext,
  `recspec` longtext,
  `minspec` longtext,
  `discount` float DEFAULT NULL,
  `id_publisher` int DEFAULT NULL,
  `id_dev` int DEFAULT NULL,
  `id_genre` int DEFAULT NULL,
  `id_album` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dev` (`id_dev`),
  KEY `id_publisher` (`id_publisher`),
  KEY `id_album` (`id_album`),
  KEY `genreid` (`id_genre`),
  CONSTRAINT `genreid` FOREIGN KEY (`id_genre`) REFERENCES `tb_game_genre` (`id_genre`),
  CONSTRAINT `id_album` FOREIGN KEY (`id_album`) REFERENCES `tb_album` (`id`),
  CONSTRAINT `id_dev` FOREIGN KEY (`id_dev`) REFERENCES `tb_dev` (`id`),
  CONSTRAINT `id_publisher` FOREIGN KEY (`id_publisher`) REFERENCES `tb_publisher` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_game: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_game_genre
CREATE TABLE IF NOT EXISTS `tb_game_genre` (
  `id_game` int DEFAULT NULL,
  `id_genre` int DEFAULT NULL,
  KEY `id_game` (`id_game`),
  KEY `id_genre` (`id_genre`),
  CONSTRAINT `id_game` FOREIGN KEY (`id_game`) REFERENCES `tb_game` (`id`),
  CONSTRAINT `id_genre` FOREIGN KEY (`id_genre`) REFERENCES `tb_genre` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_game_genre: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_genre
CREATE TABLE IF NOT EXISTS `tb_genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_genre: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_publisher
CREATE TABLE IF NOT EXISTS `tb_publisher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_publisher: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `bio` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_user: ~0 rows (approximately)

-- Dumping structure for table db_elgame.tb_wishlist
CREATE TABLE IF NOT EXISTS `tb_wishlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `id_game` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_elgame.tb_wishlist: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
