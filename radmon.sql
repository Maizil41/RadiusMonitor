-- Adminer 4.8.1 MySQL 10.9.3-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bandwidth`;
CREATE TABLE `bandwidth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `rate_down` int(11) DEFAULT 0,
  `rate_up` int(11) DEFAULT 0,
  `creation_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

INSERT INTO `bandwidth` (`id`, `name`, `rate_down`, `rate_up`, `creation_date`) VALUES
(2,	'2M/1M',	2097152,	1048576,	'2024-09-17 17:27:12'),
(3,	'Keluarga',	2097152,	512000,	'2024-09-19 02:32:11');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `print_config`;
CREATE TABLE `print_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hsname1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsname2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsip` varchar(15) DEFAULT NULL,
  `hsdomain` varchar(255) DEFAULT NULL,
  `hscsn` varchar(20) DEFAULT NULL,
  `hsqrmode` varchar(10) DEFAULT NULL,
  `hsipdomain` varchar(10) DEFAULT NULL,
  `logomode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

INSERT INTO `print_config` (`id`, `hsname1`, `hsname2`, `hsip`, `hsdomain`, `hscsn`, `hsqrmode`, `hsipdomain`, `logomode`) VALUES
(1,	'MUTIARA',	'NET',	'10.10.10.1',	'mutiara.wifi',	'0853-7268-7484',	'code',	'ip',	'text');

-- 2024-09-22 17:27:54
