# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.33)
# Database: munhak_cake
# Generation Time: 2014-10-29 19:35:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table avisos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `avisos`;

CREATE TABLE `avisos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `aviso` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `avisos` WRITE;
/*!40000 ALTER TABLE `avisos` DISABLE KEYS */;

INSERT INTO `avisos` (`id`, `nome`, `aviso`, `created`, `modified`, `user_id`)
VALUES
	(1,'Comprar','Compre pÃ£o :/','2014-10-20 15:00:01','2014-10-20 15:02:14',1),
	(2,'Arguile','Vamos fumar narguile!','2014-10-20 19:51:25','2014-10-20 19:51:25',1);

/*!40000 ALTER TABLE `avisos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table pesquisas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pesquisas`;

CREATE TABLE `pesquisas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pesquisas` WRITE;
/*!40000 ALTER TABLE `pesquisas` DISABLE KEYS */;

INSERT INTO `pesquisas` (`id`, `nome`, `arquivo`, `created`, `modified`, `user_id`)
VALUES
	(1,'Teste','6f36c9706890f963dbe137841f1189f9.pdf','2014-10-20 13:30:58','2014-10-20 13:30:58',1);

/*!40000 ALTER TABLE `pesquisas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table uploads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `uploads`;

CREATE TABLE `uploads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;

INSERT INTO `uploads` (`id`, `nome`, `arquivo`, `created`, `modified`, `user_id`)
VALUES
	(15,'teste','cc8d940c4dc4d2a762a7312d521444f3.pdf','2014-10-20 13:17:26','2014-10-20 13:17:26',1),
	(16,'Teste','dab0de109165ab0b3100382a85d24b13.pdf','2014-10-20 19:47:44','2014-10-20 19:47:44',3);

/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `nome`, `username`, `password`, `role`, `created`, `modified`)
VALUES
	(1,'Caio Norder','caio','52e8e7650cc13963fe00065e1e6141401c4e4646','admin','2014-10-18 12:20:19','2014-10-20 19:39:43'),
	(3,'Jeffo Granetto','jeffo','52e8e7650cc13963fe00065e1e6141401c4e4646','admin','2014-10-18 15:51:32','2014-10-20 19:24:34'),
	(5,'Thiago Bernardon','thiago','52e8e7650cc13963fe00065e1e6141401c4e4646','cliente','2014-10-18 15:52:19','2014-10-20 19:44:22'),
	(6,'Monica Gioda','moni','52e8e7650cc13963fe00065e1e6141401c4e4646','cliente','2014-10-18 15:52:28','2014-10-18 15:52:28');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
